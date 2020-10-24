<?php

    #### configuración general de sistema  ####
    session_start();


    /**
     * Función para mostrar el contenido de un objeto o array
     * @param $dato
     */
    function mostrar($dato)
            {
                echo '<pre>';
                print_r($dato);
                echo '</pre>';
            }