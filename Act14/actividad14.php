<?php
if(isset($_POST["enviar"])) //si envian el primer formulario
{
    $horacdmx = $_POST["hora"];
    echo "<table border=1;>"; //tablita
    echo "<thead>";
            //titulo de la tabla
      echo "<th colspan=2;><h1><strong>Reloj mundial</strong></h1></th>";
      echo " </thead>";
      echo " <tbody>";
      echo "<td>CDMX</td>"; 
      echo "<td>$_POST[hora]</td>"; //hora cdmx
    if(isset($_POST["ny"])) //Si seleccionan NewYork
    {  
        $mifecha = new DateTime($horacdmx); 
        $mifecha->modify('+1 hours'); 
         $newyork = $mifecha->format('H:i');
    
        echo "<tr>";
        echo "<td colspan=1;>NewYork</td>"; 
        echo "<td colspan=1;> $newyork </td>";  //hora NewYork
        echo "</tr>";
    } 
    if(isset($_POST["sp"])) //Si seleccionan SaoPaolo
    {
        $mifecha = new DateTime($horacdmx);
        $mifecha->modify('+2 hours'); 
         $saopaolo = $mifecha->format('H:i');

        echo "<tr>";
        echo "<td colspan=1;>Sao Paolo</td>"; 
        echo "<td colspan=1;> $saopaolo </td>";  //hora Sao Paolo
        echo "</tr>";
    } 
    if(isset($_POST["md"])) //Si seleccionan Madrid
    {
        $mifecha = new DateTime($horacdmx); 
        $mifecha->modify('+7 hours'); 
         $madrid = $mifecha->format('H:i');

        echo "<tr>";
        echo "<td colspan=1;>Madrid</td>";
        echo "<td colspan=1;> $madrid </td>"; //hora madrid
        echo "</tr>";
    }
    if(isset($_POST["pr"])) //Si seleccionan Paris
    {
        $mifecha = new DateTime($horacdmx); 
        $mifecha->modify('+7 hours'); 
         $paris = $mifecha->format('H:i');

       echo "<tr>";
       echo "<td colspan=1;>Paris</td>";  
       echo "<td colspan=1;> $paris </td>"; //hora paris
       echo "</tr>";
    }
    if(isset($_POST["rm"])) //Si seleccionan Roma
    {
        $mifecha = new DateTime($horacdmx); 
        $mifecha->modify('+7 hours'); 
         $roma = $mifecha->format('H:i');

        echo "<tr>";
        echo "<td colspan=1;>Roma</td>";
        echo "<td colspan=1;> $roma </td>"; //hora Roma
        echo "</tr>";
    }
    if(isset($_POST["at"])) //Si seleccionan Atenas
    {
        $mifecha = new DateTime($horacdmx); 
        $mifecha->modify('+8 hours'); 
         $atenas = $mifecha->format('H:i');
        

        echo "<tr>";
        echo "<td colspan=1;>Atenas</td>";
        echo "<td colspan=1;> $atenas</td>";  //hora Atenas
        echo "</tr>";
    }
    if(isset($_POST["bj"]))  //Si seleccionan Bejin
    {
        $mifecha = new DateTime($horacdmx); 
        $mifecha->modify('+13 hours'); 
         $bejin = $mifecha->format('H:i');
        
         
        echo "<tr>";
        echo "<td colspan=1;>Bejin</td>";
        echo "<td colspan=1;> $bejin </td>"; //hora Bejin
        echo "</tr>";
    }
    if(isset($_POST["tk"])) //Si seleccionan Tokio
    {
        $mifecha = new DateTime($horacdmx); 
        $mifecha->modify('+14 hours'); 
         $tokio = $mifecha->format('H:i');

        echo "<tr>";
        echo "<td colspan=1;>Tokio</td>";
        echo "<td colspan=1;> $tokio </td>"; //hora tokio
        echo "</tr>";
    }
        echo "</table>";  
        echo "<br><br>";
}



if(isset($_POST["enviar2"])) //Si envian la segunda tabla
{
    $cumple = $_POST["cumple"]; //asi más facil xd
    $hoy = date("y-m-d");  //para poner la fecha año-mes-dia como el form
    $fechadehoy= new DateTime($hoy); //la fecha de hoy
    $fechadelcumple= new DateTime($cumple); //fecha del cumple
    $diff = $fechadehoy->diff($fechadelcumple); //diferencia de dias entre el dia que lo checan y el dia del cumple
    $dias = $diff->days; //para ocuparlo mas fácil en horas y min
    echo "<table border=1;>"; //tablita
    echo "<thead>";
    //titulo de la tabla
      echo "<th><h2><strong>Cumpleaños</strong></h2></th>";
      echo "<th><h2><strong>$_POST[cumple]</strong></h2></th>";
      echo " </thead>";
      echo " <tbody>";
    if(isset($_POST["dias"])) //Si seleccionan Dias
    {
        echo "<tr>";
        echo "<td colspan=1;>Dias</td>"; 
        echo "<td colspan=1;> $dias </td>";  //Días hasta su cumple
        echo "</tr>";
    } 
    if(isset($_POST["horas"])) //Si seleccionan horas
    {
        $horas = $dias*24; //multiplicamos los dias que faltan por 24 (horas)
        echo "<tr>";
        echo "<td colspan=1;>Horas</td>"; 
        echo "<td colspan=1;>  $horas </td>";  //horas hasta su cumple
        echo "</tr>";
    } 
    if(isset($_POST["min"])) //Si seleccionan minutos
    {
        $min = $dias*1440; //multiplicamos los dias que faltan por 1440 (minutos que tiene un dia)
        echo "<tr>";
        echo "<td colspan=1;>Minutos</td>";
        echo "<td colspan=1;> $min </td>"; //minutos hasta su cumple
        echo "</tr>";
    }
    if(isset($_POST["fin"])) //Si seleccionan fin de semana
    {
       // echo $_POST["pr"];
       echo "<tr>";
       echo "<td colspan=1;>¿Sera en fin de semana?</td>";  
       echo "<td colspan=1;> En proceso  </td>"; //si su cumple cae en fin de semana
       echo "</tr>";
    }
    echo "</table>"; 
    echo "<br><br>"; //La inspiracion me llego en la madrugada mientras hacia otro codigo :c
}

?>