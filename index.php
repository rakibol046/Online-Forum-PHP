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
  </head>
  <body>
    <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
    <!-- Header Navigation-->
    <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
  <?php require 'php/header.php';?>

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
            <p class="ratings__rate">9.7</p>
            <p class="ratings__vote">1090 Votes</p>
          </div>
        </div>
        <!-- question 01 -->
        <div class="question">
          <div class="question__answer-count">0 answers</div>
          <div class="question__name">
            <a href="answer.html"
              >How does Prototypal inheritance works in JavaScript?</a
            >
          </div>
          <div class="question__user">Steven Jones</div>
          <div class="question__time">31/01/2021</div>
        </div>
       
        <!-- question 06 -->
        <div class="question">
          <div class="question__answer-count">0 answers</div>
          <div class="question__name">
            <a href="answer.html"
              >Difference between Procedural, object-oriented & functional
              prgramming?</a
            >
          </div>
          <div class="question__user">Steven Jones</div>
          <div class="question__time">31/01/2021</div>
        </div>
      </main>
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <!-- Main 02 (All questions)-->
      <!--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*---->
      <main class="main-content main-content--2">
        <div class="main-header">
          <span>2,21,000 Questions</span>
          <h1 class="heading-primary">All Questions</h1>
        </div>
        <!-- question 01 -->
        <div class="question">
          <div class="question__answer-count">0 answers</div>
          <div class="question__name">
            <a href="answer.html"
              >How does Prototypal inheritance works in JavaScript?</a
            >
          </div>
          <div class="question__user">Steven Jones</div>
          <div class="question__time">31/01/2021</div>
        </div>
        
        <!-- question 06 -->
        <div class="question">
          <div class="question__answer-count">0 answers</div>
          <div class="question__name">
            <a href="answer.html">What is Visual formatting model in CSS?</a>
          </div>
          <div class="question__user">Steven Jones</div>
          <div class="question__time">31/01/2021</div>
        </div>
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
    <!--+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+- 
      <!-- Modal Window for Asked Questions  -->
    <!--+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+--->
    <?php require 'php/ask-question.php';?>
    
    <div class="overlay hidden"></div>

    <script src="js/script.js"></script>
  </body>
</html>
