<?php

    class Pasajero{
        
        private $pasajerocod;
        private $nombre;
        private $tlf;
        private $direccion;
        private $pais;
        
        
        public function __construct($pasajerocod, $nombre, $tlf, $direccion, $pais) {
            $this->pasajerocod = $pasajerocod;
            $this->nombre = $nombre;
            $this->tlf = $tlf;
            $this->direccion = $direccion;
            $this->pais = $pais;
        }

        
        public function getPasajerocod() {
            return $this->pasajerocod;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getTlf() {
            return $this->tlf;
        }

        public function getDireccion() {
            return $this->direccion;
        }

        public function getPais() {
            return $this->pais;
        }

        public function setPasajerocod($pasajerocod): void {
            $this->pasajerocod = $pasajerocod;
        }

        public function setNombre($nombre): void {
            $this->nombre = $nombre;
        }

        public function setTlf($tlf): void {
            $this->tlf = $tlf;
        }

        public function setDireccion($direccion): void {
            $this->direccion = $direccion;
        }

        public function setPais($pais): void {
            $this->pais = $pais;
        }


    }

