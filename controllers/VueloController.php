<?php
    
    class VueloController {
            // Obtiene una instancia del service y de la vista de tareas
            private $service;
            private $view;

            /**
             * Constructor de la clase VueloController.
             * Inicializa las instancias del servicio (VueloService) y la vista (VueloView).
             */
            public function __construct() {
                $this->service = new VueloService();
                $this->view = new VueloView();
            }

            /**
             * Función para mostrar los vuelos.
             * Muestra la vista de los vuelos.
             */
            public function mostrarVuelos() {
                $vuelos = json_decode($this->service->request_curl(), true);
                //print_r($vuelos);
                $arraydeVuelos = array();

                foreach ($vuelos as $vuelo) {
                    $identificador = $vuelo["identificador"];
                    $aeropuertoOrigen = $vuelo["aeropuertoorigen"];
                    $nombreOrigen = $vuelo["nombreorigen"];
                    $paisOrigen = $vuelo["paisorigen"];
                    $aeropuertoDestino = $vuelo["aeropuertodestino"];
                    $nombreDestino = $vuelo["nombredestino"];
                    $paisDestino = $vuelo["paisdestino"];
                    $tipoVuelo = $vuelo["tipovuelo"];
                    $fechaVuelo = $vuelo["fechavuelo"];
                    $numPasajeros = $vuelo["numpasajero"];

                    $nuevoVuelo = new Vuelo($identificador, $aeropuertoOrigen, $nombreOrigen, $paisOrigen, $aeropuertoDestino, $nombreDestino, $paisDestino, $tipoVuelo, $fechaVuelo, $numPasajeros);

                    array_push($arraydeVuelos, $nuevoVuelo);
                }

                $this->view->mostrarTodosVuelos($arraydeVuelos);
            }

    }
