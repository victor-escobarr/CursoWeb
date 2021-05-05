<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de Ajedrez</title>
</head>
<body>
  
<?php 
  //imagenes 
 $blanco = "<td>  <embed src=\"blanco.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
 $negro =  "<td>  <embed src=\"negro.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
     
 echo "<h1><i>Tablero de ajedrez</i><h1>";

 echo "<table border = 1>";
 //variable para cambiar las dimensiones del tablero 
 $b=8;

  //for para hacer el tablero 
  for ($a=1; $a <=$b/2 ; $a++) {
     echo "<tr></tr>";
     //este for sirve para imprimir la fila que empieza en blanco
     for ($i=1; $i <= $b/2 ; $i++) { 
         echo "<td>$blanco</td>";
         echo "<td>$negro</td>";
     }
     echo "</tr></tr>";
     //este for sirve para imprimir la fila que empieza en negro 
     for ($i=1; $i <= $b/2 ; $i++) { 
         echo "<td>$negro</td>";
         echo "<td>$blanco</td>";
     }
 }
 echo "</table>";
?>
</body>
</html>