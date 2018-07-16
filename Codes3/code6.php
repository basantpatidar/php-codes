<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 2/23/2018
 * Time: 2:48 AM
 */
$nums = array("1","2","3","4","5","6","7","8","9","10");
echo "Original :- ";
for($i = 0; $i<10 ; $i++){
    echo  $nums[$i].(" ");

}
echo"<br>".("New :- ");
$nums[2] = "$" ;
$nums[5] = "$" ;
$nums[8] = "$" ;
for($j = 0; $j<10 ; $j++){
    echo  $nums[$j].(" ");

}
?>