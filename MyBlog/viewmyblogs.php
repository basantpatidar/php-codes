<?php
require_once("config.php");
$myblogs = fetchMyBlogs();
//print_r($myblogs);

require_once("header.php");
?>

<div id="content-wrap">
	<div id="content">
		<div id="main">
			<table>
				<tr>
					<th>BlogID</th>
					<th>Title</th>
					<th>View</th>
					<th>Publish</th>
                    <th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php foreach($myblogs as $displayblog) {
                    if($displayblog["deleteflag"] == 0){?>
                        <tr>
                            <td><?php print $displayblog["blogid"]; ?></td>
                            <td><?php print $displayblog["title"]; ?></td>
                            <td><a href="viewblog.php?blogid=<?php print $displayblog["blogid"]; ?>">View</a></td>
                            <td align="center">
                                <?php if($displayblog["active"] == 1) { ?>
                                    Published
                                <?php }else if($displayblog["active"] == 0){?>
                                    Unpublished
                                <?php }?>
                            </td>
                            <td><a href="editblog.php?blogid=<?php print $displayblog["blogid"]; ?>">Edit</a></td>
                            <td><a href="deleteblog.php?blogid=<?php print $displayblog["blogid"]; ?>">Delete</a></td>
                        </tr>
				<?php }
				} ?>
			</table>
		</div>
	</div>

<?php require_once("footer.php"); ?>