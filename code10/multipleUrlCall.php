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
//used loop to make program slow and get time difference of around 1 Second
    $homepage = file_get_contents($website[arrayCounter]);
    $newTime = round(microtime(true),3);
    $totalTime = $newTime - $oldTime;
    $avgtime = $avgtime + $totalTime;
    $arrayCounter ++;
    echo "Call ".($arrayCounter)." : ". $totalTime. "<br>";
}

echo "Average time : ".($avgtime/10). "<br>";




/*
function upguard_api_results($website){
    $apiKey = 'B8E2538B5221195ECA3D63A9453C2A7E';
    $secret = '262C06FF063FEB1790B8DAA497E209C5';
    $name = "Security rating of the listing's Internet footprint per Upguard <a href='https://www.upguard.com/'>https://www.upguard.com/</a>";

    if(substr($website, 0,4)=='http')
        $website = str_replace('http://', '', str_replace('https://','',$website));
    $pos = strpos($website, '/');
    if($pos > 0)
        $website = substr($website, 0,$pos);
    echo "website here ".$website;
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://cyber-risk.upguard.com/api/cloudscan/details/v2/?hostname=".$website."&apikey=".$apiKey."&secret=".$secret,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "postman-token: 72d6db70-9e18-169a-6b71-437b76f19d0d"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
*/