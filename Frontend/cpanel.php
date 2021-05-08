<?php
    include_once('Componentes/head.php');
?>
<?php 
        session_start();
        echo "Hola ". $_SESSION['Id'];        
    ?>
<br />


<?php 
    include_once('../Backend/Personas/ListarPersonas.php');
?>



<?php 
    include_once('Componentes/foot.php');
?>