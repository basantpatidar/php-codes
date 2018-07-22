<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 2/23/2018
 * Time: 3:35 PM
 */
$k = 0;
for($i = 1; $i <=5; $i ++){
    print"*";
    echo "<br>";
    if ($i < 5) {
        for ($j = 0; $j < $i; $j++) {
            print"*";
        }
    }

}