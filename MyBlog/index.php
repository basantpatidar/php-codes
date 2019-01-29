<?php
require_once("config.php");

//Prevent the user visiting the logged in page if he/she is already logged in

if(isUserLoggedIn()) {
	header("Location: myaccount.php");
	die();
}

// call to fetchallblogs function from functions.php
$allblogs = fetchAllBlogs();
require_once("header.php");
?>

<div id="content-wrap">
	<div id="content">
		<div id="main">
			<?php foreach($allblogs as $bloginfo) {
                if ($bloginfo["deleteflag"] == 0 && $bloginfo["active"] == 1) {
                    $summary = truncate_chars($bloginfo["blogcontent"], 150, "...");
                    //$summary  = $bloginfo["blogcontent"];
                    $publisheddate = date("M d, Y", $bloginfo["datecreated"]); ?>

                    <a name="TemplateInfo" href="viewblog.php?blogid=<?php print $bloginfo["blogid"]; ?>">
                        <h1><?php print $bloginfo["title"]; ?></h1></a>
                    <br>
                    <p><?php print $summary; ?></p>
                    <p class="post-footer align-right">
                        BY : <?php print $bloginfo["firstname"] . " " . $bloginfo["lastname"]; ?>
                        <?php print $publisheddate; ?>
                        <a href="viewblog.php?blogid=<?php print $bloginfo["blogid"]; ?>">Read more</a>
                    </p>
                    <br><br>
                <?php }
            } ?>
		</div>
		</div>

<?php require_once("footer.php");?>