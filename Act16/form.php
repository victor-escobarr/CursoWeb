<?php
  session_start();
    if(isset($_SESSION["msj"])){
      header("location: ./index.php");
    }
    else{
      echo "<form action=index.php method=POST>";
        echo "<fieldset style=width:200px>";
          echo "<legend>Inicio de sesión</legend>";
            echo "Nombre <br><input type=text name=name placeholder='Ingrese su(s) nombre(s)' required>"; 
            echo "<br><br>";
            echo "Apellidos <br> <input type=text name=apellido placeholder='Ingrese sus apellidos' required>";
            echo "<br><br>";
            echo "Grupo <br> <input type=number name=grupo placeholder='Ingrese su grupo' required>";
            echo "<br><br>";
            echo "Fecha de nacimiento <br> <input type=date name=nacimeito required>";
            echo "<br><br>";
            echo "Correo electrónico <br> <input type=email name=correo placeholder='Ingrese su correo' required>";
            echo "<br><br>";
            echo "Contraseña <br> <input type=password name=contraseña placeholder='Ingrese su contraseña'required>";
            echo "<br><br>";
            echo "<input type=submit name=inicio value=Iniciar sesion required>";  
        echo "</fieldset>";
      echo "</form>";
   };
?>