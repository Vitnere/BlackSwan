<?php
// 1. Create a database connection
$dbhost="localhost";
$dbuser="Vitnere";
$dbpass="7530";
$dbname="widget_corp";
$connection=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Test if connection occurred.
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
} else {
    echo "Welcome to database!";
}

?>

<?php
// 2. Perform database query
$query="SELECT * ";
$query.="FROM subjects ";/*uvijek jedan razmak nakon
jedne izjave, jer SQL treba razmak izmedu komandi*/
$query.="WHERE visible = 1 ";
$query.="ORDER BY position ASC";
$result=mysqli_query($connection, $query);
// Test if there was a query error
if (!$result) {
    die("Database query died in suffering!!!");
}
?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

    <html lang="en">
    <head>
        <title>Databases</title>
    </head>
    <body>
    <img src="http://i.imgur.com/YyoAUpT.jpg" alt="">
    <ul>
        <?php
        // 3. Use returned data (if any)
        while ($subject=mysqli_fetch_assoc($result)) {
            // output data from each row
            ?>
            <li><?php echo $subject["menu_name"];
                /*var_dump($result); */?></li>
            <?php
        }
        ?>
    </ul>

    <?php
    // 4. Release returned data
    mysqli_free_result($result);
    ?>

    </body>
    </html>

<?php
// 5. Close database connection
mysqli_close($connection);
?>