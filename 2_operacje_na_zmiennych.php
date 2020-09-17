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

  ?>
