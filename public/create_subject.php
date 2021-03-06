<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once ("../includes/validation_functions.php"); ?>


<?php

if (isset($_POST['submit'])) {

    //Process the form
    //1.declare vars to POST
    $menu_name=mysql_security($_POST["menu_name"]);
    $position=(int)$_POST["position"];
    $visible=(int)$_POST["visible"];

    //2.validations
    $required_fields = array("menu_name","position","visible");
    validate_presences($required_fields);

    $fields_with_max_lengths = array("menu_name"=>30);
    validate_max_lengths($fields_with_max_lengths);

    if(!empty($errors)){
        $_SESSION["errors"] = $errors;
        redirect_to("new_subject.php");
    }

    // 3. Perform database query into subjects
    $query="INSERT INTO subjects (";
    $query.="  menu_name, position, visible";
    $query.=") VALUES (";
    $query.="  '{$menu_name}', {$position}, {$visible}";
    $query.=")";

    $result=mysqli_query($connection, $query);

    //3.Check the result
    if ($result) {
        $_SESSION["message"]="Subject created. Success!";
        redirect_to("manage_content.php");
    } else {
        $_SESSION["message"]="Subject creation failed. Try again!";
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







