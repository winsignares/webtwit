<?php
    include_once('Componentes/head.php');
?>

<a href="http://localhost/workspacephp/webtwit/backend/Personas/CerrarSesion.php" class="btn btn-primary">Cerrar Sesión</a>

<form id="formpensamiento" method="POST">
   <Textarea id="Pensamiento" name="Pensamiento">

   </Textarea>
    <button id="Enviar" class="btn btn-primary">
        Enviar
    </button>
</form>

    <br />
    <input id="Nombre" type="text" placeholder="Escribir su nombre" />
    <button class="btn btn-primary" id="saludar" >Saludar</button>
    <?php 
    include_once('../Backend/Personas/listarpenasmientos.php');
?>
<script src="assets/js/pensamiento.js"></script>
<?php 
    include_once('Componentes/foot.php');
?>