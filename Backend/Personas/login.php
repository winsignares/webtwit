<?php
    include_once('../Conection.php');
    $id = 0;
    $password = "";

    $id = $_POST['identificacion'];
    $password = $_POST['password'];

    $db = new Connection();
    $conexionOpen = $db->open(); 
    try {
        
        $sql = "Select * from peresona where id =".$id." and password = '".$password."';";
        $respuesta =  $conexionOpen->prepare($sql);
        $respuesta -> execute();
        if($respuesta -> rowCount() > 0){
                echo " todo ok";
        }else{
            echo "no hay dato con estos valores";
        }
    } catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }
    $db->close();
    
?>