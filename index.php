<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
          <link href="style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        
        <form action="addorders.php" method="GET"> 
               
            <label for="product">Product</label>
            <input type="text" id="product" name="product" placeholder="product">
            <label for="price">Price</label>
            <input type="text" id="price" name="price" placeholder="price">
            <label for="quantity">Quantity</label>
            <input type="text" id="quantity" name="quantity" placeholder="quantity">
            <label for="status">Status</label>
            <input type="text" id="status" name="status" placeholder="status"> 
            <input type="submit" value="Add">
        </form>
        
        
        <table>       
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>             
            </thead>   
            
        <?php
        $connection = mysqli_connect("localhost", "root", "","canezaresdb");
            $sql = "SELECT * FROM orders";
            $result=$connection->query($sql);
            
            while($row=mysqli_fetch_assoc($result)){
                
                echo "<tr>";
                echo "<td>".$row['oid'];"</td>";
                echo "<td>".$row['product'];"</td>";
                echo "<td>".$row['price'];"</td>";
                echo "<td>".$row['quantity'];"</td>";
                echo "<td>".$row['status'];"</td>";
                echo "<td>";
                    echo "<a class=\"btn\" href=\"editordersview.php?oid=".$row['oid']."\">edit</a>";
                    echo "<a class=\"btn\" href=\"deleteorders.php?oid=".$row['oid']."\" onclick=\"return confirm('Delete order?')\">delete</a>";
                echo "</td>";
                echo "</tr>";
             }
             $connection->close();
        ?>
        </table>
     
    </body>
</html>
