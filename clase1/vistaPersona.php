<?php

    require '../config/funciones.php';
    require 'Persona.php';
    $Persona = new Persona;
    $Persona->setNombre('Rick');
    $Persona->setApellido('Sánchez');
    mostrar($Persona);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Vista Persona</h1>

    <div class="objeto">
        <?= $Persona->verDatos() ?>
    </div>

</body>
</html>