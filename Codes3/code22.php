<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 2/23/2018
 * Time: 11:45 PM
 */
function rand_string( $length ) {

    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=";
    return substr(str_shuffle($chars),0,$length);

}

echo rand_string(7);