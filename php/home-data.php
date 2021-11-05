<?php 
require 'db.php';

    // $result = mysqli_query($db, 'SELECT * FROM question ORDER BY RAND() LIMIT 100');
    $result = mysqli_query($db, "SELECT userinfo.user_name, question.question_id, question.question_title, question.date
    FROM question
    INNER JOIN userinfo
    ON userinfo.user_id = question.user_id
    ORDER BY RAND() LIMIT 100;");
    

  
    while($row = mysqli_fetch_assoc($result)){
   echo " 
   <div class='question'>
   <div class='question__answer-count'>0 answers</div>
   <div class='question__name'>
   <a href='answer.php?id={$row["question_id"]}'>{$row['question_title']}</a>
   </div>
   <div class='question__user'>{$row["user_name"]}</div>
   <div class='question__time'>{$row["date"]}</div>
   </div>
        
   ";
   }
    

?>