<?php
    include_once('Componentes/head.php');
?>
<?php 
        session_start();
        echo "Hola ". $_SESSION['Nombre'];        
?>
<a href="http://localhost/workspacephp/webtwit/backend/Personas/CerrarSesion.php" class="btn btn-primary">Cerrar Sesión</a>

<br />


<?php 
    include_once('../Backend/Personas/ListarPersonas.php');
?>



<?php 
    include_once('Componentes/foot.php');
?>