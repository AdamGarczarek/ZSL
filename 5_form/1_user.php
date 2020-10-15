<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
  </head>
  <body>
    <form action="1_user_data.php" method="get">
      <input type="text" name="login" placeholder="Login" autofocus><br><br>
      <input type="password" name="password" placeholder="Hasło" autofocus><br><br>
      <h5>Ulubiony kolor:</h5>
      <input type="radio" name="color" value"r">Czerwony
      <input type="radio" name="color" value"g" checked>Zielony
      <input type="radio" name="color" value"b">Niebieski<br><br>

      <input type="submit" value="Zatwierdź dane">
    </form>
  </body>
</html>
