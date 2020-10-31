<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    $Destino = new Destino;
    $destinos = $Destino->listarDestinos();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Panel de administración de destinos</h1>

        <table class="table table-borderless table-striped table-hover">
            <thead class="">
            <tr>
                <th>#</th>
                <th>Nombre de Destino</th>
                <th>Región</th>
                <th>Precio</th>
                <th>Asientos</th>
                <th>Disponibles</th>
                <th colspan="2">
                    <a href="formAgregarDestino.php" class="btn btn-outline-secondary">
                        Agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
<?php
        foreach ($destinos as $destino){
?>
            <tr>
                <td><?= $destino['destID'] ?></td>
                <td><?= $destino['destNombre'] ?></td>
                <td><?= $destino['regNombre'] ?></td>
                <td><?= $destino['destPrecio'] ?></td>
                <td><?= $destino['destAsientos'] ?></td>
                <td><?= $destino['destDisponibles'] ?></td>
                <td>
                    <a href="formModificarDestino.php?destID=" class="btn btn-outline-secondary">
                        Modificar
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-outline-secondary">
                        Eliminar
                    </a>
                </td>
            </tr>
<?php
        }
?>
            </tbody>
        </table>

        </main>

<?php
    include 'includes/footer.php';
?>