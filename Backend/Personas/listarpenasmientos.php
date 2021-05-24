<?php
	// incluye la conexión
    include_once('../Backend/Conection.php');
    //session_start();
    $db = new Connection();
    $conexionOpen = $db->open(); 
	
	try{	
        $sql = "select Id_Persona_envia_Fk, Id_Persona_Reci_Fk from amigos WHERE (Id_Persona_envia_Fk = ".$_SESSION['Id']." or Id_Persona_Reci_Fk= ".$_SESSION['Id'].") and Estado='Amigos'";	    //echo $sql;
       //echo $sql;
        foreach ($conexionOpen->query($sql) as $row) {
            $idAmigo = $row['Id_Persona_Reci_Fk'];
            if($idAmigo == $_SESSION['Id'] ){
                $idAmigo = $row['Id_Persona_envia_Fk']; 
            }
            $sql2 = "SELECT * FROM pensamientos where id_persona_fk = ".$idAmigo." or id_persona_fk = ".$_SESSION['Id'] ;
           // echo $sql2;
           
            foreach ($conexionOpen->query($sql2) as $row2) {
                
                //$estado= $row2['Estado'];
?>
<div class="col-sm-6">
    <div class="card-body">
        <h5 class="card-title"> <?php echo $row2['Id_Persona_FK']; ?></h5>
        <p class="card-text">
            <?php echo $row2['Pesamiento']; ?>
        </p>
       
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