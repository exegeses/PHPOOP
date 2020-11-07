<?php
    require 'config/config.php';
    //inyección de dependencias
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    //instanciación + llamado a método
    $Region = new Region;
    $chequeo = $Region->modificarRegion();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Modificación de una región</h1>

<?php
        $css = 'danger';
        $mensaje = 'No se puedo modificar la región.';
        if( $chequeo ){
            $css = 'success';
            $mensaje = 'Se ha modificado al región '.$Region->getRegNombre().' correctamente.'
?>
            <div class="alert alert-<?= $css ?> p-4">
                <?= $mensaje ?>
            </div>
<?php
        }
?>
    </main>

<?php
    include 'includes/footer.php';
?>