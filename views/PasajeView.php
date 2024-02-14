<?php

    class PasajeView{
        
        public function getPasajes($arraydePasaje) {
?>
        
            <div class="container">
                <h1 class="h1__title">Todos los Pasajes</h1>
                <!-- INICIO TABLA -->
                <table class="table__vuelos">
                    <thead class="table__thead">
                        <tr>
                            <th class="th__table">Id Pasaje</th>
                            <th class="th__table">Código Pasajero</th>
                            <th class="th__table">Identificador Vuelo</th>
                            <th class="th__table">Número Asiento</th>
                            <th class="th__table">Clase</th>
                            <th class="th__table">Precio</th>
                            <th class="th__table">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($arraydePasaje as $pasaje) {
                             
                                ?>
                                <tr>
                                    <td class="td__table"> <?php echo $pasaje->getIdpasaje(); ?> </td>
                                    <td class="td__table"> <?php echo $pasaje->getPasajerocod(); ?> </td>
                                    <td class="td__table"> <?php echo $pasaje->getIdentificador(); ?> </td>
                                    <td class="td__table"> <?php echo $pasaje->getNumasiento(); ?> </td>
                                    <td class="td__table"> <?php echo $pasaje->getClase(); ?> </td>
                                    <td class="td__table"> <?php echo $pasaje->getPvp(); ?> </td>
                                    <td class="td__table"> 
                                        
                                    </td>
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
?>

