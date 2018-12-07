<?php

// echo $_POST['username'];
// echo $_POST['psw'];


$userName = $_POST['username'];
$userspassword = $_POST['psw'];


include "db_connection.php";     

    $sql = "SELECT users_id, users_name, users_password, users_role FROM users WHERE users_name = '$userName' AND users_password = '$userspassword'";
    
    $data = $conn->query($sql);  

    if($data -> rowCount() > 0){
        echo "de info klopt";
        session_start();
        foreach($data as $row){
            $_SESSION['users_id'] = $row['users_id'];
            $_SESSION['users_role'] = $row['users_role'];
        }  
        header("Location: ../index.php");  
    }else{
        echo "de info klopt niet";
        header("Location: ../index.php");  
    }

    // foreach ($data as $row)
    // {   
    //    echo $row['users_name'];
    //    echo $row['users_password'];
    // }  

?>