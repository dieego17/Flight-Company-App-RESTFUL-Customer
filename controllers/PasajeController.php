<?php

    class PasajeController {

        // Obtiene una instancia del service y de la vista de tareas
        private $service;
        private $view;

        /**
         * Constructor de la clase VueloController.
         * Inicializa las instancias del servicio (VueloService) y la vista (VueloView).
         */
        public function __construct() {
            $this->service = new PasajeService();
            $this->view = new PasajeView();
        }

        /**
         * Función para mostrar los vuelos.
         * Muestra la vista de los vuelos.
         */
        public function mostrarPasajes() {
            $pasajes = json_decode($this->service->request_curl(), true);
            //print_r($pasajes);
            $arraydePasaje = array();

            foreach ($pasajes['resgistros'] as $pasaje) {

                $idpasaje = $pasaje['idpasaje'];
                $pasajerocod = $pasaje['pasajerocod'];
                $identificador = $pasaje['identificador'];
                $numasiento = $pasaje['numasiento'];
                $clase = $pasaje['clase'];
                $pvp = $pasaje['pvp'];

                $nuevoPasaje = new Pasaje($idpasaje, $pasajerocod, $identificador, $numasiento, $clase, $pvp);

                array_push($arraydePasaje, $nuevoPasaje);
            }

            $this->view->getPasajes($arraydePasaje);
        }
        
        /**
         * Función que recoge un array multidimensional de pasajes
         * Creo objetos con ese array y paso cada uno de esos arrays divididos a la vista
         */
        public function mostrarMenuInsert() {
            $pasajes = json_decode($this->service->request_curl(), true);
            
            $arrayPasajero = array();
            $arrayVuelos = array();

            
            foreach ($pasajes['registros1'] as $pasaje) {
                //print_r($pasaje);
                
                $selectDatosPasajero = new Pasaje($pasaje['nombre'], $pasaje['pasajerocod'], $pasaje['nombre'], $pasaje['pasajerocod'], $pasaje['nombre'], $pasaje['pasajerocod']);
                
                array_push($arrayPasajero, $selectDatosPasajero);
            }

            foreach ($pasajes['registros2'] as $pasaje) {
                //print_r($pasaje);
                $selectDatosVuelos = new Pasaje($pasaje['identificador'], $pasaje['aeropuertoorigen'], $pasaje['aeropuertodestino'], $pasaje['identificador'], $pasaje['identificador'], $pasaje['identificador']);
                
                array_push($arrayVuelos, $selectDatosVuelos);
            }

            //print_r($arrayPasajero);
            //print_r($arrayVuelos);
            $this->view->mostrarMenuInsert($arrayPasajero, $arrayVuelos);
        }
        
        public function eliminarPasaje() {
            $idpasaje = $_POST['idpasaje'];
            
            $this->service->request_delete($idpasaje);
            
            header('Location: index.php?controller=Pasaje&action=mostrarPasajes');
            
        }
    }
