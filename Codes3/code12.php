<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 2/23/2018
 * Time: 3:15 PM
 */
//Array 
print" printing using orders";
$name = array("Jane Smith"=>"31","Jacob Smith"=>"41","William
Smith"=>"39","Frodo Baggins"=>"40");
asort($name);
print"Using ascending order sort by value";
echo "<br>";
foreach($name as $i => $i_value) {
    echo $i . " ".$i_value;
    echo "<br>";
}
ksort($name);

print"Using ascending order sort by key";
echo "<br>";
foreach($name as $i => $i_value) {
    echo $i . " ".$i_value;
    echo "<br>";
}
arsort($name);
print"Using descending order sort by value";
echo "<br>";
foreach($name as $i => $i_value) {
    echo $i . " ".$i_value;
    echo "<br>";
}
arsort($name);
print"Using descending order sort by key";
echo "<br>";
foreach($name as $i => $i_value) {
    echo $i . " ".$i_value;
    echo "<br>";
}
    ?>
