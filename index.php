<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ECHO SAMPLE</title>
  </head>
  <body>
    <?php
      echo "<h1>Server Information</h1>";
      echo "<p>".date("Y-m-d H:i:s")."</p>";
      echo "<br>";
      echo phpinfo();
    ?>
  </body>
</html>
