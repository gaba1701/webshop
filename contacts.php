<?php include "header.php"?>


  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
        
   
            
<?php

$productId = $_POST['id'];

if(empty($productId)) {
    header("Location: ./");
    die ();
}

require_once('connect.php');
$query = "SELECT * FROM product WHERE id = $productId";

$table = mysqli_query($connection , $query)
        or die (mysqli_error($connection));

     if($row = $table->fetch_assoc()):
        $price = $row['price'];
        
        echo "Your item: ".$row['name']."<br> for: ".$row['price']."$ is on the way you! <br> Thank you for visit!<br> See you soon again!";
        
     endif; 
?>

