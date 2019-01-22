<?php
/**
 * PraviinM
 */

print_r($_POST); //printing the Super Global POST Array.

require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $dob = $_POST['dateofbirth'];
    $email = $_POST['emailaddress'];


//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newuser = createNewUser($fname, $lname, $dob, $email, $city, $zip);

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
echo $newuser;
?>
