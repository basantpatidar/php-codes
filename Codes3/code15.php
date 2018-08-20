<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 2/23/2018
 * Time: 3:56 PM
 */
//Date and time printing
echo "Today's Date is " . date("m/d/Y") . "<br>";
$date    =    date("m/d/y");

  $first_date_find = strtotime(date("m/d/Y", strtotime($date)) . ", first day of this month");
echo $first_date = date("m/d/Y",$first_date_find);
print "<br>";

$last_date_find = strtotime(date("m/d/Y", strtotime($date)) . ", last day of this month");
echo $last_date = date("m/d/Y",$last_date_find);
?>
