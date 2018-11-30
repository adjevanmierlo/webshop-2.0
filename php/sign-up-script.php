<?php
 
//  echo = $_GET ["naam van het html element"]


include "db_connection.php";     

$users_name = $_GET ["userid"];  /* $ is niets meer dan een var in js tussen [] verwijst naar je id in html */
$users_password = $_GET["psw"];
$users_email = $_GET ["email"];


try {
        $sql = "INSERT INTO users  (users_name, users_password, users_email) /* tussen haakjes plaats je de id namen zoals vermeld in je database */
        VALUES ('$users_name', '$users_password', '$users_email')";  /* tussen de haakjes is de waarde van wat je in de colum plaatst */
        // use exec() because no results are returned 
        $conn->exec($sql);
        echo "New record created successfully";
    }
catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

header("Location: ../index.php");  
?>