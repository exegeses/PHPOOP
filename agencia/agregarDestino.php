<?php
    require 'config/config.php';
    //inyección de dependencias
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    //instanciación + llamado a método
    $Destino = new Destino;
    $chequeo = $Destino->agregarDestino();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de un nuev Destino</h1>

<?php
        $css = 'danger';
        $mensaje = 'No se puedo agregar el destino.';
        if( $chequeo ){
            $css = 'success';
            $mensaje = 'Se ha agregado el destino '.$Destino->getDestNombre().' correctamente.'
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