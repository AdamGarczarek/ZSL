<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Formularz</title>
  </head>
  <body>
    <form method="get">
      <input type="text" name="surname"><br>
      <input type="submit" value="Wyślij"><hr>
    </form>
    <?php
      // isset()
      if(!empty($_GET['surname'])){
        $surname = $_GET['surname'];
        echo "Nazwisko: $surname";
      }else{
        echo 'Wyślij formularz';
      }


    ?>
  </body>
</html>
