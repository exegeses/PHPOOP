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

        si (true)
            reporte
        sino
            mensaje error
    </main>

<?php
    include 'includes/footer.php';
?>