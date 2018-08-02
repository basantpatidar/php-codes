<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 8/1/2018
 * Time: 9:51 PM
 */

$oldTime = round(microtime(true),3);
//used loop to make program slow and get time difference of around 1 Second
$j = 1;
for($i = 0; $i < 50000000; $i++ ){
  $j ++;

}
$newTime = round(microtime(true),3);
$totalTime = $newTime - $oldTime;

echo "Old Time : ".$oldTime."<br>";
echo "New Time : ".$newTime."<br>";
echo "Calculated Time in Seconds up to 3 Decimals :".$totalTime."<br>";
echo "Converted into Milliseconds : ".round($totalTime * 1000 );