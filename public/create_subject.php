<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<?php

if (isset($_POST['submit'])) {

    //Process the form
    //1.declare vars to POST
    $menu_name=mysql_security($_POST["menu_name"]);
    $position=(int)$_POST["position"];
    $visible=(int)$_POST["visible"];

    // 2. Perform database query into subjects
    $query="INSERT INTO subjects (";
    $query.="  menu_name, position, visible";
    $query.=") VALUES (";
    $query.="  '{$menu_name}', {$position}, {$visible}";
    $query.=")";

    $result=mysqli_query($connection, $query);

    //3.Check the result
    if ($result) {
        $message="Subject created. Success!";
        redirect_to("manage_content.php");
    } else {
        $message="Subject creation failed. Try again!";
        redirect_to("new_subject.php");
    }

} else {
    //Probably GET request
    redirect_to("new_subject.php");
}

?>


<?php if (isset($connection)) {
    mysqli_close($connection);
} ?>







