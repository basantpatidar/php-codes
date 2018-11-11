<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 2/23/2018
 * Time: 1:29 PM
 */
// Associative Array
$capitals = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
    "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
    "Sweden"=>"Stockholm", "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
ksort($capitals);
foreach($capitals as $i => $i_value) {
    echo "Country = " . $i . ", Capital = " . $i_value;
    echo "<br>";
}
?>
