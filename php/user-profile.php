<main class="main-content main-content--4">
        <figure class="user">
          <img src="img/user-photo-1.jpg" alt="" class="user__img" />
          <figcaption class="user__info">
            <p class="user__name">Steven Adam</p>
            <p class="user__join">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                  clip-rule="evenodd"
                />
              </svg>
              <span> Member For 1 Years </span>
            </p>
            <p class="user__location">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                  clip-rule="evenodd"
                />
              </svg>
              <span>Canada</span>
            </p>
          </figcaption>
        </figure>
        <!-- profile-->
        <div class="options">
          <div class="options__tab-container">
            <button
              class="options__tab options__tab--1 options__tab--active"
              data-tab="1"
            >
              Profile Activity
            </button>
            <button class="options__tab options__tab--2" data-tab="2">
              Setting
            </button>
          </div>
          <!-- activity-->
          <div
            class="
              options__activity
              options__content
              options__content--1
              options__content--active
            "
          >
            <p class="options__answer">
              <a href="#" class="options__answer--1"> Answer (0) </a>
              <span class="options__answer--2"
                >You have not answered any question yet.</span
              >
            </p>
            <p class="options__question">
              <a href="#" class="options__question--1"> Question (0) </a>
              <span class="options__question--2"
                >You have not asked any question Yet</span
              >
            </p>
          </div>
          <!-- settings-->
          <div class="options__settings options__content options__content--2">
            <figure class="options__photo">
              <img src="img/user-photo-1.jpg" alt="" class="options__img" />
              <figcaption class="options__img--new">
                Change Profile Picture
              </figcaption>
            </figure>
            <form action="" class="form">
              <label for="name">Display Name</label>
              <input type="text" id="name" class="form__display" />
              <label for="password">New Password</label>
              <input type="password" id="password" class="form__display" />
              <input type="button" value="Save Profile" />
              <input type="reset" value="Cancel" />
            </form>
          </div>
        </div>
      </main>
    </div>