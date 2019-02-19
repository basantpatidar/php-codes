<?php
require_once("config.php");
require_once("header.php");

$thisblogid = $_GET["blogid"];
$thisblog = fetchThisBlog($thisblogid);

?>
<div id="content-wrap">
	<div id="content">
		<div id="main">
			<h1><?php print $thisblog["title"]; ?></h1>
			<h3><?php print $thisblog["blogcontent"]; ?></h3>
		</div>
	</div>

	
<?php require_once("footer.php"); ?>
