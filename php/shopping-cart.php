<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/pop-up.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Abel">
    <script src="../js/pop-up.js"></script>
    <title>Document</title>
</head>
<body>
<button id="winkelwagen-button"><img src="..\lay-out foto\winkelwagen.png"></button>
  <div id="pop-up-winkelwagen">
    <h1>Winkelwagen</h1>
    <?php
if (isset($_SESSION['users_id'])) {
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
}
else {
    echo 'log in aub';
}
?>


    <!-- <div class="winkel">
    <img src="..\lay-out foto\shop-photo\macbook.jpg">
    <p>macbook</p>
    <p>aantal</p>
    <p>prijs €</p> 
    </div>  -->
  </div>
 
 
</body>
</html>