<?php
	// incluye la conexión
    include_once('../Backend/Conection.php');
    //session_start();
    $db = new Connection();
    $conexionOpen = $db->open(); 
	
	try{	
	    $sql = 'Select * from Peresona where Id !='.$_SESSION['Id'];
	    foreach ($conexionOpen->query($sql) as $row) {
?>

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"> <?php echo $row['Nombre']; ?></h5>
        <p class="card-text">
            <?php echo "Descrip"; ?>
        </p>
        <a href="#add_<?php echo $row['Id']; ?>"  class="btn btn-primary">Agregar amigo</a>
    </div>
</div>

<?php 
    }
}catch(PDOException $e){
	echo "There is some problem in connection: " . $e->getMessage();
}
	//cerrar conexión
	$db->close();
?>