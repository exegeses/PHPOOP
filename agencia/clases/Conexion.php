<?php

    class Conexion
    {

        private static $link;

        private function __construct()
        {}

        static function conectar()
        {
            if ( !isset( self::$link )) {
                self::$link = new PDO(
                    'mysql:host=localhost;dbname=agencia',
                    'root',
                    'root'
                );
            }
            self::$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return self::$link;
        }
    }
