<?php 
$session = session();
date_default_timezone_set("America/Guatemala");
if (!isset($_SESSION['logged_in'])) : ?>
    <p>No has iniciado sesión.</p>
    <a href="<?= base_url('/') ?>">Iniciar sesión</a>
<?php else : ?>
        
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Control de Inventario - INAB</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/favicon.png')?>">
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/css/style.min.css')?>" rel="stylesheet">
    <!--<link href="http://localhost:41062/www/app/Views/Inventario/dist/css/style.min.css'" rel="stylesheet">-->
    
</head>

<body>
        <?= $this->include('Layout/Header') ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Basic Table</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
        <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Header</h4>
                                <h6 class="card-subtitle">Similar to tables, use the modifier classes .thead-light to
                                    make <code>&lt;thead&gt;</code>s appear light.</h6>
                            </div>
                            <?php if (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger " role="alert"><?= session()->getFlashdata('error') ?>
                                            </div>
                            <?php endif; ?>

                                        <?php if (session()->getFlashdata('msj')) : ?>
                                            <div class="alert alert-success " role="alert"><?= session()->getFlashdata('msj') ?>
                                          </div>
                                        <?php endif; ?>

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
                                    <?php foreach ($usuarios as $usuario): ?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?= $usuario['per_nombre'] ?></td>
                                            <td><?= $usuario['per_apellido'] ?></td>
                                            <td><?= $usuario['per_correo'] ?></td>

                                            <?php if ($usuario['per_estado'] == 1) : ?>
                                                <td>Activo</td>
                                            <?php else : ?>
                                                <td>Inactivo</td>
                                            <?php endif; ?>  
            
                                            <?php if ($usuario['per_idcar'] == 1) : ?>
                                                <td>Administrador</td>
                                            <?php elseif ($usuario['per_idcar'] == 2) : ?>
                                                <td>Inventarios</td>
                                            <?php else : ?>
                                                <td>Compras</td>
                                            <?php endif; ?>                                           
                                            
                            <td><button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteuser<?= $usuario['per_id'] ?>"><i class="mdi mdi-close text-white">
                                                
                                            </i></button>
                                                                <!-- Modal Delete-->
                                <div class="modal fade" id="deleteuser<?= $usuario['per_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('DesactivarUsuarios'))?>">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar al usuario?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="col-md-12"><?= $usuario['per_nombre'].' '.$usuario['per_apellido'] ?></label>
                                                        <div class="col-md-12">
                                                            <input type="hidden" name="per_id" value="<?= $usuario['per_id'] ?>"
                                                                class="form-control form-control-line">
                                                        </div>
                                                    </div>
                                                </div>   
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Desactivar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!---->
                            </td>

                            <td><button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#updateuser<?= $usuario['per_id'] ?>"><i class="mdi mdi-account-edit text-white"></i></button>
                                      <!-- Modal Update-->
                                <div class="modal fade" id="updateuser<?= $usuario['per_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('ActualizarUsuarios'))?>">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="form-group">
                                                        <label class="col-md-12">Id:</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="per_id" value="<?= $usuario['per_id'] ?>"
                                                                class="form-control form-control-line">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-12">Nombre:</label>
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
                                                            <?php if ($usuario['per_estado'] == 1) : ?>
                                                                <option  value="<?= $usuario['per_estado'] ?>">Activo</option>
                                                            <?php else : ?>
                                                                <option  value="<?= $usuario['per_estado'] ?>">Inactivo</option>
                                                            <?php endif; ?>   
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
                                                    <button type="submit" class="btn btn-primary text-white">Actualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </td>
                                        </tr>
                                        
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?= $this->include('Layout/Footer') ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=base_url('assets/libs/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?=base_url('assets/extra-libs/sparkline/sparkline.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?=base_url('assets/dist/js/waves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url('assets/dist/js/sidebarmenu.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url('assets/dist/js/custom.min.js')?>"></script>
    <!--This page JavaScript -->
</body>

</html>

<?php endif; ?>