<?php
require_once("config.php");
require_once("header.php");
?>

<div id="content-wrap">
  <div id="content">
    <div id="main">
	    <p>Hey, <?php print $loggedInUser->first_name . " " . $loggedInUser->last_name; ?></p>
	    <p>This is an example page designed to demonstrate user authentication examples.</p>
	    <p>Just so you know, you registered this account on <?php print date("M d, Y", $loggedInUser->member_since); ?></p>.
    </div>
  </div>
<?php require_once("footer.php"); ?>