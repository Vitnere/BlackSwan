<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
    <div id="navigation">

        <ul class="subjects">
            <?php
            // 2. Perform subjects database query
            $query="SELECT * ";
            $query.="FROM subjects ";
            $query.="WHERE visible = 1 ";
            $query.="ORDER BY position ASC";
            $subject_set=mysqli_query($connection, $query);
            // Test if there was a query error
            confirm_query($subject_set); ?>
            <?php
            // 3. Use returned data (if any)
            while ($subject=mysqli_fetch_assoc($subject_set)) {
                // output data from each row
                ?>

                <li>
                    <?php echo $subject["menu_name"];
                    // 2. Perform pages database query
                    $query="SELECT * ";
                    $query.="FROM pages ";
                    $query.="WHERE visible = 1 ";
                    $query.="AND subject_id={$subject["id"]} ";
                    $query.="ORDER BY position ASC";
                    $page_set=mysqli_query($connection, $query);
                    // Test if there was a query error
                    confirm_query($page_set);
                    ?>
                </li>

                <ul class="pages">
                    <?php while ($page=mysqli_fetch_assoc($page_set)) { ?>
                        <li><?php echo $page["menu_name"]; ?></li>
                    <?php } ?>
                    <?php mysqli_free_result($page_set); ?>
                </ul>

            <?php } ?>
        </ul>
        <?php

        // 4. Release returned data
        mysqli_free_result($subject_set);
        ?>

    </div>
    <div id="page">
        <h2>Manage Content</h2>

    </div>
</div>


<?php include("../includes/layouts/footer.php"); ?>


