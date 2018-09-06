<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 2/26/2018
 * Time: 1:59 AM
 */

for($number = 1; $number <= 10; $number ++) {
    $k = $number; //k=1  , 2 ,  3,..10
    for ($j = $number - 1; $j >= 1; $j--) {
        $k = $k * $j;
    }
    Print "Factorial of $number is " . $k."  "."<br>";
}
