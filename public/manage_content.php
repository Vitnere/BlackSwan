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
        <a href="new_subject.php">+ Add a subject</a><br>
        <a href="new_page.php?subject=<?php echo urlencode($current_subject["id"]); ?>">+ Add a new page</a>
    </div>

    <div id="page">
        <?php echo message(); ?>
        <?php if (isset($current_subject)) { ?>
            <h2>Manage subjects</h2>
            <p>Menu name: <?php echo htmlentities($current_subject["menu_name"]); ?><br>
                Position:<?php echo $current_subject["position"]; ?><br>
                Visible:<?php echo $current_subject["visible"] == 1 ? 'yes' :'no'; ?>
                &nbsp;<a href="edit_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>">Edit
                    subject</a>


            <h2>Manage pages</h2>
            <?php
            $subject_pages=find_pages_for_subject($current_subject["id"], false);
            while ($page=mysqli_fetch_assoc($subject_pages)) {
                echo "<li>";
                $safe_page_id=urlencode($page["id"]);
                echo "<a href=\"manage_content.php?page={$safe_page_id}\">";
                echo htmlentities($page["menu_name"]);
                echo "</a>";
                echo "</li>";
            }
            ?>
        <?php } elseif (isset($current_page)) { ?>
            </p>
            <h2>Manage pages</h2>
            <p>Menu name: <?php echo htmlentities($current_page["menu_name"]); ?><br>
                Position:<?php echo $current_page["position"]; ?><br>
                Visible:<?php echo $current_page["visible"] == 1 ? 'yes' :'no'; ?><br>
                Content:<br>
            <div class="view-content">
                <?php echo htmlentities($current_page["content"]); ?><br>
            </div>
            <a href="edit_page.php?page=<?php echo urlencode($current_page["id"]); ?>">Edit page</a>
            &nbsp;<a href="delete_page.php?page=<?php echo urlencode($current_page["id"]); ?>">Delete page</a>
        <?php } else {
            echo("Please select subject or page");
        }
        ?>
        </p>

    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
