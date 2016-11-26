<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>Form Processing</title>
</head>
<body>

        <?php
        // detect form submission
        if (isset($_POST['submit'])) {
            echo "form was submitted<br />";
        }
        ?>

		<pre>
		<?php
        print_r($_POST);
        ?>
		</pre>
        <br/>
        <?php
        // detect form submission
        if (isset($_POST['submit'])) {// da li je forma submit
            echo "form was submitted<br />";

            // set default values
            if (isset($_POST["username"])) {
                $username=$_POST["username"];
            } else {
                $username="User";//ako nije ukucano user name postavi ovu defualt vrijednost
            }
            if (isset($_POST["password"])) {
                $password=$_POST["password"];
            } else {
                $password="0000";//ako nije ukucan password postavi ovu defualt vrijednost
            }

            // set default values using ternary operator
            //   boolean_test ? value_if_true : value_if_false
            $username=isset($_POST['username']) ? $_POST['username'] :"";//isto kao gore,
            // lijevo od uputnika da li je forma submit, desno od uputnik postavi defualt vrijednost
            $password=isset($_POST['password']) ? $_POST['password'] :"";

        } else {
            $username="";
            $password="";
        }
        ?>

        <?php
        echo "{$username}: {$password}";
        ?>


</body>
</html>
