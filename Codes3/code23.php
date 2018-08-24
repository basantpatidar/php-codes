<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 2/23/2018
 * Time: 11:50 PM
 */

$Sample_URL = 'http://www.tipnol.com/Basant.php';
echo substr($Sample_URL, strrpos($Sample_URL, '/' )+1)."\n";
?>