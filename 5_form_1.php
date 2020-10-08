<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Formularz</title>
  </head>
  <body>

    <?php
      // isset()
      if(!empty($_GET['surname'])){
        $surname = $_GET['surname'];
        echo "Nazwisko: $surname<hr>";
        // echo '<a href="./5_form_1.php">Powrót do formularza';
        echo "<a href=\"./5_form_1.php\">Powrót do formularza</a>";
      }else{
        echo <<<FORM
          <form method="get">
          <input type="text" name="surname"><br><br>
          <input type="submit" value="Wyślij"><hr>
      </form>
      FORM;
      }
    ?>
  </body>
</html>
