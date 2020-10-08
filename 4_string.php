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

  echo strlen(ltrim($name1)); //5
  echo strlen(rtrim($name1)); //6
  echo strlen(trim($name1)); //4

  $name1 = trim($name1);
  echo strlen($name1); //4

// czyszczenie zawartości bufora
  ob_clean();

// przetwarzanie ciągów znaków
  $replace = str_replace('%imie%', "Janusz", "Masz na imię: %imie%");
  echo "$replace<hr>";

// przetwarzanie ciągów znaków (zamiana polskich znaków)
  $login = 'bączek';
  $censure = array('ą', 'ę', 'ć', 'ź', 'ż', 'ń', 'ł', 'ó', 'ś');
  $replace = array('a', 'e', 'c', 'z', 'z', 'n', 'l', 'o', 's');

  $correctLogin = str_replace($censure, $replace, $login);
  echo "Login: $login<br>Poprawny login: $correctLogin";

// przeszukiwanie
  $address = "Poznań, ul. Polna 4, tel. (61) 123 44 55";
  $search = strchr($address, 'tel');
  echo $search; //tel. (61) 123 44 55

  $address = "Poznań, ul. Polna 4, tel. (61) 123 44 55";
  $search = strchr($address, 'tel', true);
  echo $search; //Poznań, ul. Polna 4,

  $address = "Poznań, ul. Polna 4, tel. (61) 123 44 55";
  $search = strchr($address, 'Tel', true);
  echo $search; //tel. (61) 123 44 55

  $mail = strchr('zsl@gmail.com', '@');
  echo $mail; //@gmail.com

  $mail = strchr('zsl@gmail.com', 64);
  echo "$mail<hr>"; //@gmail.com

// substr
  $name = "anna";
  echo substr($name, 0),'<br>'; //anna
  echo substr($name, 2),'<br>'; //na
  echo substr($name, 1, 2),'<br>'; //am
  $name = 'Tomasz';
  echo substr($name, 2, 3); //mas

//  Pobierz domenę z dowolnego adresu poczty elektronicznej
  $mail = 'janusz@gmail.com';
  echo substr(strchr('janusz@gmail.com', '@'), 1);


?>
