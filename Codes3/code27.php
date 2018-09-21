<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 2/26/2018
 * Time: 1:20 AM
 */
//For Loop
for($pqr = 0;$pqr < 10; $pqr ++){
    print"pqr ";
} print"<br>";
for($asdf = 0;$asdf < 10; $asdf ++){
    print"asdf ";
}
print"<br>";
for($count = 1;$count < 16; $count ++){
    print"$count"." ";
}
print"<br>";
$i = 1;
for ($x = ord('A'); $x <= ord('F'); $x++) {

    echo $i.". Block ".chr($x)."<br>";
    $i++;

}
