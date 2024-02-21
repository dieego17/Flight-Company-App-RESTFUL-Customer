<?php

    class PasajeroService{
        
        //GET
        function request_curl() {
            $urlmiservicio = "http://localhost/_servWeb/servicioVuelos/Pasajero.php";
            $conexion = curl_init();

            //Url de la petición
            curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);

            //Tipo de petición
            curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);

            //Tipo de contenido de la respuesta
            curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json'));

            //para recibir una respuesta
            curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
            $res = curl_exec($conexion);

            if ($res) {
                //echo "<br>Salida request_curl<br>";
                //print_r($res);
                return $res;
            }
            curl_close($conexion);
        }
        
        
    }
