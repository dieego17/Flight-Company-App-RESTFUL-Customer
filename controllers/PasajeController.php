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

            foreach ($pasajes as $pasaje) {

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
    }
