<header>
      <nav class="navigation">
        <div class="navigation__logo">
          <a href="index.php" class="navigation__logo--link">JIT Solution</a>
        </div>
        <form class="navigation__search">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
            />
          </svg>
          <input
            type="search"
            name="search"
            class="navigation__search--input"
            placeholder="Search.."
          />
          <button class="btn btn--different">Ask Question</button>
        </form>
        <div class="navigation__profile" data-tab="1">
          <div class="navigation__profile-user">
            <img
              src="img/user-photo-1.jpg"
              alt="user-photo"
              class="navigation__profile-img"
            />
            <p class="navigation__profile-name"><?php echo $userName?></p>
          </div>
          <div class="navigation__profile-icon">
            <a href="php/logout.php">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
              />
            </svg>
            </a>
          </div>
        </div>
      </nav>
    </header>