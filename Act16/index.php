<?php
    session_start();
    if(isset($_SESSION["msj"])){
      echo "<table border=1>";
        echo "<thead>";
          echo "<th colspan=2>Información de inicio de sesión</th>";
        echo "</thead>";
          echo "<tbody>";
            echo "<tr>";
              echo "<td>Nombre(s)</td>";
              echo "<td>$_SESSION[nombre]</td>"; // nomnbres
            echo "</tr>";
            echo "<tr>";
              echo "<td>Apellidos</td>";
              echo "<td>$_SESSION[apellido]</td>"; //apellido
            echo "</tr>";
            echo "<tr>";
              echo "<td>Grupo</td>";
              echo "<td>$_SESSION[Grupo]</td>"; //grupo 
            echo "</tr>";
            echo "<tr>";
              echo "<td>Fecha de nacimiento</td>";
              echo "<td>$_SESSION[nacimeito]</td>";  //nacimiento
            echo "</tr>";
            echo "<tr>";
              echo "<td>Correo electrónico</td>";
              echo "<td>$_SESSION[correo]</td>"; //correo
            echo "</tr>";
          echo "</tbody>";
      echo "</table>";
    echo "<form action=cerrar.php method=POST>";    
      echo" <input type=submit name=cerrar value=cerrar>";
    echo "</form>"; 
    }
    elseif($_POST["name"]!=NULL){
        $_SESSION["msj"]=$_POST["inicio"];
        $_SESSION["nombre"]=$_POST["name"];
        $_SESSION["apellido"]=$_POST["apellido"];
        $_SESSION["Grupo"]=$_POST["grupo"];
        $_SESSION["nacimeito"]=$_POST["nacimeito"];
        $_SESSION["correo"]=$_POST["correo"];
        $_SESSION["contraseña"]=$_POST["contraseña"];
        header("location: ./index.php");
    }
    else{
        header("location: ./form.php");
    }
?>