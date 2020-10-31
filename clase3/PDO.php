<?php

    $link = new PDO(
        'mysql:host=localhost;dbname=agencia',
        'root',
        'root'
    );
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $sql = "SELECT regID, regNombre9
                    FROM regiones";

    $stmt = $link->prepare($sql);
    $stmt->execute();

    $fila = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($fila);
    echo '</pre>';
