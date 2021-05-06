<?php
if($_POST["dqaq"] == 1 ) //español a morse
{
  echo "<h2><i>Tu texto a traducir es: </i></h2>";
  echo strtoupper($_POST["texto"]); //texto a traducir
  echo "<h2><i>Tu texto en morse es: </i></h2>"; //traducido
  $textito = $_POST["texto"];

  for ( $pos=0  ; $pos < strlen($textito); $pos ++) {
   $bytee = substr($textito, $pos);
   $byte =strtolower($bytee);
 
    if (ord($byte) == 32) { //espacio (no me sirvio dejar espacios en el echo, por eso use "/") :c
      echo "/";
    }
    elseif (ord($byte) == 97) { //a
      echo ".-";
      echo " ";
    }
    elseif (ord($byte) == 98) {  //b
      echo "-...";
      echo " ";
    }
    elseif (ord($byte) == 99) {  //c
      echo "-.-.";
      echo " ";
    } 
    elseif (ord($byte) == 100) {  //d
      echo "-..";
      echo " ";
    }
    elseif (ord($byte) == 101) {  //e
      echo ".";
      echo " ";
    } 
    elseif (ord($byte) == 102) {  //f
      echo "..-.";
      echo " ";
    }
    elseif (ord($byte) == 103) {  //g
      echo "--.";
      echo " ";
    }
    elseif (ord($byte) ==  104) {  //h
      echo "....";
      echo " ";
    }
    elseif (ord($byte) == 105) {  //i
      echo "..";
      echo " ";
    }
    elseif (ord($byte) == 106) {  //j
      echo ".---";
      echo " ";
    }
    elseif (ord($byte) == 107) {  //k
      echo "-.-";
      echo " ";
    }
    elseif (ord($byte) == 108) {  //l
      echo ".-..";
      echo " ";
    }
    elseif (ord($byte) == 109) {  //m
      echo "--";
      echo " ";
    }
    elseif (ord($byte) == 110) {  //n
      echo "-.";
      echo " ";
    }
    elseif (ord($byte) == 111) {  //o
      echo "---";
      echo " ";
    }
    elseif (ord($byte) == 112) {  //p
      echo ".--.";
      echo " ";
    }
    elseif (ord($byte) == 113) {  //q
      echo "--.-";
      echo " ";
    }
    elseif (ord($byte) == 114) {  //r
      echo ".-.";
      echo " ";
    }
    elseif (ord($byte) == 115) {  //s
      echo "...";
      echo " ";
    }
    elseif (ord($byte) == 116) {  //t
      echo "-";
      echo " ";
    }
    elseif (ord($byte) == 117) {  //u
      echo "..-";
      echo " ";
    }
    elseif (ord($byte) == 118) {  //v
      echo "...-";
      echo " ";
    }
    elseif (ord($byte) == 119) {  //w
      echo ".--";
      echo " ";
    }
    elseif (ord($byte) == 120) {  //x
      echo "-..-";
      echo " ";
    }
    elseif (ord($byte) == 121) {  //y
      echo "-.--";
      echo " ";
    }
    elseif (ord($byte) == 121) {  //z
      echo "--..";
      echo " ";
    }
    elseif (ord($byte) == 33) {  //!
      echo "--..--";
      echo " ";
    }
    elseif (ord($byte) == 46) {  //.
      echo ".-.-.-";
      echo " ";
    }
    elseif (ord($byte) == 44) {  //,
      echo "-.-.--";
      echo " ";
    }
    elseif (ord($byte) == 63) {  //?
      echo "..--..";
      echo " ";
    }
    elseif (ord($byte) == 34) {  //"
      echo ".-..-.";
      echo " ";
    }
    elseif (ord($byte) == 48) {  //0
      echo "-----";
      echo " ";
    }
    elseif (ord($byte) == 49) {  //1
      echo ".----";
      echo " ";
    }
    elseif (ord($byte) == 50) {  //2
      echo "..---";
      echo " ";
    }
    elseif (ord($byte) == 51) {  //3
      echo "...--";
      echo " ";
    }
    elseif (ord($byte) == 52) {  //4
      echo "....-";
      echo " ";
    }
    elseif (ord($byte) == 53) {  //5
      echo ".....";
      echo " ";
    }
    elseif (ord($byte) == 54) {  //6
      echo "-....";
      echo " ";
    }
    elseif (ord($byte) == 55) {  //7
      echo "--...";
      echo " ";
    }
    elseif (ord($byte) == 56) {  //8
      echo "---..";
      echo " ";
    }
    elseif (ord($byte) == 56 ) {  //9
      echo "----.";
      echo " ";
    }
  }//todas las letritas
} //español a morse

else{     //morse a español
  echo "<h2><i>Tu texto a traducir es: </i></h2>";
  echo strtoupper($_POST["texto"]); //texto a traducir
  echo "<h2><i>Tu texto en español es: </i></h2>"; //traducido
  $textito = $_POST["texto"];

  $morse = [
    ".-" => "a",
    "-..." => "b",
    "-.-." => "c",
    "-.." => "d",
    "." => "e",
    "..-." => "f",
    "--." => "g",
    "...." => "h",
    ".." => "i",
    ".---" => "j",
    "-.-" => "k",
    ".-.." => "l",
    "--" => "m",
    "-." => "n",
    "---" => "o",
    ".--." => "p",
    "--.-" => "q",
    ".-." => "r",
    "..." => "s",
    "-" => "t",
    "..-" => "u",
    "...-" => "v",
    ".--" => "w",
    "-..-" => "x",
    "-.--" => "y",
    "--.." => "z",
    ".----" => "1",
    "..---" => "2", 
    "...--" => "3",
    "....-" => "4",
    "....." => "5",
    "-...." => "6",
    "--..." => "7",
    "---.." => "8",
    "----." => "9",
    "-----" => "0",
    "--..--" => "!",
    ".-.-.-" => ".",
    "..--.." => "?",
    "-.-.--" => ",",
    ".-..-." => '"',
  ];
  echo "Aun no se como NO desplegar todo, pero lo voy a seguir intentando :c" ."<br><br>";
   foreach($morse as $morsee => $esp){
      echo $morsee ."  es igual: " .$esp ."<br>";
   }
  }
?>