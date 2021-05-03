<?php
    $nombre = "";
    $apellidos = "";
    $correo = "";
    $password = "";
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];


    echo "Hola estos son los datos de la persona ".$nombre;
?>