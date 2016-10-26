<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>
<?php include_layout_template("admin_header.php"); ?>
   
    <div id="main">
		<h2>Menu</h2>
                <?php echo output_message($message); ?>
                <a href="list_photos.php">Photos</a>
                <br /><br />
                <a href="logfile.php">View logfile</a>
                <br /><br />
                <a href="logout.php">Log Out</a>
    </div>
	
<?php include_layout_template("admin_footer.php"); ?>