<?php

require_once("config.php");

$thisblogid = $_GET["blogid"];
$thisblog = fetchThisBlog($thisblogid);

//print_r($_POST);
//Forms posted
if(!empty($_POST)) {
    $errors = array();
    $title = trim($_POST["title"]);
    $blog = trim($_POST["blog"]);

    if($title == "") {
        $errors[] = "enter a title";
    }

    if($blog == "") {
        $errors[] = "enter blog contents";
    }

    //End data validation
    if(count($errors) == 0) {
        $editBlog = editBlog($thisblogid, $title, $blog);
        print_r($editBlog);
        if($editBlog <> 1){
            $errors[] = "OOOPPSS!! error occured while updating the blog";
        }
    }
    if(count($errors) == 0) {
        $successes[] = "blog is updated and waiting for admin approval to publish";
    }
}
require_once("header.php");

?>

<div id="content-wrap">
    <div id="content">
        <div id="main">
            <blockquote>
                <?php print_r($errors); ?>
                <?php print_r($successes); ?>
            </blockquote>

            <form name="newUser" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                <p>
                    <label>Title:</label>
                    <input type="text" name="title"  value="<?php print $thisblog["title"] ?>"/>
                </p>

                <p>
                    <label>Blog Content:</label>
                    <textarea name="blog" rows="25" cols="40"><?php print $thisblog["blogcontent"] ?></textarea>
                </p>

                <p>
                    <label>&nbsp;<br></label>
                    <input type="submit" value="EditBlog"/>
                </p>
            </form>
        </div>
    </div>
<?php require_once("footer.php"); ?>
