<?php
	// incluye la conexión
    include_once('../Backend/Conection.php');
    //session_start();
    $db = new Connection();
    $conexionOpen = $db->open(); 
	
	try{	
	    $sql = 'SELECT p.* FROM  webtwit.peresona p  where p.Id !='.$_SESSION['Id'];
	    //echo $sql;
        foreach ($conexionOpen->query($sql) as $row) {
            $sexo = $row['sexo'];
            $avatar="girl.png";
            $estado= "Agregar amigo";
            $id_persona_diferente = $row['Id'];
            if($sexo=="M"){
                $avatar="boy.png";
            }
            $sql2 ="SELECT * FROM webtwit.amigos a where (a.Id_Persona_envia_Fk =".$_SESSION['Id']."  and a.Id_Persona_Reci_Fk =".$id_persona_diferente .") or (a.Id_Persona_Reci_Fk =".$_SESSION['Id']."  and a.Id_Persona_envia_Fk =".$id_persona_diferente .");" ;
            //echo $sql2;
            $respuesta =  $conexionOpen->prepare($sql2);
            $respuesta -> execute();
            if($respuesta -> rowCount() == 0){
                $row2 = $respuesta->fetch();
                //$estado= $row2['Estado'];
?>
<div class="col-sm-6">
    <img class="card-img-top" src="assets/img/<?php echo $avatar; ?>" alt="<?php echo $row['Nombre']; ?>">
    <div class="card-body">
        <h5 class="card-title"> <?php echo $row['Nombre']; ?></h5>
        <p class="card-text">
            <?php echo "Descrip"; ?>
        </p>
        <a href="http://localhost/workspacephp/webtwit/backend/Personas/haceramigos.php?id_Amigo=<?php echo $row['Id']; ?>"  class="btn btn-primary">
            <?php echo $estado; ?>
        </a>
    </div>
</div>



<?php 
 }
    }
}catch(PDOException $e){
	echo "There is some problem in connection: " . $e->getMessage();
}
	//cerrar conexión
	$db->close();
?>