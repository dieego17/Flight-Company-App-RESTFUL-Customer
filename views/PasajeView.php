<?php

    class PasajeView{
        
        public function getPasajes($arraydePasaje) {
?>
        
            <div class="container container__pasaje">
                <h1 class="h1__title">Todos los Pasajes</h1>
                <!-- INICIO TABLA -->
                <table class="table__pasaje">
                    <thead class="table__thead table__thead--pasaje">
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
                            $id = 0;
                            foreach ($arraydePasaje as $pasaje) {
                                $id++; // Incremento el id para que al pulsar en uno de los modales detecte el correcto
                                $modalEliminarID = 'exampleModalEliminar_' . $id;
                                    
                                $exampleModalLabelEliID = 'exampleModalLabelEliminar_' . $id;
                             
                        ?>
                                <tr>
                                    <td class="td__table"> <?php echo $pasaje->getIdpasaje(); ?> </td>
                                    <td class="td__table"> <?php echo $pasaje->getPasajerocod(); ?> </td>
                                    <td class="td__table"> <?php echo $pasaje->getIdentificador(); ?> </td>
                                    <td class="td__table"> <?php echo $pasaje->getNumasiento(); ?> </td>
                                    <td class="td__table"> <?php echo $pasaje->getClase(); ?> </td>
                                    <td class="td__table"> <?php echo $pasaje->getPvp(); ?>€ </td>
                                    <td class="td__table td__table--actions"> 
                                        <!-- Button trigger modal for delete pasaje -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?php echo $modalEliminarID ?>">
                                          <i class="fa-solid fa-x"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="<?php echo $modalEliminarID ?>" tabindex="-1" aria-labelledby="<?php echo $exampleModalLabelEliID ?>" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="<?php echo $exampleModalLabelEliID ?>">Número de Pasaje seleccionado <?php echo $pasaje->getIdpasaje(); ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                  <p>¿Estás seguro que quieres eliminar el Pasaje <?php echo $pasaje->getIdpasaje(); ?> ?</p>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                                                <form action="index.php?controller=Pasaje&action=eliminarPasaje" method="POST">
                                                    <input type="hidden" name="idpasaje" value="<?php echo $pasaje->getIdpasaje(); ?>">
                                                    <button type="submit" class="btn btn-danger">ELIMINAR</button>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <!-- UPDATE PASAJE -->
                                        <form action="index.php?controller=Pasaje&action=mostrarUpdatePasaje" method="POST">
                                            <input type="hidden" name="idpasaje" value="<?php echo $pasaje->getIdpasaje(); ?>">
                                            <input type="hidden" name="pasajerocod" value="<?php echo $pasaje->getPasajerocod(); ?>">
                                            <input type="hidden" name="identificador" value="<?php echo $pasaje->getIdentificador(); ?>">
                                            <input type="hidden" name="numasiento" value="<?php echo $pasaje->getNumasiento(); ?>">
                                            <input type="hidden" name="clase" value="<?php echo $pasaje->getClase(); ?>">
                                            <input type="hidden" name="pvp" value="<?php echo $pasaje->getPvp(); ?>">
                                            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                        </form>
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
        
        public function mostrarMenuInsert($arrayPasajero, $arrayVuelos) {
?>
        <div class="container">
            <h1 class="h1__title">Insertar Pasaje</h1>
            <div class="form__insert" >
                <form action="index.php?controller=Pasaje&action=insertarPasaje" method="POST">
                    <div class="container__input">
                        <label class="label__form">Selecciona Pasajero:</label>
                        <select name='pasajerocod'>
                            <?php
                                foreach ($arrayPasajero as $pasaje) {
                                    echo '<option required name="pasajerocod" value="'.$pasaje->getPasajerocod().'">'.$pasaje->getPasajerocod().'-'.$pasaje->getIdpasaje().'</option>';
                                }
                            ?>

                        </select>
                    </div>
                    <div class="container__input">
                        <label class="label__form"class="label__form">Selecciona Identificador de vuelo:</label>
                        <select name="identificador">
                            <?php
                                foreach ($arrayVuelos as $pasaje) {

                                    echo '<option required name="identificador" value="'.$pasaje->getIdpasaje().'">'.$pasaje->getIdpasaje().' - '.$pasaje->getPasajerocod().' - '.$pasaje->getIdentificador().'</option>';
                                }
                            ?>

                        </select>
                    </div>
                    <div class="container__input">
                        <label class="label__form">Selecciona de asiento:</label>
                        <input type="number" name="numasiento" required value="numasiento" min="1" max="400">
                    </div>
                    <div class="container__input">
                        <label>Marca la clase:</label>
                        <input class="input__radio" type="radio" name="clase" value="TURISTA" required>TURISTA
                        <input class="input__radio" type="radio" name="clase" value="PRIMERA">PRIMERA
                        <input class="input__radio" type="radio" name="clase" value="BUSINESS">BUSINESS
                    </div>
                    <div class="container__input">
                        <label class="label__form">PVP:</label>
                        <input type="number" required name="pvp" value="pvp" min="1">
                    </div>
                    <button type="submit">Insertar Pasaje</button>
                </form>
            </div>
        </div>
<?php    
        }
        
        public function mostrarMenuUpdate($idpasaje, $pasajerocod, $identificador, $numasiento, $clase, $pvp) {
?>
        <div class="container">
            <h1 class="h1__title">Modificar Pasaje</h1>
            <div class="form__insert" >
                <form action="index.php?controller=Pasaje&action=updatePasaje" method="POST">
                    <div class="container__input">
                        <input type="hidden" name='idpasaje' value="<?php echo $idpasaje ?>">
                    </div>
                    <div class="container__input">
                        <label class="label__form"class="label__form">Código del pasajero:</label>
                        <input type="number" required name="pasajerocod" value="<?php echo $pasajerocod ?>">
                    </div>
                    <div class="container__input">
                        <label class="label__form">Identificador del vuelo:</label>
                        <input type="text" required name='identificador' min='1' value="<?php echo $identificador ?>">
                    </div>
                    <div class="container__input">
                        <label class="label__form">Número del asiento:</label>
                        <input type="text" required name='numasiento' min='1' value="<?php echo $numasiento ?>">
                    </div>
                    <div class="container__input">
                        <label>Marca la clase:</label>
                        <input class="input__radio" type="radio" name="clase" value="TURISTA" required>TURISTA
                        <input class="input__radio" type="radio" name="clase" value="PRIMERA">PRIMERA
                        <input class="input__radio" type="radio" name="clase" value="BUSINESS">BUSINESS
                    </div>
                    <div class="container__input">
                        <label class="label__form">PVP:</label>
                        <input type="number" required name="pvp" value="<?php echo $pvp ?>" min="1">
                    </div>
                    <button type="submit">Modificar Pasaje</button>
                </form>
            </div>
        </div>
<?php
        }
        
        public function mostrarMenuVuelo($arrayVuelos) {
                
?>
        <div class="container">
            <h1 class="h1__title">Lista Identificador Vuelo</h1>
                <div class="form__insert">
                <form action="action" method="POST">
                    <div class="container__input">
                        <select name="identificador">
<?php
                            foreach ($arrayVuelos as $vuelo) {
                                echo '<option value="'.$vuelo->getIdentificador().'">'.$vuelo->getIdentificador().'</option>';
                            }
?>               
                        </select>
                    </div>
                    <button type="submit">Seleccionar Identificador</button>
                </form>
            </div>
        </div>
            
<?php
        }
    }
?>

