<?php

    class Vuelo{
        
        private $identificador;
        private $aeropuertoorigen;
        private $nombreorigen;
        private $paisorigen;
        private $aeropuertodestino;
        private $nombredestino;
        private $paisdestino;
        private $tipovuelo;
        private $fechavuelo;
        private $numpasajeros;
        
        

        public function __construct($identificador, $aeropuertoorigen, $nombreorigen, $paisorigen, $aeropuertodestino, $nombredestino, $paisdestino, $tipovuelo, $fechavuelo, $numpasajeros) {
            $this->identificador = $identificador;
            $this->aeropuertoorigen = $aeropuertoorigen;
            $this->nombreorigen = $nombreorigen;
            $this->paisorigen = $paisorigen;
            $this->aeropuertodestino = $aeropuertodestino;
            $this->nombredestino = $nombredestino;
            $this->paisdestino = $paisdestino;
            $this->tipovuelo = $tipovuelo;
            $this->fechavuelo = $fechavuelo;
            $this->numpasajeros = $numpasajeros;
        }

        public function getIdentificador() {
            return $this->identificador;
        }

        public function getAeropuertoorigen() {
            return $this->aeropuertoorigen;
        }

        public function getNombreorigen() {
            return $this->nombreorigen;
        }

        public function getPaisorigen() {
            return $this->paisorigen;
        }

        public function getAeropuertodestino() {
            return $this->aeropuertodestino;
        }

        public function getNombredestino() {
            return $this->nombredestino;
        }

        public function getPaisdestino() {
            return $this->paisdestino;
        }

        public function getTipovuelo() {
            return $this->tipovuelo;
        }

        public function getFechavuelo() {
            return $this->fechavuelo;
        }

        public function getNumpasajeros() {
            return $this->numpasajeros;
        }

        public function setIdentificador($identificador): void {
            $this->identificador = $identificador;
        }

        public function setAeropuertoorigen($aeropuertoorigen): void {
            $this->aeropuertoorigen = $aeropuertoorigen;
        }

        public function setNombreorigen($nombreorigen): void {
            $this->nombreorigen = $nombreorigen;
        }

        public function setPaisorigen($paisorigen): void {
            $this->paisorigen = $paisorigen;
        }

        public function setAeropuertodestino($aeropuertodestino): void {
            $this->aeropuertodestino = $aeropuertodestino;
        }

        public function setNombredestino($nombredestino): void {
            $this->nombredestino = $nombredestino;
        }

        public function setPaisdestino($paisdestino): void {
            $this->paisdestino = $paisdestino;
        }

        public function setTipovuelo($tipovuelo): void {
            $this->tipovuelo = $tipovuelo;
        }

        public function setFechavuelo($fechavuelo): void {
            $this->fechavuelo = $fechavuelo;
        }

        public function setNumpasajeros($numpasajeros): void {
            $this->numpasajeros = $numpasajeros;
        }





    }
 