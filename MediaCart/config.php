<?php
// Setup for user database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'website');
define('DB_PASSWORD', 'MRhZNdkXBfmnXHEr');
define('DB_NAME', 'mediacart');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

