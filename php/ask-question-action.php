<?php
// error_reporting(0);

    require "db.php";
    session_start();
  if(isset($_POST["askSubmitBtn"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    // $userid = $_SESSION['userid'];
    $userid = $_SESSION["userid"];
    // $time = date('h:i', time());
    date_default_timezone_set("Asia/Dhaka");
    $date = date('M d Y', time());
   
    $result = mysqli_query($db, "INSERT INTO question(user_id, question_title, question_desc, question_categories, date) VALUES ('$userid','$title','$description','$category' ,'$date')");

    if($result==true){
      header("location:../index.php");
    }
   
   
  }
?>