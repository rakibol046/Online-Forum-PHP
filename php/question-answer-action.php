<?php
// error_reporting(0);

    require "db.php";
    session_start();
    
  if(isset($_POST["answerSubmitBtn"])){
    $answer = $_POST["answer"];
    $questionId = $_POST["question_id"];
    // $userid = $_SESSION['userid'];
    $userid = $_SESSION["userid"];
    // $time = date('h:i', time());
    date_default_timezone_set("Asia/Dhaka");
    $date = date('M d Y', time());
   
    $result = mysqli_query($db, "INSERT INTO answer(user_id, question_id, question_answer, date) VALUES ('$userid','$questionId','$answer' ,'$date')");

    if($result==true){
      header("location:../answer.php?id=$questionId");
    }
    // else{
    //   echo 0;
    // }
  }
?>