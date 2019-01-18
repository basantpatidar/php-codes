<?php
/**
 * Created by PhpStorm.
 * User: basan
 * Date: 7/28/2018
 * Time: 9:00 PM


echo"basant"."<br>";
echo"patidar"."<br>";
$i = 5;
if($i =5) {
    echo "pace<br>";
    echo "ny";
}
*/
//Use of Array and password checker 

$users = array(
    (object)array('username' => 'basant', 'password' => 'secret'),
    (object)array('username' => 'avtar', 'password' => 'secret'),
    (object)array('username' => 'abc', 'password' => 'secret')
);

function match($a, $b) {
    return $a == $b;
}

function authentication($users, $username, $password) {
    for ($i = 0; $i < count($users); $i++ ){
        if(match($users[$i]->username, $username) && match($users[$i] -> password, $password)){
         return true;
        }
    }
    return false;
}

$isAuthenticated = authentication ($users, 'basant','secret');
if($isAuthenticated){
    echo'welcome, well-known user!';
}else {
    echo 'Not authenticated.';
}









