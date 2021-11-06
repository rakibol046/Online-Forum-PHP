<div class="modal hidden">
      <button class="btn--close-modal">&times;</button>
      <h2 class="modal__header">Ask a Questions</h2>
      <form action="php/ask-question-action.php" class="modal__form" method="POST">
        <label for="first-name" class="modal__form-label">Title</label>
        <input type="text" class="modal__form-input" id="first-name" name="title" />
        <label for="last-name" class="modal__form-label">Question</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <label for="tag" class="modal__form-label">Categories</label>
        <select name="category" id="tag">
          <option value="General">General</option>
          <option value="C">C/C++</option>
          <option value="Javascript">JavaScript</option>
          <option value="Node Js">Node JS</option>
          <option value="Python">python</option>
          <option value="React JS">React JS</option>
          <option value="Java">Java</option>
          <option value="php">PHP</option>
          <option value="css">CSS</option>
          <option value="css">Go</option>
        </select>
        <button type="submit" name="askSubmitBtn">Submit &rarr;</button>
      </form>
    </div>