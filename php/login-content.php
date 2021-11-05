<section class="section-book-log">
      <button class="btn--close-login">&times;</button>
      <div class="row">
        <div class="book">
          <div class="book__form">
            <form action="php/login-action.php" class="form" method="POST">
              <!-- Heading secondary for All section title -->
              <div class="u-margin-bottom-large">
                <h2 class="heading-tertiary">Login</h2>
              </div>
              
              <div class="form__group">
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form__input"
                  require
                  placeholder="Email Address"
                />
                <label for="email" class="form__label">Email</label>
              </div>
              <div class="form__group">
                <input
                  type="text"
                  name="password"
                  id="pass"
                  class="form__input"
                  require
                  placeholder="password"
                />
                <label for="pass" class="form__label">Password</label>
              </div>

              
              <button  style="border-radius:5px; border: none; width:150px; font-size: 20px ; padding: 5px; color:white; background-color:cadetblue;" type="submit" name="regi-submit" class="btn-tertiary">Sign In</button>
            </form>
          </div>
        </div>
      </div>
    </section>