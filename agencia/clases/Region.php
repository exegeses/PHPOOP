<?php

    class Region
    {
        private $regID;
        private $regNombre;

        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = 'SELECT regID, regNombre
                        FROM regiones';
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $regiones = $stmt->fetchAll();
            return $regiones;
        }

        public function verRegionPorID($regID)
        {
            $link = Conexion::conectar();
            $sql = 'SELECT regID, regNombre
                        FROM regiones
                        WHERE regID = '.$regID;
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $region = $stmt->fetch();
            return $region;
        }

        ###########################
        #### getters & setters
        /**
         * @return mixed
         */
        public function getRegID()
        {
            return $this->regID;
        }

        /**
         * @param mixed $regID
         */
        public function setRegID($regID): void
        {
            $this->regID = $regID;
        }

        /**
         * @return mixed
         */
        public function getRegNombre()
        {
            return $this->regNombre;
        }

        /**
         * @param mixed $regNombre
         */
        public function setRegNombre($regNombre): void
        {
            $this->regNombre = $regNombre;
        }

    }