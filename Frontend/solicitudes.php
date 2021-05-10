<?php
    include_once('Componentes/head.php');
?>

<a href="http://localhost/workspacephp/webtwit/backend/Personas/CerrarSesion.php" class="btn btn-primary">Cerrar Sesión</a>
<h2> 
    Solicitudes <a href="" class="btn btn-primary">9</a>
</h2>
<br />


<?php 
    include_once('../Backend/Personas/ListarPersonaSolicitudes.php');
?>



<?php 
    include_once('Componentes/foot.php');
?>