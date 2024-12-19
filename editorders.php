<?php

$oid = $_POST['oid'];
$product = $_POST['product'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];

    $connection = mysqli_connect("localhost", "root", "","canezaresdb");
            $sql = "UPDATE orders SET product='$product', price='$price', quantity='$quantity', status='$status' WHERE oid=$oid";
            $connection->query($sql);
            $connection->close();
            
            header("location:index.php");