<?php

require_once("config.php");
$myblogs = fetchAllUserBlogs();
#   print_r($myblogs);

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
                    <?php if($loggedInUser->role == 'Admin'){?>
                    <th>Delete</th>
                    <?php }?>
                </tr>
                <?php foreach($myblogs as $displayblog) { ?>
                        <tr>
                            <td><?php print $displayblog["blogid"]; ?></td>
                            <td><?php print $displayblog["title"]; ?></td>
                            <td><a href="viewblog.php?blogid=<?php print $displayblog["blogid"]; ?>">View</a></td>
                            <td align="center"><a href="publish.php?blogid=<?php print $displayblog["blogid"]; ?>&published=<?php print $displayblog["active"]; ?>">
                                <?php if($displayblog["active"] == 0){?>
                                    Publish
                                <?php } else if($displayblog["active"] == 1){?>
                                    Unpublish
                                <?php }?></a>
                            </td>
                            <?php if($displayblog["deleteflag"] == 0 && $loggedInUser->role == 'Admin'){?>
                                <td><a href="deleteblog.php?blogid=<?php print $displayblog["blogid"]; ?>">Delete</a></td>
                            <?php }else if($displayblog["deleteflag"] == 1 && $loggedInUser->role == 'Admin'){?>
                                <td>Deleted</td>
                            <?php } ?>
                        </tr>
                <?php } ?>
            </table>
        </div>
    </div>

<?php require_once("footer.php"); ?>