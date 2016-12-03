<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

<?php find_selected_page(); ?>


<div id="main">
    <div id="navigation">
        <br/>
        <a href="admin.php">&laquo; Admin</a>
        <?php echo navigation($current_subject, $current_page); ?>
        <br>
        <a href="new_subject.php">+ Add a subject</a>
    </div>

    <div id="page">
        <?php echo message(); ?>
        <?php if (isset($current_subject)) { ?>
            <h2>Manage subjects</h2>
            <p>Menu name: <?php echo htmlentities($current_subject["menu_name"]); ?><br>
            Position:<?php echo $current_subject["position"]; ?><br>
            Visible:<?php echo $current_subject["visible"] == 1 ? 'yes' :'no'; ?>


            <br/><a href="edit_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>">Edit subject</a>
        <?php } elseif (isset($current_page)) { ?>
            </p>
            <h2>Manage pages</h2>
            <p>Menu name: <?php echo htmlentities($current_page["menu_name"]); ?><br>
                Position:<?php echo $current_page["position"]; ?><br>
                Visible:<?php echo $current_page["visible"] == 1 ? 'yes' :'no'; ?>
                Content:<br>
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
