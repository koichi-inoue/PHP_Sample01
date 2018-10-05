<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>ECHO SAMPLE</title>
  </head>

  <body>

    <header>
      <h1>PHP Basic Sample 01</h1>
    </header>

    <article>
      <?php
        echo "<h1>Server Information</h1>";
        echo "<p>".date("Y-m-d H:i:s")."</p>";
        echo "<br>";
        echo phpinfo();
      ?>
    </article>

    <footer>
      http://www.example.com
    </footer>

  </body>
</html>
