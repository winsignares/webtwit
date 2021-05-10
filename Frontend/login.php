<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/css/styleL.css" rel="stylesheet">
    <title>login</title>
</head>
<body>
<nav>
    
</nav>   
<form method="POST" action="../Backend/Personas/login.php">
<div class="vidrio">
<h1>login</h1>
    <div class="block">
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
                   <button class="btn btn-primary" type="submit">login</button>
         </div>
    </div>
</div>
</div>
</form>

<?php
    include_once('Componentes/foot.php');
?>