<form action="php/question-answer-action.php" class="answer__form" method="POST">
            <label for="comment">Your Answer:</label>
            <textarea name="answer" id="comment" cols="30" rows="10" width="100%"></textarea>
            <button class="submit-btn" type="submit" name="answerSubmitBtn">Answer Submit</button>
            <input type="text" name="question_id" value="<?php echo $questionId?>" hidden>
          </form>