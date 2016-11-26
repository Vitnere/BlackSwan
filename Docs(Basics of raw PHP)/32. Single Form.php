<?php
require_once("28. included_functions.php");

if (isset($_POST['submit'])) {
    // form was submitted
    $username=$_POST["username"];
    $password=$_POST["password"];

    if ($username == "Vitnere" && $password == "30203020") {
        // successful login
        redirect_to("24. Debugging.php");
    } else {
        $message="There were some errors.";
    }
} else {
    $username="";
    $message="Please log in.";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>Form</title>
</head>
<body>

<?php echo $message; ?><br/>

<form action="32. Single Form.php" method="post">
    Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"/><br/><!--htmlspecialchars da se osigura cistoca unesengo username,
    bez specijalnih html znakova koji mogu srustiti formu-->
    Password: <input type="password" name="password" value=""/><br/>
    <br/>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>
