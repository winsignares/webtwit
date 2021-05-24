<?php
    include_once('Componentes/head.php');
?>

<a href="http://localhost/workspacephp/webtwit/backend/Personas/CerrarSesion.php" class="btn btn-primary">Cerrar Sesión</a>

<form id="formpensamiento" action="../Backend/Personas/GuardarPensamiento.php" method="POST">
   <Textarea id ="frompensamiento"name="Pensamiento">

   </Textarea>
    <button id ="enviar"class="btn btn-primary">
        Enviar
    </button>
</form>

    <br />
    <input id="Nombre" type="text" placeholder="Escribir su nombre" />
    <button class="btn btn-primary" onclick="saludar()">Saludar</button>
    <div id="listarpensamiento">

</div>
<script src="assets/js/pensamiento.js"></script>
<?php 
    include_once('Componentes/foot.php');
?>