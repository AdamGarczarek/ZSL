<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - dane</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <?php
      // echo '<pre>',print_r($_GET),'</pre>';
      $pass=$_GET['password'];
      $color=$_GET['color'];

      switch ($color){
        case 'r':
          $color='czerwony';
          break;
        case 'g':
          $color='zielony';
          break;
        case 'b':
          $color='niebieski';
          break;
      }

      echo <<<DATA
        Login: $_GET[login], hasło: $pass<br>
        Login: {$_GET['login']}<br>
        Kolor: $color
DATA;
    ?>
  </body>
</html>
