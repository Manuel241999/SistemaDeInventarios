
<div class="row">

    <div class="col-lg-4 col-xlg-3 col-md-4">
         <!--COLUMN PROCESO CUENTA-->
            <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <h4 class="page-title">Proceso de Cuenta</h4>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-6">
                                    <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnProcesoCueIngreso">Ingresar</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnProcesoCueMostrar">Mostrar</button>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <!-- Modal botonProcesoCuentaIngresar-->
            <div class="modal fade" id="btnProcesoCueIngreso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="ProcesoCuentaIngresar" class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('registrarcuenta')) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Proceso Cuenta.</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-md-12">Nombre Proceso Cuenta:</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Nombre" name="cue_nombre" class="form-control form-control-line" id="cue_nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Estado:</label>
                                    <div class="col-md-12">
                                        <select name="cue_estado" class="form-select shadow-none form-control-line" id="cue_estado">
                                            <option value="1">Activo</option>
                                            <option value="2">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="imprimirAqui7"></div>
                            <div class="modal-footer d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal botonEstadoActivoMostrar -->
            <div class="modal fade" id="btnProcesoCueMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Mostrar Proceso Cuenta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Tabla de Proceso Cuenta -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-success">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre del Proceso Cuenta</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col" colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cuentas as $cuenta) : ?>
                                            <tr>
                                                <th scope="row"><?= $cuenta['cue_id'] ?></th>
                                                <td><?= $cuenta['cue_nombre'] ?></td>
                                                <td>
                                                    <?php
                                                        if ($cuenta['cue_estado'] == 1) {
                                                            echo 'Activo';
                                                        } else {
                                                            echo 'Inactivo';
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteProcesoCue<?= $cuenta['cue_id'] ?>">
                                                    </button>
                                                </td>

                                                <td>
                                                    <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateProcesoCue<?= $cuenta['cue_id'] ?>">
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modale Delete -->
            <?php foreach ($cuentas as $cuenta) : ?>
                <!-- Modal Delete -->
                <div class="modal fade" id="deleteProcesoCue<?= $cuenta['cue_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Desactivarcuenta')) ?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar Proceso Cuenta?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-md-12"><?= $cuenta['cue_nombre'] ?></label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="cue_id" value="<?= $cuenta['cue_id'] ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Desactivar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Update -->
                <div class="modal fade" id="updateProcesoCue<?= $cuenta['cue_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarcuenta')) ?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label class="col-md-12">Nombre del Proceso Cuenta:</label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="cue_id" value="<?= $cuenta['cue_id'] ?>" />
                                            <input type="text" placeholder="Nombre" name="cue_nombre" value="<?= $cuenta['cue_nombre'] ?>" class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Estado:</label>
                                        <div class="col-md-12">
                                        <select name="cue_estado" class="form-select shadow-none form-control-line" required>
                                                <?php if ($cuenta['cue_estado'] == 1) : ?>
                                                    <option value="1">Activo</option>
                                                    <option value="2">Inactivo</option>
                                                <?php else : ?>
                                                    <option value="2">Inactivo</option>
                                                    <option value="1">Activo</option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary text-white">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


            <!--COLUMN PROCESO SUB CUENTA-->
            <div class="col-lg-4 col-xlg-3 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <h4 class="page-title">Proceso Sub Cuenta</h4>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-6">
                                    <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnProcesoSubCuenta">Ingresar</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnProcesoSubMostrar">Mostrar</button>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <!-- Modal botonEstadoActivosIngresar-->
            <div class="modal fade" id="btnProcesoSubCuenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="ProcesoSubCuenta" class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('registrarsubcuenta')) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingresa una SubCuenta:</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-md-12">Nombre de Sub Cuenta:</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Nombre" name="scu_nombre" class="form-control form-control-line" id="scu_nombre">
                                    </div>
                                </div>

                                <label class="col-md-12">Cuenta padre:</label>
                                <select name="scu_idcue" class="form-select shadow-none form-control-line" id="scu_idcue">
                                <?php foreach ($cuentas as $cuenta): ?>       
                                <option value=<?= $cuenta['cue_id'] ?>><?= $cuenta['cue_nombre'] ?></option>
                                <?php endforeach; ?>

                                </select>

                                <div class="form-group">
                                    <label class="col-md-12">Estado:</label>
                                    <div class="col-md-12">
                                        <select name="scu_estado" class="form-select shadow-none form-control-line" id="scu_estado"> 
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="imprimirAqui8"></div>
                            <div class="modal-footer d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal botonEstadoActivoMostrar -->
            <div class="modal fade" id="btnProcesoSubMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Mostrar Sub Cuentas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Tabla de usuarios -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-success">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre de Sub Cuenta</th>
                                            <th scope="col">Cuenta padre</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col" colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($subCuentasCuenta as $subcuenta) : ?>
                                            <tr>
                                                <th scope="row"><?= $subcuenta['id'] ?></th>
                                                <td><?= $subcuenta['nombre'] ?></td>
                                                <td><?= $subcuenta['cueNombre'] ?></td>
                                                <td>
                                                    <?php
                                                        if ($subcuenta['estado'] == 1) {
                                                            echo 'Activo';
                                                        } else {
                                                            echo 'Inactivo';
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteSubCuenta<?= $subcuenta['id'] ?>">
                                                    </button>
                                                </td>

                                                <td>
                                                    <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateSubCuenta<?= $subcuenta['id'] ?>">
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modale Delete -->
            <?php foreach ($subcuentas as $subcuenta) : ?>
                <!-- Modal Delete -->
                <div class="modal fade" id="deleteSubCuenta<?= $subcuenta['scu_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Desactivarsubcuenta')) ?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar la Región?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-md-12"><?= $subcuenta['scu_nombre'] ?></label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="scu_id" value="<?= $subcuenta['scu_id'] ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Desactivar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Update -->
                <div class="modal fade" id="updateSubCuenta<?= $subcuenta['scu_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarsubcuenta')) ?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                <div class="form-group">
                                    <label class="col-md-12">Nombre de Sub Cuenta:</label>
                                    <div class="col-md-12">
                                    <input type="hidden" name="scu_id" value="<?= $subcuenta['scu_id'] ?>" />
                                    <input type="text" placeholder="Nombre" name="scu_nombre" class="form-control form-control-line" value="<?= $subcuenta['scu_nombre'] ?>" required>
                                    </div>
                                </div>

                                <label class="col-md-12">Cuenta padre:</label>
                                <select name="scu_idcue" class="form-select shadow-none form-control-line" value="<?= $subcuenta['scu_idcue'] ?>" required>
                                <?php foreach ($cuentas as $cuenta): ?>       
                                <option value=<?= $cuenta['cue_id'] ?>><?= $cuenta['cue_nombre'] ?></option>
                                <?php endforeach; ?>
                                </select>

                            
                                <div class="form-group">
                                    <label class="col-md-12">Estado:</label>
                                    <div class="col-md-12">
                                        <select name="scu_estado" class="form-select shadow-none form-control-line" required>
                                            <option value="1" <?= ($subcuenta['scu_estado'] == 1) ? 'selected' : '' ?>>Activo</option>
                                            <option value="0" <?= ($subcuenta['scu_estado'] == 0) ? 'selected' : '' ?>>Inactivo</option>
                                        </select>
                                    </div>
                                </div>


                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary text-white">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


            <!--COLUMN TIPOS DE GESTIONES-->

            <div class="col-lg-4 col-xlg-3 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <h4 class="page-title">Tipos de Gestiones</h4>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-6">
                                    <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnTiposGestionesIngresar">Ingresar</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnTipoGestion">Mostrar</button>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        <!-- Modal -->
        <!-- Modal botonEstadoActivoMostrar -->
        <div class="modal fade" id="btnTipoGestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Mostrar Estado Activo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Tabla de usuarios -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-success">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre del Tipo de Gestion:</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col" colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tipogestiones as $tipogestion) : ?>
                                            <tr>
                                                <th scope="row"><?= $tipogestion['tge_id'] ?></th>
                                                <td><?= $tipogestion['tge_nombre'] ?></td>
                                                <td>
                                                    <?php
                                                        if ($tipogestion['tge_estado'] == 1) {
                                                            echo 'Activo';
                                                        } else {
                                                            echo 'Inactivo';
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteTipoGestion<?= $tipogestion['tge_id'] ?>">
                                                    </button>
                                                </td>

                                                <td>
                                                    <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateTipoGestion<?= $tipogestion['tge_id'] ?>">
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Modal botonTiposGestionesIngresar-->
        <div class="modal fade" id="btnTiposGestionesIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="GestionesIngresar" class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrartipogestion'))?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresa una Nueva Sub Region.</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre del Tipo de Gestion:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="tge_nombre"
                                        class="form-control form-control-line" id="tge_nombre">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-12">Descripción:</label>
                            <textarea name="tge_descripcion" cols="50" rows="5" placeholder="Coloca la dirección" id="tge_descripcion">
                            </textarea>
                                

                                <div class="form-group">
                                    <label class="col-md-12">Estado:</label>
                                    <div class="col-md-12">
                                        <select name="tge_estado" class="form-select shadow-none form-control-line" id="tge_estado">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                          <div id="imprimirAqui9"></div>
                            <div class="modal-footer d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

          <!-- Modale Delete -->
        <?php foreach ($tipogestiones as $tipogestion) : ?>
                <!-- Modal Delete -->
                <div class="modal fade" id="deleteTipoGestion<?= $tipogestion['tge_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Desactivartipogestion')) ?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar la Región?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-md-12"><?= $tipogestion['tge_nombre'] ?></label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="tge_id" value="<?= $tipogestion['tge_id'] ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Desactivar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Update -->
                <div class="modal fade" id="updateTipoGestion<?= $tipogestion['tge_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizartipogestion')) ?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-md-12">Nombre del Tipo de Gestion:</label>
                                        <div class="col-md-12">
                                        <input type="hidden" name="tge_id" value="<?= $tipogestion['tge_id'] ?>" />
                                        <input type="text" placeholder="Nombre" name="tge_nombre" value="<?= $tipogestion['tge_nombre'] ?>" class="form-control form-control-line" required/>
                                        
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-12">Descripción:</label>
                            <textarea name="tge_descripcion" cols="50" rows="5" placeholder="Coloca la dirección" required>
                            <?= $tipogestion['tge_descripcion'] ?>
                            </textarea> 

                        <div class="form-group">
                            <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="tge_estado" class="form-select shadow-none form-control-line"  value="<?= $tipogestion['tge_estado'] ?>" required>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary text-white">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
        <?php endforeach; ?> 
       

    </div>
</div>

<script>
    const ProcesoCuentaIngresar = document.querySelector('#ProcesoCuentaIngresar');
    const ProcesoSubCuenta = document.querySelector('#ProcesoSubCuenta');
    const GestionesIngresar = document.querySelector('#GestionesIngresar');

    eventListeners();

    function eventListeners() {
        ProcesoCuentaIngresar.addEventListener('submit', validarProcesoCuentaIngresar);
        ProcesoSubCuenta.addEventListener('submit', validarProcesoSubCuenta);
        GestionesIngresar.addEventListener('submit', validarGestionesIngresar);
    }

    //Funciones de validacion de campos
    function validarProcesoCuentaIngresar(event) {
        event.preventDefault(); // Prevenir el envío automático del formulario

        const cue_nombre = document.querySelector("#cue_nombre").value;
        const cue_estado = document.querySelector("#cue_estado").value;
        

        if (cue_nombre === '' || cue_estado === '') {
            imprimirAlerta7('Los campos no pueden ir vacíos', 'error');
        } else {
            // Si la validación es exitosa, puedes enviar el formulario aquí si es necesario
             Formulario.submit();
            console.log('Formulario válido, puedes enviarlo si lo deseas');
        }
    }
    function validarProcesoSubCuenta(event) {
        event.preventDefault(); // Prevenir el envío automático del formulario

        const scu_nombre = document.querySelector("#scu_nombre").value;
        const scu_idcue = document.querySelector("#scu_idcue").value;
        const scu_estado = document.querySelector("#scu_estado").value;

        if (scu_nombre === '' || scu_idcue === '' || scu_estado === '') {
            imprimirAlerta8('Los campos no pueden ir vacíos', 'error');
        } else {
            // Si la validación es exitosa, puedes enviar el formulario aquí si es necesario
             Formulario.submit();
            console.log('Formulario válido, puedes enviarlo si lo deseas');
        }
    }
    function validarGestionesIngresar(event) {
        event.preventDefault(); // Prevenir el envío automático del formulario

        const tge_nombre = document.querySelector("#tge_nombre").value;
        const tge_descripcion = document.querySelector("#tge_descripcion").value;
        const tge_estado = document.querySelector("#tge_estado").value;
        

        if (tge_nombre === '' || tge_descripcion === '' || tge_estado === '') {
            imprimirAlerta9('Los campos no pueden ir vacíos', 'error');
        } else {
            // Si la validación es exitosa, puedes enviar el formulario aquí si es necesario
             Formulario.submit();
            console.log('Formulario válido, puedes enviarlo si lo deseas');
        }
    }
    
  //Mensajes de Alerta
    function imprimirAlerta7(msg, tipo) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('text-center', 'alert');
        if (tipo === 'error') {
            divMensaje.classList.add('alert-danger');
        } else {
            divMensaje.classList.add('alert-success');
        }
        divMensaje.textContent = msg;
        document.querySelector('#imprimirAqui7').appendChild(divMensaje);
        

        // Puedes agregar un temporizador para eliminar el mensaje después de un tiempo
         setTimeout(() =>{
          divMensaje.remove();
         }, 5000);
    }
    function imprimirAlerta8(msg, tipo) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('text-center', 'alert');
        if (tipo === 'error') {
            divMensaje.classList.add('alert-danger');
        } else {
            divMensaje.classList.add('alert-success');
        }
        divMensaje.textContent = msg;
        document.querySelector('#imprimirAqui8').appendChild(divMensaje);
        

        // Puedes agregar un temporizador para eliminar el mensaje después de un tiempo
         setTimeout(() =>{
          divMensaje.remove();
         }, 5000);
    }
    function imprimirAlerta9(msg, tipo) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('text-center', 'alert');
        if (tipo === 'error') {
            divMensaje.classList.add('alert-danger');
        } else {
            divMensaje.classList.add('alert-success');
        }
        divMensaje.textContent = msg;
        document.querySelector('#imprimirAqui9').appendChild(divMensaje);
        

        // Puedes agregar un temporizador para eliminar el mensaje después de un tiempo
         setTimeout(() =>{
          divMensaje.remove();
         }, 5000);
    }
</script>