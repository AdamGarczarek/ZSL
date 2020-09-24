<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Poczatek strony
    <?php
      echo '<br>Include<br>';
      include './3_1_file.php';
      include_once './3_1_file.php';
      echo 'Require<br>';
      require './3_1_file.php';
      require_once './3_1_file.php';
    ?>
    Koniec strony
  </body>
</html>
