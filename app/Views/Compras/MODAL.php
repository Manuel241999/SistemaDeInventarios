<div class="modal fade" id="updateuser<?= $usuario['per_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('ActualizarUsuarios'))?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Solicitud de compra de bienes, suministros y servicios</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="form-group">
                                <label class="col-md-12">Codigo Formulario</label>
                                <div class="col-md-12">
                                    <input type="text" name="per_id" value="<?= $usuario['per_id'] ?>"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Versión</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="per_nombre" value="<?= $usuario['per_nombre'] ?>"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Apellido:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="per_apellido" value="<?= $usuario['per_apellido'] ?>"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Correo:</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Correo" name="per_correo" value="<?= $usuario['per_correo'] ?>"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Telefono:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Correo" name="per_telefono" value="<?= $usuario['per_telefono'] ?>"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Fecha Creación:</label>
                                <div class="col-md-12">
                                    <input type="date" name="per_fecha_creacion" value="<?= $usuario['per_fecha_creacion'] ?>"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="per_estado" class="form-select shadow-none form-control-line">
                                        <option  value="<?= $usuario['per_estado'] ?>"> <?= $usuario['per_estado'] ?></option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">NIT:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="NIT" name="per_nit" value="<?= $usuario['per_nit'] ?>"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Resguardo:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="NIT" name="per_resguardo" value="<?= $usuario['per_resguardo'] ?>"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Acceso al Sistema:</label>
                                <div class="col-md-12">
                                    <select name="per_acceso_sistema" class="form-select shadow-none form-control-line">
                                        <option  value="<?= $usuario['per_acceso_sistema'] ?>"><?= $usuario['per_acceso_sistema'] ?></option>
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Departamento</label>
                                <div class="col-md-12">
                                    <select name="per_iddep" class="form-select shadow-none form-control-line">
                                        <option  value="<?= $usuario['per_iddep'] ?>"><?= $usuario['per_iddep'] ?></option>
                                        <?php foreach ($departamentos as $departamento): ?>
                                        <option value="<?= $departamento['dep_id'] ?>"><?= $departamento['dep_nombre'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Cargo</label>
                                <div class="col-md-12">
                                <select name="per_idcar" class="form-select shadow-none form-control-line">
                                        <option  value="<?= $usuario['per_idcar'] ?>"><?= $usuario['per_idcar'] ?></option>
                                        <?php foreach ($cargos as $cargo): ?>
                                        <option value="<?= $cargo['car_id'] ?>"><?= $cargo['car_nombre'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>   
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>