<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }
if(isset($_GET['logclear']) && ($_GET['logclear'] == 'true')) {
    log_clear($session->user_id);
    redirect_to("logfile.php");
}
?>
<?php include_layout_template("admin_header.php"); ?>
   
    <div id="main">
        <?php echo log_read(); ?>
        <hr />
        <a href="index.php">Back to the index</a>
        <br /><br />
        <a href="logout.php">Log Out</a>
    </div>
	
<?php include_layout_template("admin_footer.php"); ?>