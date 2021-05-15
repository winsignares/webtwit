<?php
	// incluye la conexión
    include_once('http://localhost/workspacephp/webtwit/backend/Conection.php');
    //session_start();
    $db = new Connection();
    $conexionOpen = $db->open(); 
	
	try{	
	   
            $sql ="SELECT count(*) as contar FROM webtwit.amigos a where a.Id_Persona_Reci_Fk =".$_SESSION['Id'] ;
            //echo $sql2;
            $respuesta =  $conexionOpen->prepare($sql);
            $respuesta -> execute();
            if($respuesta -> rowCount() > 0){
                $row2 = $respuesta->fetch();
                echo $row2["contar"];
                //$estado= $row2['Estado'];
            }

    }catch(PDOException $e){
	    echo "There is some problem in connection: " . $e->getMessage();
    }
	//cerrar conexión
	$db->close();
?>