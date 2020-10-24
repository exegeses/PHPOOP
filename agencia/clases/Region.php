<?php

    class Region
    {
        private $regID;
        private $regNombre;

    

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