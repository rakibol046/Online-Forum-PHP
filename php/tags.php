<main class="main-content main-content--3">
        <h2 class="heading-secondary">Tags</h2>
        <p class="paragraph">
        known as collaborative tagging, refers to assigning specific keywords or tags to items and sharing the set of tags between communities of users.
        </p>
        <!-- Categories -->
        <div class="main-header">
          <div class="search-box">
            <p class="search-box-name">Show All Tag Synonyms</p>
            <div class="search">
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
                class="search__input"
                placeholder="Filter by tag name.."
              />
            </div>
          </div>
        </div>
        <!-- Cards Compnents -->
        <div class="cards">
          <!-- card 01-->
          <div class="card">
          <a href="tag-page.php?tag=javascript" style="text-decoration: none; color: white;"><h3 class="card__title">JavaScript</h3></a> 
            <p class="card__description">
            JavaScript is a scripting or programming language that allows you to implement complex features on web pages — every time a web page does more than just sit there and display static information 
            </p>
            <p class="card__question-counts"><?php echo $javaScript?> Questions</p>
          </div>
          <!-- card 02-->
          <div class="card">
          <a href="tag-page.php?tag=python" style="text-decoration: none; color: white;"><h3 class="card__title">Python</h3></a> 
            <p class="card__description">
            Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Its high-level built in data structures, combined with dynamic typing 
            </p>
            <p class="card__question-counts"><?php echo $python?> Questions</p>
          </div>
          <!-- card 03-->
          <div class="card">
          <a href="tag-page.php?tag=java" style="text-decoration: none; color: white;"><h3 class="card__title">Java</h3></a> 
            <p class="card__description">
            Java is a programming language and computing platform first released by Sun Microsystems in 1995. It has evolved from humble beginnings to power a large share of today’s digital world
            </p>
            <p class="card__question-counts"><?php echo $java?> Questions</p>
          </div>
          <!-- card 04-->
          <div class="card">
          <a href="tag-page.php?tag=go" style="text-decoration: none; color: white;"><h3 class="card__title">Go</h3></a> 
            <p class="card__description">
            Go is an open source programming language that makes it easy to build simple, reliable, and efficient software. It has evolved from humble beginnings to power a large share of today’s digital world
            </p>
            <p class="card__question-counts"><?php echo $go?> Questions</p>
          </div>
          <!-- card 05-->
          <div class="card">
          <a href="tag-page.php?tag=react js" style="text-decoration: none; color: white;"><h3 class="card__title">React Js</h3></a> 
            <p class="card__description">
            React is a JavaScript library created for building fast and interactive user interfaces for web and mobile applications. It is an open-source, component-based, front-end library responsible only for the application.
            </p>
            <p class="card__question-counts"><?php echo $reactJs?> Questions</p>
          </div>
          <!-- card 06-->
          <div class="card">
          <a href="tag-page.php?tag=c" style="text-decoration: none; color: white;"><h3 class="card__title">C</h3></a> 
            <p class="card__description">
            C is a general-purpose programming language that is extremely popular, simple, and flexible to use. It is a structured programming language that is machine-independent various application
            </p>
            <p class="card__question-counts"><?php echo $c?> Questions</p>
          </div>
          <!-- card 07-->
          <div class="card">
          <a href="tag-page.php?tag=php" style="text-decoration: none; color: white;"><h3 class="card__title">PHP</h3></a> 
            <p class="card__description">
            PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.
            </p>
            <p class="card__question-counts"><?php echo $php?> Questions</p>
          </div>
          <!-- card 08-->
          <div class="card">
           <a href="tag-page.php?tag=css" style="text-decoration: none; color: white;"><h3 class="card__title">CSS</h3></a> 
            <p class="card__description">
            CSS stands for Cascading Style Sheets. It is the language for describing the presentation of Web pages, including colours, layout, and fonts, thus making our web pages presentable to the users.
            </p>
            <p class="card__question-counts"><?php echo $css?> Questions</p>
          </div>
          <!-- Card 09 -->
          <div class="card">
          <a href="tag-page.php?tag=node js" style="text-decoration: none; color: white;"><h3 class="card__title">Node Js</h3></a> 
            <p class="card__description">
            Node.js is a platform built on Chrome's JavaScript runtime for easily building fast and scalable network applications. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient.
            </p>
            <p class="card__question-counts"><?php echo $nodeJs?> Questions</p>
          </div>
        </div>
      </main>