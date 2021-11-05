<?php
// error_reporting(0);
require "db.php";
echo "login action";


      $email=$_POST["email"];

      $password=$_POST["password"];
     
      
        $result = mysqli_query($db, "SELECT user_id FROM userinfo where email='$email' AND password='$password'");
        $numberOfRows = mysqli_num_rows( $result);
        if($numberOfRows>=1){

          $row = mysqli_fetch_assoc($result);
            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            $userid = $row['user_id'];  

            session_start();
            $_SESSION["userid"]= $userid;
            // echo $userid;
            
            header("location: ../index.php");
        
        }
        else{
          echo "Wrong password";

        }
       
  



?>