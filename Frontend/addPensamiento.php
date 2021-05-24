<?php
    include_once('Componentes/head.php');
?>

<a href="http://localhost/workspacephp/webtwit/backend/Personas/CerrarSesion.php" class="btn btn-primary">Cerrar Sesión</a>

<form action="../Backend/Personas/GuardarPensamiento.php" method="POST">
   <Textarea name="Pensamiento">

   </Textarea>
    <button class="btn btn-primary">
        Enviar
    </button>
</form>

    <br />
    <input type="text" placeholder="Escribir su nombre" />
    <button class="btn btn-primary">Saludar</button>
    <?php 
    include_once('../Backend/Personas/listarpenasmientos.php');
?>
<script src="assets/js/pensamiento.js"></script>
<?php 
    include_once('Componentes/foot.php');
?>