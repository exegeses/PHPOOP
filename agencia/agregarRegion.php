<?php
    require 'config/config.php';
    //inyección de dependencias
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    //instanciación + llamado a método
    $Region = new Region;
    $chequeo = $Region->agregarRegion();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de una nueva región</h1>

<?php
        $css = 'danger';
        $mensaje = 'No se puedo agregar la región.';
        if( $chequeo ){
            $css = 'success';
            $mensaje = 'Se ha agregado al región '.$Region->getRegNombre().' correctamente.'
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