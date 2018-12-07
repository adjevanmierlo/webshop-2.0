<?php

session_start();
$user_id = $_SESSION['users_id'];

include "db_connection.php";    

$product_id = $_GET["product_id"];
$product_price = $_GET["product_price"];
$product_name = $_GET["product_name"];
$amount = 1;

try {
    $sql = "INSERT INTO shopcart (u_id, product_id, product_price, product_name, amount)
    VALUES ('$user_id' , '$product_id', '$product_price', '$product_name', $amount)";
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header("Location: ..\index.php");  
?>