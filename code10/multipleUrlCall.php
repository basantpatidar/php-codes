<?php
/**
 * Created by PhpStorm.
 * User: basan
 * Date: 8/9/2018
 * Time: 4:20 PM
 */
 
$website = array('www.google.com','www.facebook.com','www.yahoo.com','www.outlook.com','www.microsoft.com','www.bing.com','www.india.com','www.apple.com','www.samsung.com','www.lg.com');
$arrayCounter = 0;
$avgtime = 0;
for($i = 0; $i < 10; $i ++ ){
    $oldTime = round(microtime(true),3);
    $a;
    $homepage = file_get_contents($website[arrayCounter]);
    $newTime = round(microtime(true),3);
    $totalTime = $newTime - $oldTime;
    $avgtime = $avgtime + $totalTime;
    $arrayCounter ++;
    echo "Call ".($arrayCounter)." : ". $totalTime. "<br>";
}

echo "Average time : ".($avgtime/10). "<br>";



