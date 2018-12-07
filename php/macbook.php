<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="..\css\macbook.css" rel="stylesheet" type="text/css">
    <link href="..\css\pop-up.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Abel">
    <script src="../js/pop-up.js"></script>
    <script src="../js/products.js"></script>
    <title>product</title>
</head>
<body>
        <div class="container">
            <div class="photo">
               <img src="..\lay-out foto\logo.png" width="30" height="30">
            </div>
            <div class="navbar">
                  <a href="..\index.php">Home</a>
                   <div class="dropdown">
                <button class="dropbtn">Producten 
                <i class="fa fa-caret-down"></i>
                </button>
            <div class="dropdown-content">
                <a href="macbook.php">MacBook</a>
                <a href="macbook-air.php">MacBook Air</a>
                <a href="macbook-pro.php">MacBook Pro</a>
                <!-- <a href="#">iMac</a>
                <a href="#">iMac Pro</a>
                <a href="#">Mac Pro</a>
                <a href="#">Mac mini</a> -->
            </div>
            </div> 
                  <!-- <a href="contact.php">Contact</a>  -->
                  <a href="about-us.php">Find-store</a>
                  </div>
                  <div class="topnav-right">
                    <a href="sign-up.php">Aanmelden</a>
                    <a href="sign-in.php">Inloggen</a>
                    <button id="winkelwagen-button"><img src="..\lay-out foto\winkelwagen.png"width="30" height="30"></button>
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
  </div>
                  </div>
                  </div> 
        <div class="flex-container">
                

                 <?php
                 include ("card-macbook.php");
                include ("db_connection.php");   // altijd eerst deze regel toevoegen om een connectie met je db te maken //
                    $sql = "SELECT *  FROM category where category_name = 'macbook'";  //slecteer alles van de tabel product waar de product naam gelijk is aan macbook //
                    
                    $data = $conn->query($sql); //dit is enkel om de query uit te voeren // 

                    foreach ($data as $row)  // voor elke data maakt foreach een nieuwe rij //
                    {   
                        $htmlOutput  = "";         
                        $htmlOutput  = '<div>'; // niets meer als je div waar je alles wilt hebben //
                        $htmlOutput .= '<img src="../lay-out foto/' . $row['category_img'] . '" alt="afbeelding niet beschikbaar">';  
                        $htmlOutput .= '</div>';   // niets meer als de div waar je in html hem afsluit //
                        $htmlOutput .= '<div>';
                        $htmlOutput .=  $row['category_information'];
                        $htmlOutput .= '</div>';
                        echo $htmlOutput;
                    }  
                
                ?>
        </div>
        <footer> 
        <div class="copyright">
        &#9400; Adje van Mierlo
        </div>       
            <div class="social">
                <a href="https://www.facebook.com" target="_blank"><img src="../lay-out foto\facebook.png"></a>
            <a href="https://www.instagram.com"target="_blank"><img src="../lay-out foto\instagram.png"></a>
            <a href="https://www.linkedin.com/"target="_blank"><img src="../lay-out foto\linked-in.png"></a>                            
            </div>
        </footer>
        </div>    
</body>
</html>


 
  
