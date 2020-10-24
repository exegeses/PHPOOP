<?php
    require 'config/config.php';
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Panel de administración de regiones</h1>

        <table class="table table-striped table-hover">
            <thead class="">
            <tr>
                <th>#</th>
                <th>Nombre de Región</th>
                <th colspan="2">
                    <a href="" class="btn btn-outline-secondary">
                        Agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>id</td>
                <td>region</td>
                <td>
                    <a href="" class="btn btn-outline-secondary">
                        Modificar
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-outline-secondary">
                        Eliminar
                    </a>
                </td>
            </tr>
            </tbody>
        </table>

        </main>

<?php
    include 'includes/footer.php';
?>