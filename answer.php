
<?php 
require 'php/db.php';
$questionId = $_GET["id"];

  $result = mysqli_query($db, "SELECT * FROM question WHERE question_id ='$questionId'");
  if($result==true){
  while($row = mysqli_fetch_assoc($result)){
  $title = $row['question_title'];
  $desc = $row['question_desc'];
  $category = $row['question_categories'];
  $date = $row['date'];
  }
}
    

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Family  -->
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Work+Sans:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- Title -->
    <title>Just-In-Time Solution</title>
    <!-- StyleSheet -->
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body{
            background-color: rgb(239,239,239);
        }
        .questionArea{
            width: 70%;
            margin: 90px auto;
            border: 1px solid white;
            background-color: white;
        
        }
        .submit-btn{
            background-color: rgb(166,30,77);
    padding: 5px;
    font-size: 21px;
    margin-bottom: 0px;
    color: white;
    border: none;
    border-radius: 5px;
            
        }
    .answer-area{
        border: 1px solid lightslategray;
        padding: 10px;
        margin-bottom: 15px;
        width: 100%;

    }
    .question-discription{
        font-size: 17px;
        font-weight: bold;
        margin-bottom: 15px;
        
    }
    .question-discription h1{
        color: rebeccapurple;
    }

    .homeurl{
      text-decoration: none;
      color: white;
      background-color: #888;
      /* border: 1px solid red; */
      font-size: 17px;
      border-radius: 5px;
      padding: 5px;
      margin-left: 100px;

    }
    </style>
  </head>
  <body>
    <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
    <!-- Header Navigation-->
    <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
    <?php
      
            require 'php/answer-header.php';
  
  ?>


      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <!-- Main 01 home (Top Questions)-->
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->

      <main class="main-content main-content__active main-content--1">
        <!-- question 01 -->
        <div class="questionArea">
        <div class="question">
          <div class="question__name">
            <a href="#"> <?php echo $title?></a>
          </div>
          <!-- <div class="question__user">Steven Jones</div> -->
          <div class="question__time"><?php echo $date?></div>
        </div>
        <div class="answer">
        
        <div class="question-discription">
            <h1>Problem Description</h1>
            <?php echo $desc?>
        </div>

        <?php 

        // $result = mysqli_query($db, "SELECT userinfo.user_name, question.question_id, question.question_title, question.date
        // FROM question
        // INNER JOIN userinfo
        // ON userinfo.user_id = question.user_id
        // WHERE question_id ='$questionId';");

          // $ansResult = mysqli_query($db, "SELECT * FROM answer WHERE question_id ='$questionId'");
          $ansResult =mysqli_query($db, "SELECT userinfo.user_name, answer.date, answer.question_answer
          FROM answer
          INNER JOIN userinfo
          ON userinfo.user_id = answer.user_id
          WHERE question_id ='$questionId';");
          $i=0;
          while($ansRow = mysqli_fetch_assoc($ansResult)){
              $i++;
            echo "
            <div class='answer-area'>
            <div class='question__answer-count answer__count'>{$i} answers</div>
              <p class='answer__details'>
               {$ansRow["question_answer"]}
              </p>
              <div class='answer__person'>
                <p>Answerd by</p>
                <a href='#'>{$ansRow["user_name"]}</a>
                <p>{$ansRow["date"]}</p>
              </div>
            </div>
            ";

          }
          
        
    

?>



          <form action="php/question-answer-action.php" class="answer__form" method="POST">
            <label for="comment">Your Answer:</label>
            <textarea name="answer" id="comment" cols="30" rows="10" width="100%"></textarea>
            <button class="submit-btn" type="submit" name="answerSubmitBtn">Answer Submit</button>
            <input type="text" name="question_id" value="<?php echo $questionId?>" hidden>
          </form>
          <button></button>
        </div>
    </div>
      </main>
     
    <div class="overlay hidden"></div>
    <script src="js/script.js"></script>
  </body>
</html>
