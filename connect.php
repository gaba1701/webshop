<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="root";
$dbName="webshop";

$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
mysqli_set_charset($connection, "utf8"); 
if(!$connection){
    echo "<h1>Fel!".mysqli_connect_error()."</h1>";
    exit;
}

?>