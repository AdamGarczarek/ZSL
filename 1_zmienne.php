<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta set="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $name='Janusz';
      echo 'Imię: $name<br>';
      echo "Imię: $name<br>";
      echo 'text';

// typy danych
    $prawda=true;
    $fałsz=false;

    echo $prawda // 1
    echo $fałsz // nie wyświetla tekstu

// integer
    $calkowita = 10;
    $hex = 0xA;
    $oct = 010;
    $bin = 0b1011;

    echo '<hr>'.$bin.'<hr>';
    echo "<hr>$bin<hr>";

// składnia heredoc
    $name='Krystyna';
    $surename='Nowak';

    $text =<<< ETYKIETA
    Imię: $name<br>
    Nazwisko: $surname<hr>
  ETYKIETA;
  echo $text;

    echo <<< E
     Drugi heredoc
  E;

// składnia nowdoc
    $city='Poznań';
    echo <<< 'E'
    Miasto: $city
  E;
  echo "<br>Nazwa zmiennej \$city, wartość: $city";

    ?>
  </body>
</html>
