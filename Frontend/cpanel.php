
<?php
    include_once('Componentes/head.php');
?>
    <?php 
        session_start();
        echo "Hola ". $_SESSION['Id'];
        
    ?>

<?php 
    include_once('Componentes/foot.php');
?>