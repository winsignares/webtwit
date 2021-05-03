<?php
    include_once('../Conection.php');

    $id = 0;
    $nombre = "";
    $apellidos = "";
    $correo = "";
    $password = "";

    $id = $_POST['identificacion'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $db = new Connection();
    $conexionOpen = $db->open(); 

    try {
        
        $resultado = $conexionOpen->prepare("Insert into peresona (Id,Nombre,Apellidos,email,password ) values (:idP,:nP,:aP,:eP,:pP); ");
        $resultado->execute(
                            array(
                                ':idP'=> $id,
                                ':nP' => $nombre,
                                ':aP' => $apellidos,
                                ':eP' => $correo,
                                ':pP' => $password
                            )
        );

        echo "datos almacenados con exito";

    } catch (PDOException $e) {
        echo " el error es: ". $e->getMessage();
    }

   
?>