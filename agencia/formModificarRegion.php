<?php

    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $regID = $_GET['regID'];
    $Region = new Region;
    $region = $Region->verRegionPorID($regID);
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>
    
    <main class="container">
            <h1>Modificación de una región</h1>

            <div class="alert bg-light border shadow-sm border round p-4">

                <form action="modificarRegion.php" method="post">

                    <div class="form-group">
                    <label for="regNombre">Nombre de la región:</label>
                    <input type="text" name="regNombre" 
                           value="<?= $region['regNombre'] ?>"
                           id="regNombre" class="form-control">
                    </div>

                    <button class="btn btn-dark">Modificar región</button>
                    <a href="adminRegiones.php" class="btn btn-outline-secondary">
                        Volver a panel de regiones
                    </a>
                </form>

            </div>


    </main>
<?php
    include 'includes/footer.php';
?>