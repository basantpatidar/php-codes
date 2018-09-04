<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 2/24/2018
 * Time: 1:07 AM
 */
//Next for loop

$l =5;
for($i = 0; $i < 11; $i ++) {
    print"*";
    if ($i < 5) {
        for ($j = 0; $j < $i; $j++) {
            print"*";
        }
    }

    if ($i > 4) {
        for ($k = $l; $k > 0; $k--) {
            print"*";

           /*print"$k";*/
        }
        $l--;

    }/* print"$l";*/
    print "<br>";
}
