<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css\index.css" rel="stylesheet" type="text/css">
    <link href="css\pop-up.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Abel">
    <script src="js/pop-up.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="photo">
            <img src="lay-out foto\logo.png" width="30" height="30">
            <?php              
           // echo $_SESSION ['users_role'];
            if(isset($_SESSION ['users_role']) && $_SESSION['users_role'] =='admin') {
               echo "<span>welkom terug adje</span>";
            }
            ?>
        </div>
        <div class="navbar">
            <a href="index.php">Home</a>
         <div class="dropdown">
                <button class="dropbtn">Producten
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="php\macbook.php">MacBook</a>
                    <a href="php\macbook-air.php">MacBook Air</a>
                    <a href="php\macbook-pro.php">MacBook Pro</a>
                    <!-- <a href="php\imac.php">iMac</a>
                    <a href="php\imac_pro">iMac Pro</a>
                    <a href="php\mac-pro.php">Mac Pro</a>
                    <a href="mac-mini.php">Mac mini</a> -->
                </div>
            </div>
            <!-- <a href="php\contact.php">Contact</a> -->
            <a href="php\about-us.php">Find-store</a>
        </div>
        <div class="topnav-right">
            <a href="php\sign-up.php">Aanmelden</a>
            <a href="php\sign-in.php">Inloggen</a>
            <button id="winkelwagen-button"><img src="lay-out foto\winkelwagen.png"width="30" height="30"></button>
  <div id="pop-up-winkelwagen">
    <h1>Winkelwagen</h1>
    <?php
if (isset($_SESSION['users_id'])) {
include "php/db_connection.php"; 
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
    <div class="wrapper">
        <div class="photo-main">
        </div>
    </div>
    <footer>
        <div class="copyright">
            &#9400; Adje van Mierlo
        </div>
        <div class="social">
            <a href="https://www.facebook.com" target="_blank"><img src="lay-out foto\facebook.png"></a>
            <!-- </div> -->
            <!-- <div class="instagram"> -->
            <a href="https://www.instagram.com" target="_blank"><img src="lay-out foto\instagram.png"></a>
            <!-- </div> -->
            <!-- <div class="linkedin" -->
            <a href="https://www.linkedin.com/" target="_blank"><img src="lay-out foto\linked-in.png"></a>
        </div>
    </footer>
    </div>
</body>

</html>