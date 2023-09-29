<!--COLUMN Estado de Transaciones de Compra-->
        
<div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                    <h4 class="page-title">Estado de Transaciones de Compra </h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonEtrEstadoCompraIngresar">Ingresar</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonEtrEstadoCompraMostrar">Mostrar</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--div data 1-->
        <!-- Modal -->
        <!-- Modal IngresarEstadoTransaccionCompra-->
        <div class="modal fade" id="botonEtrEstadoCompraIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="IngresarEstadoCompra" class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrarestadotransaccion'))?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresa una Nuevo Estado de Transaccion de Compra.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre del Estado:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="etr_nombre"
                                        class="form-control form-control-line" id="etr_nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Descripción del Estado:</label>
                                <div class="col-md-12">
                                    <textarea name="etr_descripcion" cols="50" rows="5" placeholder="Descripción" id="etr_descripcion">
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="etr_estado" class="form-select shadow-none form-control-line" id="etr_estado">
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>   
                        <div id="imprimirAqui4"></div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal botonEstadoTransaccionCompraMostrar -->
        <div class="modal fade" id="botonEtrEstadoCompraMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Estado de Transaccion de Compras</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de los estados de transaccion -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre del Estado</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($estadotransacciones as $estadotransaccion): ?>
                                        <tr>
                                            <th scope="row"><?= $estadotransaccion['etr_id'] ?></th>
                                            <td><?= $estadotransaccion['etr_nombre'] ?></td>
                                            <td><?= $estadotransaccion['etr_descripcion'] ?></td>
                                            <td>
                                                <?php
                                                if ($estadotransaccion['etr_estado'] == 1) {
                                                    echo 'Activo';
                                                } else {
                                                    echo 'Inactivo';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteEstadoTransC<?= $estadotransaccion['etr_id'] ?>">                                                    
                                                </button>
                                            </td>

                                            <td>
                                                <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateEstadoTransC<?= $estadotransaccion['etr_id'] ?>">
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
        <?php foreach ($estadotransacciones as $estadotransaccion): ?>
            <!-- Modal Delete -->
            <div class="modal fade" id="deleteEstadoTransC<?= $estadotransaccion['etr_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Desactivarestadotransaccion'))?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar el Estado de Transacción?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-md-12"><?= $estadotransaccion['etr_nombre'] ?></label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="etr_id" value="<?= $estadotransaccion['etr_id'] ?>"
                                            class="form-control form-control-line">
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
            <div class="modal fade" id="updateEstadoTransC<?= $estadotransaccion['etr_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Actualizarestadotransaccion'))?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
            
                                <div class="form-group">
                                    <label class="col-md-12">Nombre del Estado:</label>
                                    <div class="col-md-12">
                                    <input type="hidden" name="etr_id" value="<?= $estadotransaccion['etr_id'] ?>"/>
                                        <input type="text" placeholder="Nombre" name="etr_nombre" value="<?= $estadotransaccion['etr_nombre'] ?>"
                                            class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Descripción del Estado:</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Numero" name="etr_descripcion" value="<?= $estadotransaccion['etr_descripcion'] ?>"
                                            class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Estado:</label>
                                    <div class="col-md-12">
                                        <select name="etr_estado" class="form-select shadow-none form-control-line" required>
                                        <?php if ($estadotransaccion['etr_estado'] == 1) : ?>
                                            <option  value="1">Activo</option>
                                            <option value="2">Inactivo</option>
                                        <?php else : ?>
                                            <option  value="2">Inactivo</option>
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



        <!--COLUMN ESTADO ACTIVO-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="page-title">Estado de Activos</h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnEstadoActIngreso">Ingresar</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnEstadoActMostrar">Mostrar</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <!-- Modal botonEstadoActivosIngresar-->
        <div class="modal fade" id="btnEstadoActIngreso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="ingresarEstadoActivos" class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('registrarestadoactivo')) ?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Estado de Activos.</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre del Estado:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="eac_nombre" class="form-control form-control-line" id="eac_nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Descripción:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Descripcion" name="eac_descripcion" class="form-control form-control-line" id="eac_descripcion">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="eac_estado" class="form-select shadow-none form-control-line" id="eac_estado">
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="imprimirAqui5"></div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal botonEstadoActivoMostrar -->
        <div class="modal fade" id="btnEstadoActMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <th scope="col">Nombre del Estado Activo</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($estadoactivos as $estadoactivo) : ?>
                                        <tr>
                                            <th scope="row"><?= $estadoactivo['eac_id'] ?></th>
                                            <td><?= $estadoactivo['eac_nombre'] ?></td>
                                            <td><?= $estadoactivo['eac_descripcion'] ?></td>
                                            <td>
                                                <?php
                                                    if ($estadoactivo['eac_estado'] == 1) {
                                                        echo 'Activo';
                                                    } else {
                                                        echo 'Inactivo';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteEstadActivo<?= $estadoactivo['eac_id'] ?>">
                                                </button>
                                            </td>

                                            <td>
                                                <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateEstadoActivo<?= $estadoactivo['eac_id'] ?>">
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
        <?php foreach ($estadoactivos as $estadoactivo) : ?>
            <!-- Modal Delete -->
            <div class="modal fade" id="deleteEstadActivo<?= $estadoactivo['eac_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Desactivarestadoactivo')) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar la Región?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-md-12"><?= $estadoactivo['eac_nombre'] ?></label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="eac_id" value="<?= $estadoactivo['eac_id'] ?>" class="form-control form-control-line">
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
            <div class="modal fade" id="updateEstadoActivo<?= $estadoactivo['eac_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarestadoactivo')) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label class="col-md-12">Nombre del Estado:</label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="eac_id" value="<?= $estadoactivo['eac_id'] ?>" />
                                        <input type="text" placeholder="Nombre" name="eac_nombre" value="<?= $estadoactivo['eac_nombre'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="col-md-12">Descripción:</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Descripcion" name="eac_descripcion" value="<?= $estadoactivo['eac_descripcion'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Estado:</label>
                                    <div class="col-md-12">
                                    <select name="eac_estado" class="form-select shadow-none form-control-line" required>
                                            <?php if ($estadoactivo['eac_estado'] == 1) : ?>
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


        <!--COLUMN ESTADO CATALOGO CODIGO SICOIN-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <h4 class="page-title">Catalogo Codigo Sicoin</h4>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-6">
                                    <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnCodSicoinIngreso">Ingresar</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnodSicoinostrar">Mostrar</button>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
        </div>
        <!-- Modal -->
        <!-- Modal botonCatCodSicoinIngresar-->
        <div class="modal fade" id="btnCodSicoinIngreso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="IngresarSicoin" class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('registrarcatalogosicoin')) ?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Catálogo Codigó Sicoin.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre Sicoin:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="ccs_nombre" class="form-control form-control-line" id="ccs_nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Descripción:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Descripcion" name="ccs_descripcion" class="form-control form-control-line" id="ccs_descripcion">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="css_estado" class="form-select shadow-none form-control-line" id="css_estado">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="imprimirAqui6"></div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

            <!-- Modal botonCatCodSicoinMostrar -->
        <div class="modal fade" id="btnodSicoinostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Catálogo de codigó sicoin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de catálogo codigó sicoin -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre del Catálogo Sicoin</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($catalogossicoin as $catalogosCodsicoin) : ?>
                                        <tr>
                                            <th scope="row"><?= $catalogosCodsicoin['ccs_id'] ?></th>
                                            <td><?= $catalogosCodsicoin['ccs_nombre'] ?></td>
                                            <td><?= $catalogosCodsicoin['ccs_descripcion'] ?></td>
                                            <td>
                                                <?php
                                                    if ($catalogosCodsicoin['css_estado'] == 1) {
                                                        echo 'Activo';
                                                    } else {
                                                        echo 'Inactivo';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteCatCodSicoin<?= $catalogosCodsicoin['ccs_id'] ?>">
                                                </button>
                                            </td>

                                            <td>
                                                <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateCatCodSicoin<?= $catalogosCodsicoin['ccs_id'] ?>">
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
        <?php foreach ($catalogossicoin as $catalogosCodsicoin) : ?>
            <!-- Modal Delete -->
            <div class="modal fade" id="deleteCatCodSicoin<?= $catalogosCodsicoin['ccs_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Desactivarcatalogosicoin')) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar el Catálogo Sicoin?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-md-12"><?= $catalogosCodsicoin['ccs_nombre'] ?></label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="ccs_id" value="<?= $catalogosCodsicoin['ccs_id'] ?>" class="form-control form-control-line">
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
            <div class="modal fade" id="updateCatCodSicoin<?= $catalogosCodsicoin['ccs_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarcatalogosicoin')) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label class="col-md-12">Nombre del Estado:</label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="ccs_id" value="<?= $catalogosCodsicoin['ccs_id'] ?>" />
                                        <input type="text" placeholder="Nombre" name="ccs_nombre" value="<?= $catalogosCodsicoin['ccs_nombre'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="col-md-12">Descripción:</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Descripcion" name="ccs_descripcion" value="<?= $catalogosCodsicoin['ccs_descripcion'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Estado:</label>
                                    <div class="col-md-12">
                                    <select name="css_estado" class="form-select shadow-none form-control-line" required>
                                            <?php if ($catalogosCodsicoin['css_estado'] == 1) : ?>
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            <?php else : ?>
                                                <option value="0">Inactivo</option>
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
</div>


<!-- Validaciones Ingresar Usuario -->

<script>
    const FormularioEstadoCompra = document.querySelector('#IngresarEstadoCompra');
    const FormularioEstadoActivos = document.querySelector('#ingresarEstadoActivos');
    const FormularioSicoin = document.querySelector('#IngresarSicoin');

    eventListeners();

    function eventListeners() {
        FormularioEstadoCompra.addEventListener('submit', validarFormularioEstadoCompra);
        FormularioEstadoActivos.addEventListener('submit', validarFormularioEstadoActivos);
        FormularioSicoin.addEventListener('submit', validarFormularioIngresarSicoin);
    }

    //Funciones de validacion de campos
    function validarFormularioEstadoCompra(event) {
        event.preventDefault(); // Prevenir el envío automático del formulario

        const etr_nombre = document.querySelector("#etr_nombre").value;
        const etr_descripcion = document.querySelector("#etr_descripcion").value;
        const etr_estado = document.querySelector("#etr_estado").value;
        

        if (etr_nombre === '' || etr_descripcion === '' || etr_estado === '') {
            imprimirAlerta4('Los campos no pueden ir vacíos', 'error');
        } else {
            // Si la validación es exitosa, puedes enviar el formulario aquí si es necesario
             Formulario.submit();
            console.log('Formulario válido, puedes enviarlo si lo deseas');
        }
    }
    function validarFormularioEstadoActivos(event) {
        event.preventDefault(); // Prevenir el envío automático del formulario

        const eac_nombre = document.querySelector("#eac_nombre").value;
        const eac_descripcion = document.querySelector("#eac_descripcion").value;
        const eac_estado = document.querySelector("#eac_estado").value;

        if (eac_nombre === '' || eac_descripcion === '' || eac_estado === '') {
            imprimirAlerta5('Los campos no pueden ir vacíos', 'error');
        } else {
            // Si la validación es exitosa, puedes enviar el formulario aquí si es necesario
             Formulario.submit();
            console.log('Formulario válido, puedes enviarlo si lo deseas');
        }
    }
    function validarFormularioIngresarSicoin(event) {
        event.preventDefault(); // Prevenir el envío automático del formulario

        const ccs_nombre = document.querySelector("#ccs_nombre").value;
        const ccs_descripcion = document.querySelector("#ccs_descripcion").value;
        const css_estado = document.querySelector("#css_estado").value;
        

        if (ccs_nombre === '' || ccs_descripcion === '' || css_estado === '') {
            imprimirAlerta6('Los campos no pueden ir vacíos', 'error');
        } else {
            // Si la validación es exitosa, puedes enviar el formulario aquí si es necesario
             Formulario.submit();
            console.log('Formulario válido, puedes enviarlo si lo deseas');
        }
    }
    
  //Mensajes de Alerta
    function imprimirAlerta4(msg, tipo) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('text-center', 'alert');
        if (tipo === 'error') {
            divMensaje.classList.add('alert-danger');
        } else {
            divMensaje.classList.add('alert-success');
        }
        divMensaje.textContent = msg;
        document.querySelector('#imprimirAqui4').appendChild(divMensaje);
        

        // Puedes agregar un temporizador para eliminar el mensaje después de un tiempo
         setTimeout(() =>{
          divMensaje.remove();
         }, 5000);
    }
    function imprimirAlerta5(msg, tipo) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('text-center', 'alert');
        if (tipo === 'error') {
            divMensaje.classList.add('alert-danger');
        } else {
            divMensaje.classList.add('alert-success');
        }
        divMensaje.textContent = msg;
        document.querySelector('#imprimirAqui5').appendChild(divMensaje);
        

        // Puedes agregar un temporizador para eliminar el mensaje después de un tiempo
         setTimeout(() =>{
          divMensaje.remove();
         }, 5000);
    }
    function imprimirAlerta6(msg, tipo) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('text-center', 'alert');
        if (tipo === 'error') {
            divMensaje.classList.add('alert-danger');
        } else {
            divMensaje.classList.add('alert-success');
        }
        divMensaje.textContent = msg;
        document.querySelector('#imprimirAqui6').appendChild(divMensaje);
        

        // Puedes agregar un temporizador para eliminar el mensaje después de un tiempo
         setTimeout(() =>{
          divMensaje.remove();
         }, 5000);
    }
</script>
