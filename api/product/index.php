<?php // Filen index.php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "webshop";
$connection = mysqli_connect($dbHost , $dbUser , $dbPass , $dbName);
mysqli_set_charset($connection, "utf8"); 
if(!($connection)){
echo "<h1>Fel!Check your connection <br>" . mysqli_connect_error() . "</h1>";
exit;
}
 
$query = "SELECT * FROM product";
$table = mysqli_query($connection, $query) or die (mysqli_error($connection));

// Steg 3 skapa en array

$array = array();
// Lägg till alla filmer i arrayen
while($row = $table->fetch_assoc()){
$array[] = $row;
}
 /* echo "<pre>";
print_r($array); 
echo "</pre>";   */

//skapa JSON med funktion json_encode()
$json_string = json_encode($array, JSON_PRETTY_PRINT);

print $json_string; 




?>
