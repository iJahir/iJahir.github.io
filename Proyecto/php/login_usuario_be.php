<?php

  session_start();

  include 'conexion_be.php';

  $Correo = $_POST['Correo'];
  $Contrasena = $_POST['Contrasena'];

  $validar_login  = mysqli_query ($conexion, " SELECT * FROM usuarios WHERE correo = '$correo'
  and contrasena='$Contrasena'";

if( mysqli_num_rows( $validar_login) > 0 ){
  $_SESSION['Usuario'] = $Correo;

    header ("location :../index.html");
    exit;

    }else{
        echo '
          <script>
               alert ( " Usuario no existe , por favor verifique los datos
               introducidos " ) ;
               window.location = " ../index.php " ;
          </script>
          ';

          exit;

    }


?>