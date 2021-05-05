<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas solicitud a la U</title>
</head>
<body>
    <?php
       echo "<table border=1;>";
           echo "<thead>";
            //titulo de la tabla
             echo "<th colspan=6;><h1><strong>Solicitud de ingreso a la Universidad</strong></h1></th>";
           echo " </thead>";
           echo " <tbody>";
             //Primera fila de la tabla 
             echo "<tr>";
               echo " <td colspan=2;> $_POST[apellidop] </td>"; //apellido paterno
               echo "<td colspan=2;> $_POST[apellidom] </td>"; //apellido materno
               echo "<td colspan=2;> $_POST[nombres] </td>"; //nombre(s)
             echo "</tr>";
             //Segunda fila de la tabla
             echo "<tr>";
               echo "<td colspan=2;><strong><u>Apellido Paterno</u></strong></td>";
               echo "<td colspan=2;><strong><u>Apellido Materno</u></strong></td>";
               echo "<td colspan=2;><strong><u>Nombre(s)</u></strong></td>";
             echo "</tr>";
             //tercera fila de la tabla
             echo "<tr>";
               echo " <td colspan=2;><strong><u>Sexo:</u></strong></td>";
               echo "<td colspan=2;> $_POST[sexo] </td>"; //sexo
               echo "<td><strong><u>Edad:</u></strong></td>";
               echo "<td> $_POST[edad] </td>"; //edad
             echo "</tr>";
             //cuarta fila de la tabla 
             echo "<tr>";
               echo "<td colspan=4;> $_POST[correo] </td>"; //correo
               echo "<td> $_POST[telefono] </td>"; //telefono
               echo "<td> $_POST[celular] </td>"; // celular
             echo "</tr>";
             //quinta fila de la tabla 
             echo "<tr>";
               echo "<td colspan=4;><strong><u>Correo electronico</u></strong></td>";
               echo "<td><strong><u>Telefono</u></strong></td>";
               echo "<td><strong><u>Celular</u></strong></td>";
             echo "</tr>";
             //sexta fila de la tabla 
             echo "<tr>";
               echo "<td colspan=2;><strong><u>Escuela de procedencia:</u></strong></td>";
               echo " <td colspan=2;> $_POST[escprocedncia] </td>"; //escuela procedencia
               echo "<td><strong><u>Promedio:</u></strong></td>";
               echo "<td> $_POST[promedio] </td>"; //promedio
             echo "</tr>";
             //septima fila de la tabla 
             echo "<tr>";
               echo "<td colspan=4;><strong><u>Primera opción:</u></strong></td>";
               echo "<td colspan=2;> $_POST[primeraopcion] </td>"; //primera opcion 
             echo "</tr>";
             //octava fila de la tabla 
             echo "<tr>";
               echo "<td colspan=4;><strong><u>Segunda opción:</u></strong></td>";
               echo " <td colspan=2;> $_POST[segundaopcion] </td>"; //segunda opcion 
             echo "</tr>";
           echo "</tbody>";
       echo "</table>";
    ?>
</body>
</html>