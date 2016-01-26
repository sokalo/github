<?php

session_start();



// remove all session variables
session_unset(); 
 
// Destroy session 
session_destroy();
header('Location: login.php');

?>