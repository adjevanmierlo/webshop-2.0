<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="..\css\card.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<div class="card">
  <?php 
  include ("db_connection.php");
  $sql = "SELECT * FROM product where product_name = 'macbook-pro'";

  $data = $conn->query($sql);

  foreach ($data as $row)
  {
    $htmlOutput  = "";         
                        $htmlOutput .= '<img src="../lay-out foto/' . $row['product_img'] . '" alt="afbeelding niet beschikbaar">';  
                        $htmlOutput .= '<h1>'. $row['product_name'].'</h1>';
                        $htmlOutput .= '<p class = "price">&euro;'.$row['product_price'].'</p>';
                        $htmlOutput .= '<a href="shopping-cart-script.php?product_id=' . $row['product_id'] . '&product_price=' . $row['product_price'] . '&product_name=' . $row['product_name'] . '">';
                        $htmlOutput .= '<button>voeg toe aan je winkelwagen</button></a>';
                        echo $htmlOutput; 
  }

?>
</div>
</body>
</html>