
   <?php include "header.php"?>

   
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
        echo "<div class='container'><h1>Thank you for your order!</h1>
        
         <h4> You choose ".$row['name'].". Prise is: " . $row['price']. "$ <br>";


            echo "<img src='./pics/".$row['picture']."' width=200 />";
        echo "</div>";
         endif; 
      
?>

<hr>
<div class="container" >
    
<form action="contacts.php" method ="post">
<fieldset>
    <div class="inputdata">
    <div class="form-group">
<div class="row">
<div class="col-sm-3">
</div>
<div class="col-sm-2">
<label for="fname" >First name</label>
</div>
<div class="col-sm-7">
<input type="text" name= "fname" required><br>
</div> </div> </div>
<div class="form-group">
<div class="row">
<div class="col-sm-3">
</div>
<div class="col-sm-2">
    <label for="lname">Last name</label>
</div>
<div class="col-sm-7">
    <input type="text" name= "lname" required><br>
</div></div> </div>
<div class="form-group">
    <div class="row">
    <div class="col-sm-3">
</div>
        <div class="col-sm-2">
            
            <label for="tel">Phone</label>
</div>
            <div class="col-sm-7">
            <input type="tel" name= "phone" required><br>
        </div></div> </div>
        <div class="form-group">
     <div class="row">
     <div class="col-sm-3">
</div>
             <div class="col-sm-2">
<label for="email">E-mail</label>
</div>
<div class="col-sm-7">
<input type="email" name= "email" required><br>
</div></div> </div>

</fieldset>
</div>

<div class="row">
<div class="col-sm-3">
</div>
        <div class="col-sm-1">
                
<input type="hidden" value="<?=$productId?>" name ="id">
<!-- <input type="hidden" value="<?=$price?>" name ="price"> -->
    
</div>
<div class="col-sm-2">

    <button type="submit" class="btn" value = "Send" id ="submit">Submit</button>



    </div></div>


   
</body>
</html>