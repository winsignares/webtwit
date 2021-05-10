<?php
    include_once('../Conection.php');
    session_start();
    $id_del_que_invia = $_SESSION['Id'];
    $id_amigos = $_GET['id_Amigo'];
    $db = new Connection();
    $conexionOpen = $db->open(); 
    $estado = "Pendiente";
    $fecha = (new DateTime('NOW'))->format('Y-m-d H:m:s');

    try {        
        $sql = "UPDATE amigos SET Estado = 'Amigos' WHERE Id_Persona_envia_Fk =".$id_amigos." and Id_Persona_Reci_Fk =".$id_del_que_invia;
			// declaración if-else en la ejecución de nuestra consulta
           // echo $sql;
		$conexionOpen->exec($sql) ;
        echo "datos actualizado con exito";
        header('Location: http://localhost/workspacephp/webtwit/frontend/Cpanel.php');
        exit;
    } catch (PDOException $e) {
        echo " el error es: ". $e->getMessage();
    }

   $db->close();

?>