<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="..\css\about-us.css" rel="stylesheet" type="text/css">
    <link href="..\css\pop-up.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Abel">
    <script src="../js/pop-up.js"></script>
    <title>Document</title>
</head>
<body>
        <div class="container">
                <div class="photo">
                   <img src="../lay-out foto/logo.png" width="30" height="30">
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
                      <!-- <a href="#">Find store</a> -->
                      <!-- <a href="#">Contact</a> -->
                      <a href="about-us.php">Find-store</a>
                      </div>
                      <div class="topnav-right">
                        <a href="..\php\sign-up.php">Aanmelden</a>
                        <a href="..\php\sign-in.php">Inloggen</a>
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
                      <div class="wrapper">
            <div class="photo-main">
                    <p>De winkel
                            Madje.nl ligt aan de Immenhof<br>
                             in het bourgondische hart van Teteringen.<br> 
                             Het enthousiaste team van Madje.nl houdt <br> je scherp en helpt bij het kiezen van de juiste <br>
                             oplossing voor jouw Apple-product of -accessoires. <br>
                             Teteringen heeft vele marktpleinen waar je cafés en restaurants vindt.<br>
                             Bakkerij De Jong en de Grote Kerk zijn zeker een bezoek waard.</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.976356091437!2d4.8174837176631335!3d51.
                    60532181412627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c69f40a45c54cf%3A0xc215838ef997a3b2!2sImmenhof+16%2C
                    +4847+SR+Teteringen!5e0!3m2!1snl!2snl!4v1543573490259"
                     width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                   
            </div> 
            </div>
            <footer> 
            <div class="copyright">
            &#9400; Adje van Mierlo
            </div>       
                <div class="social">
                    <a href="https://www.facebook.com" target="_blank"><img src="../lay-out foto/facebook.png"></a>
                <!-- </div> -->
                <!-- <div class="instagram"> -->
                <a href="https://www.instagram.com"target="_blank"><img src="../lay-out foto/instagram.png"></a>
                <!-- </div> -->
                <!-- <div class="linkedin" -->
                <a href="https://www.linkedin.com/"target="_blank"><img src="../lay-out foto/linked-in.png"></a>                            
                </div>
            </footer>
            </div>
    
    
             
</body>
</html>