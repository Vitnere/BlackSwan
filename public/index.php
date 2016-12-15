<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

<?php find_selected_page(); ?>


<div id="main">
    <div id="navigation">
        <?php echo public_navigation($current_subject, $current_page); ?>
    </div>

    <div id="page">
        <?php echo message(); ?>
        <?php if (isset($current_subject)) { ?>
            <h2>Manage subjects</h2>
            <p>Menu name: <?php echo htmlentities($current_subject["menu_name"]); ?><br>

        <?php } elseif (isset($current_page)) { ?>
            </p>
            <h2>Manage pages</h2>
            <p>Menu name: <?php echo htmlentities($current_page["menu_name"]); ?><br>

            <div class="view-content">
                <?php echo htmlentities($current_page["content"]); ?><br>
            </div>

        <?php } else {
            echo("Please select subject or page");
        }
        ?>
        </p>

    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
