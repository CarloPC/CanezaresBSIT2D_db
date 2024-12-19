<?php

$product = $_GET['product'];
$price = $_GET['price'];
$quantity = $_GET['quantity'];
$status = $_GET['status'];

echo $product." ".$price." ".$quantity." ".$status." ";

    $connection = mysqli_connect("localhost", "root", "","canezaresdb");
            $sql = "INSERT into orders values(0, '$product', '$price', '$quantity', '$status')";
            $result=$connection->query($sql);
            $connection->close();
            
            header("location:index.php");