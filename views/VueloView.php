<?php

    class VueloView{
        
        public function mostrarTodosVuelos($arraydeVuelos) {
            
?>
        
            <div class="container">
                <h1 class="h1__title">Todos los Vuelos</h1>
                <!-- INICIO TABLA -->
                <table class="table__vuelos">
                    <thead class="table__thead">
                        <tr>
                            <th class="th__table">Identificador</th>
                            <th class="th__table">Aeropuerto Origen</th>
                            <th class="th__table">Nombre Aeropuerto Origen</th>
                            <th class="th__table">País Origen</th>
                            <th class="th__table">Aeropuerto Destino</th>
                            <th class="th__table">Nombre Aeropuerto Destino</th>
                            <th class="th__table">País Destino</th>
                            <th class="th__table">Tipo de Vuelo</th>
                            <th class="th__table">Fecha</th>
                            <th class="th__table">Número Pasajeros</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($arraydeVuelos as $vuelo) {
                                ?>
                                <tr>
                                    <td class="td__table"> <?php echo $vuelo->getIdentificador(); ?> </td>
                                    <td class="td__table"> <?php echo $vuelo->getAeropuertoorigen(); ?> </td>
                                    <td class="td__table"> <?php echo $vuelo->getNombreorigen(); ?> </td>
                                    <td class="td__table"> <?php echo $vuelo->getPaisorigen(); ?> </td>
                                    <td class="td__table"> <?php echo $vuelo->getAeropuertodestino(); ?> </td>
                                    <td class="td__table"> <?php echo $vuelo->getNombredestino(); ?> </td>
                                    <td class="td__table"> <?php echo $vuelo->getPaisdestino(); ?> </td>
                                    <td class="td__table"> <?php echo $vuelo->getTipovuelo(); ?> </td>
                                    <td class="td__table"> <?php echo $vuelo->getFechavuelo(); ?> </td>
                                    <td class="td__table"> <?php echo $vuelo->getNumpasajeros(); ?> </td>
                                </tr> 
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        <!-- FIN TABLA -->
        <?php
        }
    }

