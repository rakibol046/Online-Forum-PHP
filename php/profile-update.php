<?php
// error_reporting(0);

    require "db.php";
    session_start();
    $userid = $_SESSION['userid'];
    $name = $_POST["name"];
   $password = $_POST["password"];

    if($password != ""){           
              
            $result = mysqli_query($db, "UPDATE userinfo SET user_name='$name', password='$password'
            WHERE user_id = '$userid'");

            if($result==true){
              header("location: ../index.php");

            }
         
    }
    else{

        $rresult = mysqli_query($db, "UPDATE userinfo SET user_name='$name'
        WHERE user_id = '$userid'");

if($rresult==true){
    header("location: ../index.php");

  }
        
    }
?>