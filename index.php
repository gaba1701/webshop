  <?php include "header.php"?>

   
    
<?php
require_once('connect.php');
$query = "SELECT * FROM product";

$table = mysqli_query($connection , $query)
          or die (mysqli_error($connection));
 if(!$connection){
            echo "<h1>Check your connection to Data Base".mysqli_connect_error()."</h1>";
            exit;
        } 

?>
<table class= 'table table-striped'>
<tr> 
    <th>ID</th> 
    <th>Name</th> 
    <th>Price</th> 
    <th>Description</th>
    <th>Picture</th>
    <th></th>
</tr>
<?php while($row = $table->fetch_assoc()) : 

$picture = "<img src = './pics/" . $row ['picture'] ."' alt = 'goods' width = '80'>" ;    

    ?>
<tr>
   <?php $name =  $row ['name'];?>
    <td><?php echo $row ['id'];?></td>
    <td><?php echo ucfirst($name);?></td>
    <td><?php echo $row ['price']; ?></td>
    <td><?php echo $row ['description']; ?></td>
    <td><?php echo $picture; ?></td>
    
    
    </td>
    <td>

        <form action= 'update.php' method='post'>
            <input type="hidden" name="id"
                   value="<?php 
                   echo $row['id']; ?>">

            <input type="submit" value="Buy" 
                   class="btn btn-warning">
                 
        </form>
    </td>
</tr>
<?php 
//select 
endwhile;
 ?>

</table>
</body>
</html>