<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
          <link href="style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        
        <?php
        $oid=$_GET['oid'];
        
         $connection = mysqli_connect("localhost", "root", "","canezaresdb");
            $sql = "SELECT * FROM orders WHERE oid=$oid";
            $result=$connection->query($sql);
            $row= mysqli_fetch_assoc($result);           
        ?>       
        
        <form action="editorders.php" method="POST"> 
            <input  type="hidden" id="oid" name="oid" value="<?php echo $row['oid'];?>">  
            
            <label for="product">Product</label>
            <input type="text" id="product" name="product" placeholder="product" value="<?php echo $row['product'];?>">
            <label for="price">Price</label>
            <input type="text" id="price" name="price" placeholder="price" value="<?php echo $row['price'];?>">
            <label for="quantity">Quantity</label>
            <input type="text" id="quantity" name="quantity" placeholder="quantity" value="<?php echo $row['quantity'];?>">
            <label for="status">Status</label>
            <input type="text" id="status" name="status" placeholder="status" value="<?php echo $row['status'];?>"> 
            <input type="submit" value="Edit" onclick="return confirm('Edit details?')">
        </form>
        
    </body>
</html>