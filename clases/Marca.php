<?php

    class Marca
    {
        private $idMarca;
        private $mkNombre;

        public function listarMarcas()
        {
            
        }

        public function verMarcaPorID()
        {
            
        }

        public function agregarMarca()
        {
            
        }

        public function modificarMarca()
        {
            
        }

        public function eliminarMarca()
        {

        }
        
        
        /**
         * @return mixed
         */
        public function getIdMarca()
        {
            return $this->idMarca;
        }

        /**
         * @param mixed $idMarca
         */
        public function setIdMarca($idMarca)
        {
            $this->idMarca = $idMarca;
        }

        /**
         * @return mixed
         */
        public function getMkNombre()
        {
            return $this->mkNombre;
        }

        /**
         * @param mixed $mkNombre
         */
        public function setMkNombre($mkNombre)
        {
            $this->mkNombre = $mkNombre;
        }

        

    }