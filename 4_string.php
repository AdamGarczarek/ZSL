<?php
  $text = <<< Label
    zsl - Zespół
    Szkół
    Łączności<br>
Label;

  echo$text;
  echo nl2br($text);

  $name = 'JaNUsZ';
// zmaina na małe litery
  echo strtolower($name);



  echo strtoupper($name); //JANUSZ

// zamiana pierwszej litery w zdaniu
  $text = 'janusz nowak mieszka w poznaniu';
  echo ucfirst($text); //Janusz nowak mieszka w poznaniu

// zamiana wszystkich pierwszych litery w zdaniu
    $text = 'janusz nowak mieszka w poznaniu';
    echo ucfirst($text); //Janusz Nowak Mieszka W Poznaniu

// Loren Ipsum
  $lorem = <<< LOREM
  <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<hr>
LOREM;

  echo $lorem;
  $col = wordwrap($lorem, 40, '<br>');
  echo $col;
  $col = wordwrap($lorem, 40, '<hr>');
  echo $col;

// czyszczenie zawartości bufora
  ob_clean();

// czyszczenie białych znaków
  $name = 'Anna';
  $name1 = 'Anna';

  echo 'Długość $name: ', strlen($name); //4
  echo '<BR>Długość $name1: ', strlen($name1); //7

  echo strlrn(ltrim($name1)); //5
  echo strlrn(rtrim($name1)); //6
  echo strlrn(trim($name1)); //4

  $

?>
