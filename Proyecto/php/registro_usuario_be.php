<?php

include 'conexion_be.php';

$Nombre_completo = $_POST [ ' nombre_completo ' ] ;
$Correo $_POST [ ' correo ' ] ;
$Usuario $_POST [ ' usuario ' ] ;
$Contrasena = $_POST [ ' contrasena ' ] ;

$query = " INSERT INTO usuarios ( nombre completo , correo , usuario , contrasena )
             VALUES ('$nombre_completo' , '$Correo' , '$Usuario ' , '$contrasena ' ) " ;
$ejecutar = mysqli_query ($conexion, $query) ;

?>