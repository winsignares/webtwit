<?php
    include_once('Componentes/head.php');
?>
<form method="POST" action="../Backend/Personas/guardar.php">
    <div class="form-row">
    <div class="col-md-4 mb-3">
            <label for="validationDefault01">
                Identificación
            </label>
            <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Escribir su identificacion" value=""
                required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault01">
                Nombre
            </label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribir su Nombre" value=""
                required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault02">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escribir sus apellidos" value=""
                required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault02">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Escribir su Correo" value=""
                required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault02">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" value=""
                required>
        </div>
     
  
    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
<a href="login.php" class="btn btn-primary">login</a>
<?php
    include_once('Componentes/foot.php');
?>