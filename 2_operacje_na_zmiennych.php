<?php
// wersja PHP
  echo PHP_VERSION.'<hr>';
  //echo phpinfo();

  $potega=2**10;
  echo $potega,'<br>'; // 1024

// operatory bitowe
// and &, or |, not ~, xor ^, <<, >>

  $x =0b1010;
  echo $x,'<br>'; // 10

  $x = $x << 1;
  echo $x,'<br>'; // 10100(2) 20

  $x = $x << 2;
  echo $x,'<br>'; // 101(2) 5

// porównanie
  $x = 1;
  $y = 10;

  echo $x <=> $y;
  $result = $x <=> $y;
  echo "$result<br>";

  $x=1;
  $y=1;

  if($x===$y) {
    echo 'Zmienne sa identyczne';
  }else{
    echo 'Zmienne nie sa identyczne
    <br>';
  }

  echo gettype($x); //integer
  echo gettype($y); //double
  echo 'hr';

  /*
    postinkrementacja $x++;
    preinkrementacja ++$x;
    postdekrementacja $x--;
    predekrementacja --$x;
  */

  $x=1;
  echo $x; //1
  $x=$x++;
  echo $x; //1
  $x=++$x;
  echo $x; //2
  $y=++$x;
  echo $x; //3
  $y=$x++;
  $y=--$y;
  echo "$y<br>"; //2

######################################

  $x=2;
  echo $x++; //2
  echo ++$x; //4
  echo $x; //4
  $y=$x++;
  echo $y; //4
  $y=++$x;
  echo $y; //6
  echo ++$x; //7

// operatory rzutowania
// int, float, string, array, oject, unset

  $test1 = '123abc45';

  echo 'Typ danych $test1: ', gettype($test1);
  $test1 = (int)$test1;
  echo "<br>$test1<br>"
  echo 'Typ danych $test1: ', gettype($test1), '<hr>';

  $test2 = 0;

  echo 'Typ danych $test2: ', gettype($test2); $test2 = (bool)$test2;
  echo "<br>$test2<br>" // false
  echo 'Typ danych $test2: ', gettype($test2), '<hr>';

  $test3 = 10;

  echo 'Typ danych $test3: ', gettype($test3); $test3 = (float)$test3;
  echo "<br>$test3<br>"
  echo 'Typ danych $test3: ', gettype($test3), '<hr>';



  echo 'Typ danych $x: ', gettype($test3);
  $x = (unset)$test3;
  echo "<br>$x<br>"
  echo 'Typ danych $x: ', gettype($x), '<hr>';

  // rozmiar typu intiger
    echo PHP_INT_SIZE, '<hr>'; //8

  // kontrola typu zmiennych

  ?>
