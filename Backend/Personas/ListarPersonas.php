<?php
	// incluye la conexión
    include_once('../Conection.php');
    session_start();
	$database = new Connection();
	$db = $database->open();
	try{	
	    $sql = 'Select * from Peresona where id !='.$_SESSION['Id'];
	    foreach ($db->query($sql) as $row) {
?>

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"> <?php echo $row['Nombre']; ?></h5>
        <p class="card-text">
            <?php echo "Descrip"; ?>
        </p>
        <a href="#add_<?php echo $row['id']; ?>"  class="btn btn-primary">Agregar amigo</a>
    </div>
</div>

<?php 
    }
}catch(PDOException $e){
	echo "There is some problem in connection: " . $e->getMessage();
}
	//cerrar conexión
	$database->close();
?>