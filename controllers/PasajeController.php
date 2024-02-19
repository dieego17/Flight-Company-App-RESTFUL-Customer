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
        
        /**
         * Función que sirve para recoger los parámetros del formulario y darselos al servicio
         * para que compruebe si se puede insertar un nuevo pasaje o no
         * 
         */
        public function insertarPasaje() {
            
            $pasajerocod = $_POST['pasajerocod'];
            $identificador = $_POST['identificador'];
            $numasiento = $_POST['numasiento'];
            $clase = $_POST['clase'];
            $pvp = $_POST['pvp'];
            
            $this->service->request_post($pasajerocod, $identificador, $numasiento, $clase, $pvp);
            
            header('Location: index.php?controller=Pasaje&action=mostrarPasajes');

        }
        
        /**
         * Función para borrar el pasaje seleccionado en la vista que se trae por el método POST
         * y a su vez se llama al servicio para borrar dicho pasaje
         * 
         */
        public function eliminarPasaje() {
            $idpasaje = $_POST['idpasaje'];
            
            $this->service->request_delete($idpasaje);
            
            header('Location: index.php?controller=Pasaje&action=mostrarPasajes');
            
        }
        
        /**
         * Recibo los datos del pasaje seleccionado y los muestro en la vista para posteriormente
         * mediante un formulario actualizar el pasaje
         */
        public function mostrarUpdatePasaje() {
            
            $idpasaje = $_POST['idpasaje'];
            $pasajerocod = $_POST['pasajerocod'];
            $identificador = $_POST['identificador'];
            $numasiento = $_POST['numasiento'];
            $clase = $_POST['clase'];
            $pvp = $_POST['pvp'];
            
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
           

            $this->view->mostrarMenuUpdate($idpasaje, $pasajerocod, $identificador, $numasiento, $clase, $pvp, $arrayVuelos, $arrayPasajero);
        }
        
        /**
         * Función para recibir registros y estos mandarlos al servicio para que se compruebe el pasaje
         * seleccionado y sus atributos y si es cocrecto, se actualizará
         * 
         */
        public function updatePasaje() {
            
            $idpasaje = $_POST['idpasaje'];
            $pasajerocod = $_POST['pasajerocod'];
            $identificador = $_POST['identificador'];
            $numasiento = $_POST['numasiento'];
            $clase = $_POST['clase'];
            $pvp = $_POST['pvp'];
            
            $this->service->request_put($idpasaje, $pasajerocod, $identificador, $numasiento, $clase, $pvp);
            
        }
        
        public function mostrarMenuIdentificadores() {
            $pasajes = json_decode($this->service->request_curl(), true);
            
            $arrayVuelos = array();
            
             foreach ($pasajes['registros2'] as $pasaje) {
                
                $selectDatosVuelos = new Pasaje($pasaje['identificador'], $pasaje['aeropuertoorigen'], $pasaje['identificador'], $pasaje['aeropuertodestino'], $pasaje['identificador'], $pasaje['identificador'], $pasaje['identificador'], $pasaje['identificador'], $pasaje['identificador'], $pasaje['identificador']);
                
                array_push($arrayVuelos, $selectDatosVuelos);
            }
            
            $this->view->mostrarMenuVuelo($arrayVuelos);
            
        }
        
        public function identificadorSelecc() {
            $identificador = $_POST['identificador'];
            
            $this->view->identificadorSeleccionado($identificador);
            
        }
        
        public function mostrarUnPasaje() {
            $identificador = $_POST['identificador'];
            
            $objet_res = $this->service->request_uno($identificador);
            
            $arrayPasaje = array();
                
                foreach ($objet_res as $value) {
                    
                    $pasaje = new Pasaje($value['idpasaje'], $value['pasajerocod'], $value['nombre'], $value['numasiento'], $value['clase'], $value['pvp']);
                
                    array_push($arrayPasaje, $pasaje);
                }
            
            $this->view->mostrarUnPasaje($arrayPasaje, $identificador);
            
        }
        
    }
