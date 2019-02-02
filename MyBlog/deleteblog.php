<?php
require_once("config.php");
require_once("header.php");

$thisblogid = $_GET["blogid"];

$deleteblog = deleteThisBlog($thisblogid);

?>
    <div id="content-wrap">
    <div id="content">
        <div id="main">
            <?php if($deleteblog){?>
                <h2>Blog has been deleted</h2>
            <?php } ?>
        </div>
    </div>


<?php require_once("footer.php"); ?>