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

        public function verRegionPorID()
        {
            $regID = $_GET['regID'];
            $link = Conexion::conectar();
            $sql = 'SELECT regID, regNombre
                        FROM regiones
                        WHERE regID = '.$regID;
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $region = $stmt->fetch(PDO::FETCH_ASSOC);
            ### registramos atributos
            $this->setRegID($region['regID']);
            $this->setRegNombre($region['regNombre']);
            return $this;
        }

        public function agregarRegion()
        {
            $regNombre = $_POST['regNombre'];
            $link = Conexion::conectar();
            $sql = "INSERT INTO regiones
                            ( regNombre ) 
                        VALUES
                            ( :regNombre )";
            $stmt = $link->prepare($sql);
            //data binding
            $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);

            if ($stmt->execute()){
                //registramos atributos en el objeto
                $this->setRegNombre($regNombre);
                $this->setRegID( $link->lastInsertId() );
                return $this;
            }
            return false;
        }

        public function modificarRegion()
        {
            $regID = $_POST['regID'];
            $regNombre = $_POST['regNombre'];
            $link = Conexion::conectar();
            $sql = "UPDATE regiones
                        SET regNombre = ?
                        WHERE regID = ?";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(1, $regNombre, PDO::PARAM_STR);
            $stmt->bindParam(2, $regID, PDO::PARAM_INT);

            if( $stmt->execute() ){
                $this->setRegID($regID);
                $this->setRegNombre($regNombre);
                return $this;
            }
            return false;
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