<?php

    $link = mysqli_connect(
            'localhost',
            'root',
        'root',
        'agencia'
    );

    $sql = "SELECT regID, regNombre
                FROM regiones";
    #ejecución
    $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );


    //$fila = mysqli_fetch_row($resultado);
    $fila = mysqli_fetch_assoc($resultado);
    //$fila = mysqli_fetch_array($resultado);
/*
    echo '<pre>';
    print_r($fila);
    echo '</pre>';
*/