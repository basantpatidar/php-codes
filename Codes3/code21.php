<?php
//Get file name using filename command
$filename = basename(parse_url('www.example.com/public_html/index.php')['path']);
echo $filename;
?>
