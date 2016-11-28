<?php
// 1. Create a database connection
define("DB_HOST", "localhost");
define("DB_USER", "Vitnere");
define("DB_PASS", "7530");
define("DB_NAME", "widget_corp");

$connection=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Test if connection occurred.
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}
?>
