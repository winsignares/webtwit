<?php
    include_once('../Conection.php');
    session_start();
    $id_del_que_invia = $_SESSION['Id'];
    $id_amigos = $_GET['id_Amigo'];
    $db = new Connection();
    $conexionOpen = $db->open(); 
    $estado = "Pendiente";
    $fecha = getdate();
    try {
        
        $resultado = $conexionOpen->prepare("Insert into amigos ( Id_Persona_envia_Fk,Id_Persona_Reci_Fk,Estado,Fecha_Solicitud ) values (:idPE,:idPR,:E,:F); ");
        $resultado->execute(
                            array(
                                ':idPE'=> $id_del_que_invia,
                                ':idPR' => $id_amigos,
                                ':E' => $estado,
                                ':F' => $fecha
                            )
        );

        echo "datos almacenados con exito";
        header('Location: http://localhost/workspacephp/webtwit/frontend/Cpanel.php');
        exit;
    } catch (PDOException $e) {
        echo " el error es: ". $e->getMessage();
    }

   $db->close();

?>