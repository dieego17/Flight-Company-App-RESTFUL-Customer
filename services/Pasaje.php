<?php

    class Pasaje{
        
        private $idpasaje;
        private $pasajerocod;
        private $identificador;
        private $numasiento;
        private $clase;
        private $pvp;

        
        public function __construct($idpasaje, $pasajerocod, $identificador, $numasiento, $clase, $pvp) {
            $this->idpasaje = $idpasaje;
            $this->pasajerocod = $pasajerocod;
            $this->identificador = $identificador;
            $this->numasiento = $numasiento;
            $this->clase = $clase;
            $this->pvp = $pvp;
        }

        public function getIdpasaje() {
            return $this->idpasaje;
        }

        public function getPasajerocod() {
            return $this->pasajerocod;
        }

        public function getIdentificador() {
            return $this->identificador;
        }

        public function getNumasiento() {
            return $this->numasiento;
        }

        public function getClase() {
            return $this->clase;
        }

        public function getPvp() {
            return $this->pvp;
        }

        public function setIdpasaje($idpasaje): void {
            $this->idpasaje = $idpasaje;
        }

        public function setPasajerocod($pasajerocod): void {
            $this->pasajerocod = $pasajerocod;
        }

        public function setIdentificador($identificador): void {
            $this->identificador = $identificador;
        }

        public function setNumasiento($numasiento): void {
            $this->numasiento = $numasiento;
        }

        public function setClase($clase): void {
            $this->clase = $clase;
        }

        public function setPvp($pvp): void {
            $this->pvp = $pvp;
        }


        
    }

