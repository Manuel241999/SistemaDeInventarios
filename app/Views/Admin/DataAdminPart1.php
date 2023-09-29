

<div class="col-lg-4 col-xlg-3 col-md-4">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30">
                    <h4 class="page-title">Usuarios </h4>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonUsuarioIngresar">Ingresar</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonUsuarioMostrar">Mostrar</button>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        </div>
        <!--div data 1-->
        <!-- Modal botonUsuarioIngresar-->
        <div class="modal fade" id="botonUsuarioIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="ingresarUsuario" class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('registrar_usuario')) ?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Usuario.</h5>
                            <button type="button" class2="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre:</label>
                                <div class="col-md-12">
                                    <input type="text" id="nombre" placeholder="Nombre" name="per_nombre" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Apellido:</label>
                                <div class="col-md-12">
                                    <input type="text" id="apellido" placeholder="Apellido" name="per_apellido" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Correo:</label>
                                <div class="col-md-12">
                                    <input type="email" id="correo" placeholder="Correo" name="per_correo" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Telefono:</label>
                                <div class="col-md-12">
                                    <input type="number" id="telefono" placeholder="Telefono" name="per_telefono" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Fecha Creación:</label>
                                <div class="col-md-12">
                                    <input type="date" id="fechaCreacion" name="per_fecha_creacion" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="per_estado" id="estado" class="form-select shadow-none form-control-line">
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">NIT:</label>
                                <div class="col-md-12">
                                    <input type="number" id="nit" placeholder="NIT" name="per_nit" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Resguardo:</label>
                                <div class="col-md-12">
                                    <input type="number" id="resguardo" placeholder="Resguardo" name="per_resguardo" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Acceso al Sistema:</label>
                                <div class="col-md-12">
                                    <select name="per_acceso_sistema" id="accesso" class="form-select shadow-none form-control-line">
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Contraseña:</label>
                                <div class="col-md-12">
                                    <input type="text" id="contrasena" placeholder="Contraseña" name="per_contrasena" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Departamento</label>
                                <div class="col-md-12">
                                    <select name="per_iddep" id="departamento" class="form-select shadow-none form-control-line">

                                        <?php foreach ($departamentos as $departamento) : ?>
                                            <option value=<?= $departamento['dep_id'] ?>><?= $departamento['dep_nombre'] ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Cargo</label>
                                <div class="col-md-12">
                                    <select name="per_idcar" id="cargo" class="form-select shadow-none form-control-line">

                                        <?php foreach ($cargos as $cargo) : ?>
                                            <option value=<?= $cargo['car_id'] ?>><?= $cargo['car_nombre'] ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="imprimirAqui"></div>
                       <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal botonUsuarioMostrar -->
        <div class="modal fade" id="botonUsuarioMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Usuarios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de usuarios -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Cargo</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($usuarios as $usuario) : ?>
                                        <tr>
                                            <th scope="row"><?= $usuario['per_id'] ?></th>
                                            <td><?= $usuario['per_nombre'] ?></td>
                                            <td><?= $usuario['per_apellido'] ?></td>
                                            <td><?= $usuario['per_correo'] ?></td>
                                            <td><?= ($usuario['per_estado'] == 1) ? 'Activo' : 'Inactivo' ?></td>
                                            <td>
                                                <?php
                                                if ($usuario['per_idcar'] == 1) {
                                                    echo 'Administrador';
                                                } elseif ($usuario['per_idcar'] == 2) {
                                                    echo 'Inventarios';
                                                } else {
                                                    echo 'Compras';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteuser<?= $usuario['per_id'] ?>">
                                                </button>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateuser<?= $usuario['per_id'] ?>">
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

        <!-- Modales Delete y Update -->
        <?php foreach ($usuarios as $usuario) : ?>
            <!-- Modal Delete -->
            <div class="modal fade" id="deleteuser<?= $usuario['per_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('DesactivarUsuarios')) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar al usuario?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-md-12"><?= $usuario['per_nombre'] . ' ' . $usuario['per_apellido'] ?></label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="per_id" value="<?= $usuario['per_id'] ?>" class="form-control form-control-line">
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
            <div class="modal fade" id="updateuser<?= $usuario['per_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="ActualizarUsuario" class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('ActualizarUsuarios')) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="hidden" name="per_id" value="<?= $usuario['per_id'] ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nombre:</label>
                                    <div class="col-md-12">
                                    <input type="text" id="nombre2" placeholder="Nombre" name="per_nombre" value="<?= $usuario['per_nombre'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Apellido:</label>
                                    <div class="col-md-12">
                                    <input type="text" id="apellido2" placeholder="apellido" name="per_apellido" value="<?= $usuario['per_apellido'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Correo:</label>
                                    <div class="col-md-12">
                                    <input type="email" id="correo2" placeholder="Correo" name="per_correo" value="<?= $usuario['per_correo'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Telefono:</label>
                                    <div class="col-md-12">
                                    <input type="number" id="telefono2" placeholder="Correo" name="per_telefono" value="<?= $usuario['per_telefono'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Fecha Creación:</label>
                                    <div class="col-md-12">
                                        <input type="date" id="fechaCreacion2" name="per_fecha_creacion" value="<?= $usuario['per_fecha_creacion'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Estado:</label>
                                    <div class="col-md-12">
                                        <select name="per_estado" id="estado2" class="form-select shadow-none form-control-line" required>
                                            <?php if ($usuario['per_estado'] == 1) : ?>
                                                <option value="<?= $usuario['per_estado'] ?>">Activo</option>
                                            <?php else : ?>
                                                <option value="<?= $usuario['per_estado'] ?>">Inactivo</option>
                                            <?php endif; ?>
                                            <option value="1">Activo</option>
                                            <option value="2">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">NIT:</label>
                                    <div class="col-md-12">
                                        <input type="number" id="nit2" placeholder="NIT" name="per_nit" value="<?= $usuario['per_nit'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Resguardo:</label>
                                    <div class="col-md-12">
                                        <input type="number" id="resguardo2"  placeholder="NIT" name="per_resguardo" value="<?= $usuario['per_resguardo'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Acceso al Sistema:</label>
                                    <div class="col-md-12">
                                        <select name="per_acceso_sistema" id="accesso2" class="form-select shadow-none form-control-line" required>
                                            <option value="<?= $usuario['per_acceso_sistema'] ?>"><?= $usuario['per_acceso_sistema'] ?></option>
                                            <option value="1">Si</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>

                                <label class="col-md-12">Contraseña:</label>
                                <div class="col-md-12">
                                    <input type="text" id="contrasena2" placeholder="Ingresa tu nueva Contraseña" name="per_contrasena" class="form-control form-control-line" required>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Departamento</label>
                                    <div class="col-md-12">
                                        <select name="per_iddep"  id="departamento2" class="form-select shadow-none form-control-line" required>
                                            <?php foreach ($departamentos as $departamento) : ?>
                                                <option value="<?= $departamento['dep_id'] ?>"><?= $departamento['dep_nombre'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Cargo</label>
                                    <div class="col-md-12">
                                        <select name="per_idcar" id="cargo2" class="form-select shadow-none form-control-line" required>
                                            <?php foreach ($cargos as $cargo) : ?>
                                                <option value="<?= $cargo['car_id'] ?>"><?= $cargo['car_nombre'] ?></option>
                                            <?php endforeach; ?>
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

        
        <!---->
        <!--Regiones-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="page-title">Regiones </h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonRegionesIngresar">Ingresar</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonRegionesMostrar">Mostrar</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--div data 1-->
        <!-- Modal -->
        <!-- Modal botonRegionesIngresar-->
        <div class="modal fade" id="botonRegionesIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="ingresarRegion" class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrarregion'))?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresa una Nueva Region.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre de la Region:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="reg_nombre"
                                           class="form-control form-control-line" id="reg_nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Numero de la region:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Numero" name="reg_numero"
                                           class="form-control form-control-line" id="reg_numero">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="reg_estado" class="form-select shadow-none form-control-line" id="reg_estado">
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                        <div id="imprimirAqui2"></div>
                       <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal botonRegionesMostrar -->
        <div class="modal fade" id="botonRegionesMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Regiones</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de usuarios -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Region</th>
                                        <th scope="col">Numero de Region</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($regiones as $region) : ?>
                                        <tr>
                                            <th scope="row"><?= $region['reg_id'] ?></th>
                                            <td><?= $region['reg_nombre'] ?></td>
                                            <td><?= $region['reg_numero'] ?></td>
                                            <td>
                                                <?php
                                                if ($region['reg_estado'] == 1) {
                                                    echo 'Activo';
                                                } else {
                                                    echo 'Inactivo';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteregion<?= $region['reg_id'] ?>">
                                                </button>
                                            </td>

                                            <td>
                                                <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateRegion<?= $region['reg_id'] ?>">
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
        <?php foreach ($regiones as $region) : ?>
            <!-- Modal Delete -->
            <div class="modal fade" id="deleteregion<?= $region['reg_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Desactivarregion')) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar la Región?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-md-12"><?= $region['reg_nombre'] ?></label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="reg_id" value="<?= $region['reg_id'] ?>" class="form-control form-control-line">
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
            <div class="modal fade" id="updateRegion<?= $region['reg_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarregion')) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label class="col-md-12">Nombre:</label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="reg_id" value="<?= $region['reg_id'] ?>" />
                                        <input type="text" placeholder="Nombre" name="reg_nombre" value="<?= $region['reg_nombre'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Numero de Region:</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Numero" name="reg_numero" value="<?= $region['reg_numero'] ?>" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Estado:</label>
                                    <div class="col-md-12">
                                        <select name="reg_estado" class="form-select shadow-none form-control-line" required>
                                            <option value="<?= $region['reg_numero'] ?>">Estado</option>
                                            <option value="1">Activo</option>
                                            <option value="2">Inactivo</option>
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

  <!---->
        <!--COLUMN 3-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="page-title">Sub Regiones </h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonSubRegionesIngresar">Ingresar</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonSubRegionesMostrar">Mostrar</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--div data 1-->
        <!-- Modal -->
        
        
        <!-- Modal botonSubRegionesIngresar-->
        <div class="modal fade" id="botonSubRegionesIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="ingresarSubRegion" class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrarsubregion'))?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresa una Nueva Sub Region.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre de la Sub Region:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="sre_nombre"
                                           class="form-control form-control-line" id="sre_nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Telefono 1:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Numero" name="sre_telefono1"
                                           class="form-control form-control-line" id="sre_telefono1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Telefono 2:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Numero" name="sre_telefono2"
                                           class="form-control form-control-line" id="sre_telefono2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Telefono 3:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Numero" name="sre_telefono3"
                                           class="form-control form-control-line" id="sre_telefono3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Correo Electronico:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Correo Electronico" name="sre_correo"
                                           class="form-control form-control-line" id="sre_correo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Dirección:</label>
                               <textarea name="sre_direccion" cols="50" rows="5" placeholder="Coloca la dirección" id="sre_direccion">
                               </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Region a la que pertenece:</label>
                                            <div class="col-md-12">
                                                <select name="sre_idreg" class="form-select shadow-none form-control-line" id="sre_idreg">

                                                    <?php foreach ($regiones as $region) : ?>
                                                        <option value=<?= $region['reg_id'] ?>><?= $region['reg_nombre'] ?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">Personal Responsable:</label>
                                            <div class="col-md-12">
                                                <select name="sre_idper_responsable" class="form-select shadow-none form-control-line" id="sre_idper_responsable">
                                                    <?php foreach ($usuarios as $usuario) : ?>
                                                        <option value=<?= $usuario['per_id'] ?>><?= $usuario['per_nombre'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">Estado:</label>
                                            <div class="col-md-12">
                                                <select name="sre_estado" class="form-select shadow-none form-control-line" id="sre_estado">
                                                    <option value="1">Activo</option>
                                                    <option value="2">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="imprimirAqui3"></div>
                                   <div class="modal-footer d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                </div>
            </div>
        </div>

                    <!-- Modal botonSubRegionesMostrar -->
        <div class="modal fade" id="botonSubRegionesMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Sub Regiones</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de usuarios -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Sub Region</th>
                                        <th scope="col">Telefono 1</th>
                                        <th scope="col">Telefono 2</th>
                                        <th scope="col">Telefono 3</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Region a la que pertenece</th>
                                        <th scope="col">Personal Responsable</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($subregionesPersonal as $subregion) : ?>
                                        <tr>
                                            <th scope="row"><?= $subregion['id'] ?></th>
                                            <td><?= $subregion['nombre'] ?></td>
                                            <td><?= $subregion['telefono1'] ?></td>
                                            <td><?= $subregion['telefono2'] ?></td>
                                            <td><?= $subregion['telefono3'] ?></td>
                                            <td><?= $subregion['correo'] ?></td>
                                            <td><?= $subregion['direccion'] ?></td>
                                            <td><?= $subregion['idRegion'] ?></td>

                                            <td><?= $subregion['nombre_del_responsable'] ?></td>
                                            <td>
                                                <?php
                                                if ($subregion['estado'] == 1) {
                                                    echo 'Activo';
                                                } else {
                                                    echo 'Inactivo';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteSubregion<?= $subregion['id'] ?>">
                                                </button>
                                            </td>

                                            <td>
                                                <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateSubRegion<?= $subregion['id'] ?>">
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
                        <?php foreach ($subregiones as $subregion): ?>
                            <!-- Modal Delete -->
                            <div class="modal fade" id="deleteSubregion<?= $subregion['sre_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Desactivarsubregion'))?>">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar la Región?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="col-md-12"><?= $subregion['sre_nombre'] ?></label>
                                                    <div class="col-md-12">
                                                        <input type="hidden" name="sre_id" value="<?= $subregion['sre_id'] ?>"
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
                            <div class="modal fade" id="updateSubRegion<?= $subregion['sre_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Actualizarsubregion'))?>">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                            
                                                <div class="form-group">
                                                    <label class="col-md-12">Nombre:</label>
                                                    <div class="col-md-12">
                                                    <input type="hidden" name="sre_id" value="<?= $subregion['sre_id'] ?>"/>
                                                        <input type="text" placeholder="Nombre" name="sre_nombre" value="<?= $subregion['sre_nombre'] ?>"
                                                            class="form-control form-control-line" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Telefono1</label>
                                                    <div class="col-md-12">
                                                        <input type="number" placeholder="Numero" name="sre_telefono1" value="<?= $subregion['sre_telefono1'] ?>"
                                                            class="form-control form-control-line" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Telefono2</label>
                                                    <div class="col-md-12">
                                                        <input type="number" placeholder="Numero" name="sre_telefono2" value="<?= $subregion['sre_telefono2'] ?>"
                                                            class="form-control form-control-line">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Telefono 3:</label>
                                                    <div class="col-md-12">
                                                        <input type="number" placeholder="Numero" name="sre_telefono3"  value="<?= $subregion['sre_telefono3'] ?>"
                                                            class="form-control form-control-line">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Correo Electronico:</label>
                                                    <div class="col-md-12">
                                                        <input type="text" placeholder="Correo Electronico" name="sre_correo" value="<?= $subregion['sre_correo'] ?>"
                                                            class="form-control form-control-line" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Dirección:</label>
                                                    <textarea name="sre_direccion" cols="50" rows="5" placeholder="Coloca la dirección" required><?= $subregion['sre_direccion'] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Region a la que pertenece:</label>
                                                    <div class="col-md-12">
                                                        <select name="sre_idreg" class="form-select shadow-none form-control-line" required>
                                
                                                        <?php foreach ($regiones as $region): ?>       
                                                        <option value=<?= $region['reg_id'] ?>><?= $region['reg_nombre'] ?></option>
                                                        <?php endforeach; ?>
                                                        
                                                        </select>
                                                    </div>
                                                </div> 

                                <div class="form-group">
                                    <label class="col-md-12">Personal Responsable:</label>
                                    <div class="col-md-12">
                                        <select name="sre_idper_responsable" class="form-select shadow-none form-control-line" required>

                                            <?php foreach ($usuarios as $usuario) : ?>
                                                <option value=<?= $usuario['per_id'] ?>><?= $usuario['per_nombre'] ?></option>
                                            <?php endforeach; ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Estado:</label>
                                                    <div class="col-md-12">
                                                        <select name="sre_estado" class="form-select shadow-none form-control-line" required>
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




<!-- Validaciones Ingresar Usuario -->

 <script>
    const Formulario = document.querySelector('#ingresarUsuario');
    const FormularioRegion = document.querySelector('#ingresarRegion');
    const FormularioSubRegion = document.querySelector('#ingresarSubRegion');

    eventListeners();

    function eventListeners() {
        Formulario.addEventListener('submit', validarFormulario);
        FormularioRegion.addEventListener('submit', validarFormularioRegion);
        FormularioSubRegion.addEventListener('submit', validarFormularioSubRegion);
    }

    //Funciones de validacion de campos
    function validarFormulario(event) {
        event.preventDefault(); // Prevenir el envío automático del formulario

        const nombre = document.querySelector("#nombre").value;
        const apellido = document.querySelector("#apellido").value;
        const correo = document.querySelector("#correo").value;
        const telefono = document.querySelector("#telefono").value;
        const fechaCreacion = document.querySelector("#fechaCreacion").value;
        const estado = document.querySelector("#estado").value;
        const nit = document.querySelector("#nit").value;
        const accesso = document.querySelector("#accesso").value;
        const contrasena = document.querySelector("#contrasena").value;
        const departamento = document.querySelector("#departamento").value;
        const cargo = document.querySelector("#cargo").value;

        if (nombre === '' || apellido === '' || correo === '' ||
            telefono === '' || fechaCreacion === '' || estado === '' ||
            nit === '' || accesso === '' || contrasena === '' ||
            departamento === '' || cargo === '') {
            imprimirAlerta('Los campos no pueden ir vacíos', 'error');
        } else {
            // Si la validación es exitosa, puedes enviar el formulario aquí si es necesario
             Formulario.submit();
            console.log('Formulario válido, puedes enviarlo si lo deseas');
        }
    }
    function validarFormularioRegion(event) {
        event.preventDefault(); // Prevenir el envío automático del formulario

        const reg_nombre = document.querySelector("#reg_nombre").value;
        const reg_numero = document.querySelector("#reg_numero").value;
        const reg_estado = document.querySelector("#reg_estado").value;

        if (reg_nombre === '' || reg_numero === '' || reg_estado === '') {
            imprimirAlerta2('Los campos no pueden ir vacíos', 'error');
        } else {
            // Si la validación es exitosa, puedes enviar el formulario aquí si es necesario
             Formulario.submit();
            console.log('Formulario válido, puedes enviarlo si lo deseas');
        }
    }
    function validarFormularioSubRegion(event) {
        event.preventDefault(); // Prevenir el envío automático del formulario

        const sre_nombre = document.querySelector("#sre_nombre").value;
        const sre_telefono1 = document.querySelector("#sre_telefono1").value;
        const sre_correo = document.querySelector("#sre_correo").value;
        const sre_direccion = document.querySelector("#sre_direccion").value;
        const sre_idreg = document.querySelector("#sre_idreg").value;
        const sre_idper_responsable = document.querySelector("#sre_idper_responsable").value;
        const sre_estado = document.querySelector("#sre_estado").value;

        if (sre_nombre === '' || sre_telefono1 === '' || sre_correo === ''
        || sre_direccion === '' || sre_idreg === '' || sre_idper_responsable === '' || sre_estado === '') {
            imprimirAlerta3('Los campos no pueden ir vacíos', 'error');
        } else {
            // Si la validación es exitosa, puedes enviar el formulario aquí si es necesario
             Formulario.submit();
            console.log('Formulario válido, puedes enviarlo si lo deseas');
        }
    }
    
  //Mensajes de Alerta
    function imprimirAlerta(msg, tipo) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('text-center', 'alert');
        if (tipo === 'error') {
            divMensaje.classList.add('alert-danger');
        } else {
            divMensaje.classList.add('alert-success');
        }
        divMensaje.textContent = msg;
        document.querySelector('#imprimirAqui').appendChild(divMensaje);
        

        // Puedes agregar un temporizador para eliminar el mensaje después de un tiempo
         setTimeout(() =>{
          divMensaje.remove();
         }, 5000);
    }
    function imprimirAlerta2(msg, tipo) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('text-center', 'alert');
        if (tipo === 'error') {
            divMensaje.classList.add('alert-danger');
        } else {
            divMensaje.classList.add('alert-success');
        }
        divMensaje.textContent = msg;
        document.querySelector('#imprimirAqui2').appendChild(divMensaje);
        

        // Puedes agregar un temporizador para eliminar el mensaje después de un tiempo
         setTimeout(() =>{
          divMensaje.remove();
         }, 5000);
    }
    function imprimirAlerta3(msg, tipo) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('text-center', 'alert');
        if (tipo === 'error') {
            divMensaje.classList.add('alert-danger');
        } else {
            divMensaje.classList.add('alert-success');
        }
        divMensaje.textContent = msg;
        document.querySelector('#imprimirAqui3').appendChild(divMensaje);
        

        // Puedes agregar un temporizador para eliminar el mensaje después de un tiempo
         setTimeout(() =>{
          divMensaje.remove();
         }, 5000);
    }
</script>
