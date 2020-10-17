<?php

    class Persona
    {
        //const ESPECIE = 'humana';
        ### atributos
        private $nombre;
        private $apellido;
        
        ### métodos
        public function verDatos()
        {
            $mensaje = 'Nombre: '.$this->getNombre( );
            $mensaje .= '<br>';
            $mensaje .= 'Apellido: '.$this->getApellido();
            $mensaje .= '<br>';
            return $mensaje;
        }
        
        ##getters & setters
        /**
         * @return mixed
         */
        public function getNombre( )
        {
            return $this->nombre;
        }
        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre): void
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getApellido()
        {
            return $this->apellido;
        }
        /**
         * @param mixed $apellido
         */
        public function setApellido($apellido): void
        {
            $this->apellido = $apellido;
        }


    }
