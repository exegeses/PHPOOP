<?php
    require 'config/config.php';
    //inyección de dependencias
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    //instanciación + llamado a método
    $Destino = new Destino;
    $chequeo = $Destino->modificarDestino();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Modificación de un Destino</h1>

<?php
        $css = 'danger';
        $mensaje = 'No se puedo modificar el destino.';
        if( $chequeo ){
            $css = 'success';
            $mensaje = 'Se ha modificado el destino '.$Destino->getDestNombre().' correctamente.'
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