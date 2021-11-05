<?php
// error_reporting(0);
    require "db.php";
    echo "regi action";
    
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $profession = $_POST['profession'];
        if($profession!=""){
       
              $numberOfRows = mysqli_num_rows(mysqli_query($db, "select email from userinfo where email='$email'"));
              
              if( $numberOfRows>=1){
                  echo "Account already present";
              }
              else{
        
                $result =  mysqli_query($db, "insert into userinfo(user_name, email, password, address, profession) value('$username','$email', '$password', '$address', '$profession')");
                if($result == true) {
                    $queryResult = mysqli_query($db, "select user_id from userinfo where email='$email'");
                                        
                    $queryRow = mysqli_fetch_assoc($queryResult);
                    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                     
                    session_start();
                    $_SESSION['userid']= $queryRow['user_id']; 
                    header("location: ../index.php");
        
                 }
                 else{
                     echo "query not execute";
                 }
              }
         
        }
        else{
          echo "Select your profession";
      }
     

?>