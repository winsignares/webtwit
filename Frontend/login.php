<?php
    include_once('Componentes/head.php');
?>
<form method="POST" action="../Backend/Personas/login.php">
<div class="vidrio">
    <div class="form-row">
    <div class="col-md-4 mb-3">
            <label for="validationDefault01">
                Identificación
            </label>
            <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Escribir su identificacion" value=""
                required>
        </div>
        
        <div class="col-md-4 mb-3">
            <label for="validationDefault02">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" value=""
                required>
        </div>
     
</div>
    <button class="btn btn-primary" type="submit">login</button>
</form>

<?php
    include_once('Componentes/foot.php');
?>