<?php
$p1 =  $_POST["preguno"];
$p2 = $_POST["pregunta"];
$p3 = $_POST["p3"];
$p4 = $_POST["p4"];
$p5 = $_POST["p5"];
$p6 = $_POST["p6"];
$p7 = $_POST["p7"];
$p8 = $_POST["p8"];
$p9 = $_POST["p9"];
$p10 = $_POST["p10"];

$seleccionadas = "$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p8, $p9";
$opciona = "a";
$opcionb = "b";
$opcionc = "c";
$opciond = "d";

//for para opcion a
//con esto recorremos todas las opciones
for ($i = 0; $i < strlen($opciona); $i++) {
    $opcion = $opciona[$i];
    $contadora = 0;
   //con este for contamos las respuestas "$seleccionadas"
    for ($x = 0; $x < strlen($seleccionadas); $x++) {
        $actual = $seleccionadas[$x];
        if ($actual === $opcion) {
            $contadora++;
        }
    }
}
//opcion b
for ($i = 0; $i < strlen($opcionb); $i++) {
    $opcion = $opcionb[$i];
    $contadorb = 0;
   //con este for contamos las respuestas "$seleccionadas"
    for ($x = 0; $x < strlen($seleccionadas); $x++) {
        $actual = $seleccionadas[$x];
        if ($actual === $opcion) {
            $contadorb++;
        }
    }
}
//opcion c
for ($i = 0; $i < strlen($opcionc); $i++) {
    $opcion = $opcionc[$i];
    $contadorc = 0;
   //con este for contamos las respuestas "$seleccionadas"
    for ($x = 0; $x < strlen($seleccionadas); $x++) {
        $actual = $seleccionadas[$x];
        if ($actual === $opcion) {
            $contadorc++;
        }
    }
}
//opcion d
for ($i = 0; $i < strlen($opciond); $i++) {
    $opcion = $opciond[$i];
    $contadord = 0;
   //con este for contamos las respuestas "$seleccionadas"
    for ($x = 0; $x < strlen($seleccionadas); $x++) {
        $actual = $seleccionadas[$x];
        if ($actual === $opcion) {
            $contadord++;
        }
    }
}

if ($contadora>$contadorb && $contadora>$contadorc && $contadora>$contadord) { //a es mayor
    echo "Eres un taco al pastor";
} elseif ($contadorb>$contadora && $contadorb>$contadorc && $contadorb>$contadord) { // b es mayor
    echo "Eres un taco de suadero";
} 
elseif ($contadorc>$contadora && $contadorc>$contadorb && $contadorc>$contadord) { // c es mayor
    echo "Eres un taco de barbacoa";
}
elseif ($contadord>$contadora && $contadord>$contadorb && $contadord>$contadorc) { //d es mayor
    echo "Eres un taco lagunero";
} 
//las mezclas
elseif ($contadora=$contadorb && $contadora>$contadorc && $contadora>$contadord) { //a y b son los mayores
    echo "Eres un taco campechano";
}
elseif ($contadorb=$contadorc && $contadorb>$contadora && $contadorb>$contadord) { //b y c son los mayores
    echo "Eres un taco de carnitas";
}
elseif ($contadorc=$contadord && $contadorc>$contadora && $contadorc>$contadorb) { //c y d son los mayores
    echo "Eres un taco Bell, Que asco!!";
}
elseif ($contadora=$contadord && $contadora>$contadorb && $contadora>$contadorc) { //a y d son los mayores
    echo "Eres un taco light";
}
elseif ($contadora=$contadorc && $contadora>$contadorb && $contadora>$contadord) { //a y c son los mayores
    echo "Eres un taco placero";
}
elseif ($contadorb=$contadord && $contadorb>$contadora && $contadorb>$contadorc) { //b y d son los mayores
    echo "Eres un taco de mixiote";
}
else {
    echo "Eres un taco de sal"; //sal xd
}  
?>