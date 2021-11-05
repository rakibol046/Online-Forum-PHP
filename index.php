<?php

// error_reporting(0);
require "php/db.php";
session_start();

$userId=$_SESSION["userid"];

$result = mysqli_query($db, "SELECT * FROM userinfo where user_id='$userId'");
$numberOfRows = mysqli_num_rows( $result);
if($numberOfRows>=1){

  $row = mysqli_fetch_assoc($result);
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    $userName = $row['user_name'];  
    $address = $row['address'];  
    $profession = $row['profession'];  

}

$numberOfQuestion = mysqli_num_rows(mysqli_query($db, 'SELECT * FROM question'));


?>


<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Font Family  -->
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Work+Sans:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- Title -->
    <title>Just-In-Time Solution</title>
    <!-- StyleSheet -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
    <!-- Header Navigation-->
    <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
  <?php
  // $isLog = 0;
  if($userId != null){
    require 'php/header-nav-log.php';
  }
  else{
    require 'php/header.php';
  }
  ?>

    <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
    <!-- Main Content -->
    <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
    <div class="content">
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <!-- Side Navigation-->
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <?php require 'php/side-navigation.php';?>
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <!-- Main 01 home (Top Questions)-->
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <main class="main-content main-content__active main-content--1">
        <div class="main-header">
          <h1 class="heading-primary">Top Questions</h1>
          <div class="ratings">
            <!-- <p class="ratings__rate">9.7</p>
            <p class="ratings__vote">1090 Votes</p> -->
          </div>
        </div>
        <!-- question 01 -->
        <div id="homeData"></div>

      </main>
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <!-- Main 02 (All questions)-->
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <main class="main-content main-content--2" id="mainContent2QuestionArea">
        <div class="main-header">
          <span> <?php echo $numberOfQuestion?> Questions </span>
          <h1 class="heading-primary">All Questions</h1>
        </div>
        <div id="questionData"></div>
        <!-- question 01 -->
        
        
        <!-- question 06 -->
       
      </main>
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <!-- Main 03 (Tags)-->
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <?php require 'php/tags.php';?>
      <!-- User Profile -->
      <?php require 'php/user-profile.php';?>
 
    </div>

    <!--+-+-+-+-+-+-+--+-+-+-+-+-+-+-+-+-
    <!-- Booking/Login Page Section -->
    <!--+-+-+-+-+-+-+-++-+-+-+-+-+-+-+--->
 
    <?php require 'php/registration.php';?>

    <?php require 'php/login-content.php';?>
    <!--+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+- 
      <!-- Modal Window for Asked Questions  -->
    <!--+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+--->
    <?php require 'php/ask-question.php';?>
    
    <div class="overlay hidden"></div>

    <script>
        $(document).ready(function() {
          function questionData(){
            $.ajax({
            url : "php/question-data.php",
            type : "POST",
            success : function(data){
            $("#questionData").html(data);
            
         }
      });
    }
    questionData();

    function homeData(){
            $.ajax({
            url : "php/home-data.php",
            type : "POST",
            success : function(data){
            $("#homeData").html(data);
            
         }
      });
    }
    homeData();
    

          // $("#forget-btn").click(function(e) {
          //   e.preventDefault();
          //   var forgetEmail = $("#femail").val();
          //     $.ajax({
          //     url: "forget-password.php",
          //     type : "POST",
          //     data : {femail:forgetEmail},
          //     success : function(data){
          //       if(data == 1){
          //         $("#mymodel").show();
          //       }
          //     }
          //   });
          // });
        });
      </script>

    <script src="js/script.js"></script>
    <?php
  if($userId != null){
    require 'php/is-log-script.php';
  }
  // else{
  //   require 'php/header.php';
  // }
  ?>
  </body>
</html>
