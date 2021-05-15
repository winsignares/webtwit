<?php
    session_start();
    include_once('../Conection.php');

    $id = 0;
    $Pesamiento = "";
    //echo $_POST['Pensamiento'];
    $id = $_SESSION['Id'];
    $Pesamiento = $_POST['Pensamiento'];
    $fecha = (new DateTime('NOW'))->format('Y-m-d H:m:s');

    $db = new Connection();
    $conexionOpen = $db->open(); 

    try {
        
        $resultado = $conexionOpen->prepare("Insert into pensamientos (Id_Persona_FK,Pesamiento, Fecha ) values (:id,:Pen,:fecha); ");
        $resultado->execute(
                            array(
                                ':id' => $id,
                                ':Pen'=> $Pesamiento,
                                ':fecha' => $fecha
                            )
        );

        echo "datos almacenados con exito";
        
        header('Location: http://localhost/workspacephp/webtwit/frontend/Cpanel.php');
    } catch (PDOException $e) {
        echo " el error es: ". $e->getMessage();
    }

   $db->close();
?>