<?php
require_once("config.php");
require_once("header.php");

$thisblogid = $_GET["blogid"];
$published = $_GET["published"];
if($published == 0) {
    $thisblog = publishThisBlog($thisblogid);
} else if($published == 1){
    $thisblog = unpublishThisBlog($thisblogid);
}

?>
    <div id="content-wrap">
    <div id="content">
        <div id="main">
            <?php if($published == 0 && $thisblog){?>
                <h2>Blog is published</h2>
            <?php } else if($published == 1 && $thisblog){?>
                <h2>Blog marked unpublished</h2>
            <?php }?>
        </div>
    </div>


<?php require_once("footer.php"); ?>