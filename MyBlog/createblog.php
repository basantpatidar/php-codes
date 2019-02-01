<?php

require_once("config.php");
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
		$createBlog = createBlog($title, $blog);
		print_r($createBlog);
		if($createBlog <> 1){
			$errors[] = "OOOPPSS!! your blog could not be created";
		}
	}
	if(count($errors) == 0) {
		$successes[] = "blog is created waiting for admin approval";
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
					<input type="text" name="title" />
				</p>
				
				<p>
					<label>Blog Content:</label>
					<textarea name="blog" rows="25" cols="40"></textarea>
				</p>
				
				<p>
					<label>&nbsp;<br></label>
					<input type="submit" value="createBlog"/>
				</p>
			</form>
		</div>
	</div>

<?php require_once("footer.php"); ?>
