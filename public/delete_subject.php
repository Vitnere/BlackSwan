<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php find_selected_page(); ?>

<?php
$current_subject=find_subject_by_id($_GET["subject"]);
if (!$current_subject) {
    // subject ID was missing or invalid or
    // subject couldn't be found in database
    redirect_to("manage_content.php");
}

$pages_set=find_pages_for_subject($current_subject["id"]);
if (mysqli_num_rows($pages_set) > 0) {
    $_SESSION["message"]="Cant delete subject with pages.";
    redirect_to("manage_content.php?subject={$current_subject["id"]}");
}

$id=$current_subject["id"];
$query="DELETE FROM subjects WHERE id = {$id} LIMIT 1";
$result=mysqli_query($connection, $query);

//Check the result
if ($result && mysqli_affected_rows($connection) == 1) {
    //Qapla(Kligon[from Star Trek] word for success :D)
    $_SESSION["message"]="Subject deleted. Qapla!";
    redirect_to("manage_content.php");
} else {//Fail
    $message="Subject delete failed. Try again!";
    redirect_to("manage_content.php?subject={$id}");
}
?>