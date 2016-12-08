<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php find_selected_page(); ?>

<?php
$current_page=find_page_by_id($_GET["page"]);
if (!$current_page) {
    redirect_to("manage_content.php");
}

$id=$current_page["id"];
$query="DELETE FROM pages WHERE id = {$id} LIMIT 1";
$result=mysqli_query($connection, $query);

if ($result && mysqli_affected_rows($connection) == 1) {
    //Qapla(Kligon[from Star Trek] word for success :D)
    $_SESSION["message"]="Page deleted. Qapla!";
    redirect_to("manage_content.php?subject={$id}");
} else {//Fail
    $message="Subject delete failed. Try again!";
    redirect_to("manage_content.php?subject={$id}");
}
?>