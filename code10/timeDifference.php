<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 8/1/2018
 * Time: 9:51 PM
 */

$oldTime = round(microtime(true),3);
//used loop to make program slow and get time difference of around 1 Second.
$homepage = file_get_contents('www.google.com');

$newTime = round(microtime(true),3);
$totalTime = $newTime - $oldTime;

echo "Old Time : ".$oldTime."<br>";
echo "New Time : ".$newTime."<br>";
echo "Calculated Time in Seconds up to 3 Decimals :".$totalTime."<br>";
echo "Converted into Milliseconds : ".round($totalTime * 1000 );


//On Console Printing
echo "<script>console.log(\"Old Time : ".$oldTime."\")</script>";
echo "<script>console.log(\"New Time : ".$newTime."\")</script>";
echo "<script>console.log(\"Calculated Time in Seconds up to 3 Decimals : ".$totalTime."\")</script>";
echo "<script>console.log(\"Converted into Milliseconds : ".$totalTime * 1000 ."\")</script>";
