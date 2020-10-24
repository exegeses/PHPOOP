<?php

    class Conexion
    {

        static function conectar()
        {
            $link = new PDO(
                        'mysql:host=localhost;dbname=agencia',
                   'root',
                    'root'
                    );

            return $link;
        }
    }
