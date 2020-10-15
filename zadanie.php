<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
      <?php
          $name=$_GET['name'];
          $sex=$_GET['sex'];

          switch ($sex){
            case 'm':
              $sex='male';
              break;
            case 'f':
              $sex='female';
              break;
          }

          echo <<<DATA
            Name: $_GET[name]<br>
            Sex: $sex<br>
DATA;



      ?>

  </body>
</html>
