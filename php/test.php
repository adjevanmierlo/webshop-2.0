<?php
include ("db_connection.php");   // altijd eerst deze regel toevoegen om een connectie met je db te maken //
    $sql = "SELECT *  FROM product where product_name = 'macbook'";  //slecteer alles van de tabel product waar de product naam gelijk is aan macbook //
    
    $data = $conn->query($sql); //dit is enkel om de query uit te voeren // 

    foreach ($data as $row)  // voor elke data maakt foreach een nieuwe rij //
    {   
        $htmlOutput  = "";         
        $htmlOutput  = '<div class= "flex-container">'; // niets meer als je div waar je alles wilt hebben //
        $htmlOutput .= '<img src="../lay-out foto/' . $row['product_img'] . '"style="width:100%">';  
        $htmlOutput .= '</div>';   // niets meer als de div waar je in html hem afsluit //
    
        echo $htmlOutput;
    }  
  
?>