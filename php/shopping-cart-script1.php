<?php

include "db_connection.php"; 
session_start();
$u_id = $_SESSION['users_id'];

    $sql = "SELECT *  FROM shopcart WHERE u_id = '$u_id'";
    
    $data = $conn->query($sql);  
    
    foreach($data as $row)
    {
        $htmlOutput  = "";
        $htmlOutput .= '<div class="winkel">'; 
        $htmlOutput .= '<img src="../lay-out foto/' . $row['product_img'] . '" alt="afbeelding niet beschikbaar">';
        $htmlOutput .= '<p>' . $row['product_name'] .'</p>';
        $htmlOutput .= '<p>' . $row['amount'] .'</p>';
        $htmlOutput .= '<p>€' . $row['product_price'] .' </p>'; 
        $htmlOutput .= '</div>';
        echo $htmlOutput;
    }
     
?>

