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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Home</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Inicio</li>
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
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                    <?php if (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger " role="alert"><?= session()->getFlashdata('error') ?>
                                          </div>
                                        <?php endif; ?>

                                        <?php if (session()->getFlashdata('msj')) : ?>
                                            <div class="alert alert-success " role="alert"><?= session()->getFlashdata('msj') ?>
                                          </div>
                                        <?php endif; ?>
                        <h4 class="page-title">Usuarios </h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-12">
                                Administración de usuarios.
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#boton1">Usuarios</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--div data 1-->
        <!-- Modal -->
        <div class="modal fade" id="boton1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrar_usuario'))?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="per_nombre"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Apellido:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="per_apellido"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Correo:</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Correo" name="per_correo"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Telefono:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Correo" name="per_telefono"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Fecha Creación:</label>
                                <div class="col-md-12">
                                    <input type="date" name="per_fecha_creacion"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="per_estado" class="form-select shadow-none form-control-line">
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">NIT:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="NIT" name="per_nit"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Resguardo:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="NIT" name="per_resguardo"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Acceso al Sistema:</label>
                                <div class="col-md-12">
                                    <select name="per_acceso_sistema" class="form-select shadow-none form-control-line">
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Contraseña:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="NIT" name="per_contrasena"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Departamento</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Constancia de Sueldo" name="per_iddep"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Cargo</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre de Entidad" name="per_idcar"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                        </div>   
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!---->
        <!--COLUMN 2-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="page-title">Ejemplo </h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-12">
                                Descripcion Ejemplo
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#boton2">Boton</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--div data 1-->
        <!-- Modal -->
        <div class="modal fade" id="boton2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal form-material mx-2">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Empleado:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Puesto:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="ANALISTA DESARROLLADOR"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Tipo de constancia:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Constancia de Sueldo"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Dirigida A:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre de Entidad"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Forma de Entrega:</label>
                                <div class="col-md-12">
                                    <select class="form-select shadow-none form-control-line">
                                        <option></option>
                                        <option>Recogeré Personalmente</option>
                                        <option>Autorizo a un tercero</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Comentario:</label>
                                <div class="col-md-12">
                                    <textarea rows="3" class="form-control form-control-line"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--COLUMN 3-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="page-title">Ejemplo </h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-12">
                                Descripcion Ejemplo
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#boton3">Boton</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--div data 1-->
        <!-- Modal -->
        <div class="modal fade" id="boton3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal form-material mx-2">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Empleado:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Puesto:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="ANALISTA DESARROLLADOR"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Tipo de constancia:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Constancia de Sueldo"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Dirigida A:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre de Entidad"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Forma de Entrega:</label>
                                <div class="col-md-12">
                                    <select class="form-select shadow-none form-control-line">
                                        <option></option>
                                        <option>Recogeré Personalmente</option>
                                        <option>Autorizo a un tercero</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Comentario:</label>
                                <div class="col-md-12">
                                    <textarea rows="3" class="form-control form-control-line"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
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