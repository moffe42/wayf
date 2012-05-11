<!DOCTYPE html>
<html>
  <head>
  <style>
    body { margin: 0 auto; width: 600px; } 
    section { display: block; }
    section#articles { width: 440px; float: left; padding: 10px; background-color: #fbf0cc; }
    article > header { text-decoration: underline; margin-bottom: 10px; }
    aside { float: left; width: 100px; padding: 10px; }
    footer { overflow: hidden; clear: both; text-align: center; padding: 20px; }
    nav li { float: left; width: 100px; text-align:center; padding: 10px; color: #fff; }
    nav ul { list-style: none; overflow: hidden; padding: 0; margin: 0; background-color: #424242; }
    a { color: #65ac1c; }
    nav li a { color: #fff; }
  </style>
  </head>
  <body style="font: 75% Lucida Grande, Trebuchet MS">
    <header>
      <hgroup>
        <h1>Page Title</h1>
        <h2>Page Subtitle</h2>
      </hgroup>
    </header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Tutorials</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <section id="articles">
      <article>
        <header>
          <h2><a href="#">Article Title</a></h2>
        </header>
        <section>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </section>
      </article>
      <article>
        <header>
          <h2><a href="#">Article Title</a></h2>
        </header>
        <section>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </section>
      </article>
    </section>
    <aside>
      <h2>Top links</h2>
      <ul>
        <li><a ref="external" href="#">Link 1</a></li>
        <li><a ref="external" href="#">Link 2</a></li>
        <li><a ref="external" href="#">Link 3</a></li>
        <li><a ref="external" href="#">Link 4</a></li>
        <li><a ref="external" href="#">Link 5</a></li>
      </ul>
    </aside>

    <footer>
      Footer content
    </footer>
  </body>
</html>
