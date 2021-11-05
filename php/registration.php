<section class="section-book">
      <button class="btn--close-signin">&times;</button>
      <div class="row">
        <div class="book" style="height:560px;">
          <div class="book__form">
            <form action="php/registration-action.php" class="form" method="POST">
              <!-- Heading secondary for All section title -->
              <div class="u-margin-bottom-large">
                <h2 class="heading-tertiary">Register Now</h2>
              </div>
              <div class="form__group">
                <input
                  type="text"
                  name="name"
                  id="fullname"
                  class="form__input"
                  placeholder="Full Name"
                />
                <label for="fullname" class="form__label">Full Name</label>
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
                  name="address"
                  id="email"
                  class="form__input"
                  require
                  placeholder="Address"
                />
                <label for="email" class="form__label">Address</label>
              </div>
              <div class="form__group">
                <input
                  type="password"
                  name="password"
                  id="pass"
                  class="form__input"
                  require
                  placeholder="password"
                />
                <label for="pass" class="form__label">Password</label>
              </div>

              <div class="form__group">
                <div class="form__radio-group">
                  <input
                    type="radio"
                    name="profession"
                    id="manage"
                    class="form__radio-input"
                    value="Student"
                  />
                  <label for="manage" class="form__radio-label">
                    <span class="form__radio-button">&nbsp;</span>
                    Student
                  </label>
                </div>
                <div class="form__radio-group">
                  <input
                    type="radio"
                    name="profession"
                    id="manage2"
                    class="form__radio-input"
                    value="Teacher"
                  />
                  <label for="manage2" class="form__radio-label">
                    <span class="form__radio-button">&nbsp;</span>
                    Teacher
                  </label>
                </div>
              </div>
              <button style="border-radius:5px; border: none; width:150px; font-size: 20px ; padding: 5px; color:white; background-color:cadetblue; margin-top:20px;" type="submit" name="regi-submit" class="btn-tertiary">Sign In</button>
            </form>
          </div>
        </div>
      </div>
    </section>