<?php
$session = session();
date_default_timezone_set("America/Guatemala");
if (!isset($_SESSION['logged_in'])) : ?>
    <?= $this->include('Views/Errors') ?>
<?php endif; ?>
<?php if (isset($_SESSION['per_idcar'])) :
    $per_id = $_SESSION['per_idcar'];
    if ($per_id != 3) : ?>
        <?php $session->destroy(); ?>
        <?= $this->include('Views/ErrorRoll') ?>
    <?php else : ?>


        <!DOCTYPE html>
        <html dir="ltr" lang="en">

        <head>
            <meta charset="utf-8">
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="robots" content="noindex,nofollow">
            <title>Inventario - INAB</title>
            <!-- Favicon icon -->
            <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon.png') ?>">
            <!-- Custom CSS -->
            <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
            <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?= base_url('assets/css/style.min.css') ?>" rel="stylesheet">
            <!--<link href="http://localhost:41062/www/app/Views/Inventario/dist/css/style.min.css'" rel="stylesheet">-->

        </head>

        <body>
            <?= $this->include('Layout/Header') ?>


            <!-- ============================================================== -->
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Main wrapper - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
                <!-- ============================================================== -->
                <!-- Topbar header - style you can find in pages.scss -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Topbar header -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Left Sidebar - style you can find in sidebar.scss  -->
                <!-- ============================================================== -->
                <aside class="left-sidebar" data-sidebarbg="skin5">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav">
                            <ul id="sidebarnav">
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('HomeInventario') ?>" aria-expanded="false">
                                        <i class="mdi mdi-av-timer"></i>
                                        <span class="hide-menu">Menu</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('ListarCompraInventario') ?>" aria-expanded="false">
                                        <i class="mdi mdi-av-timer"></i>
                                        <span class="hide-menu">Registro Compras</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
                                        <i class="mdi mdi-av-timer"></i>
                                        <span class="hide-menu">Bajas</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
                                        <i class="mdi mdi-av-timer"></i>
                                        <span class="hide-menu">Perdidas</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('MovimientodeBien') ?>" aria-expanded="false">
                                        <i class="mdi mdi-av-timer"></i>
                                        <span class="hide-menu">Traslados</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                </aside>

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
                                <h4 class="page-title">Traslado de Bienes</h4>
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

                    <div class="container-fluid">
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger " role="alert"><?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('msj')) : ?>
                            <div class="alert alert-success " role="alert"><?= session()->getFlashdata('msj') ?>
                            </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" id="FormularioTraslado" action="<?= base_url(route_to('')) ?>" enctype="multipart/form-data">
                                    <!-- Columna1 -->
                                    <div class="row">
                                        <!-- Espacio1 -->
                                        <div class="col-lg-6">
                                            <div class="p-4">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4">Datos de la Gestión</h1>
                                                </div>
                                                <div class="form-group">
                                                    <label>Fecha de creación</label>
                                                    <input type="date" class="form-control form-control-user mr-3" name="fecha" value="<?php echo date("Y-m-d"); ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tipo de gestión</label>
                                                    <select name="tipogestion" class="form-control form-control-user mr-3">
                                                        <option value="baja">Baja</option>
                                                        <option value="traslado">Traslado</option>
                                                        <option value="otro">Otro</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Correlativo interno</label>
                                                    <input type="text" class="form-control form-control-user" name="correlativo" id="motivo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Motivo</label>
                                                    <input type="text" class="form-control form-control-user" name="motivo" id="motivo">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin -->
                                        <!-- Espacio2 -->
                                        <div class="col-lg-6">
                                            <div class="p-4">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4">Datos Generales</h1>
                                                </div>
                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control form-control-user" name="direccion" id="motivo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Departamento</label>
                                                    <input type="text" class="form-control form-control-user" name="departamento" id="motivo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Sección</label>
                                                    <input type="text" class="form-control form-control-user" name="seccion" id="motivo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Unidad</label>
                                                    <input type="text" class="form-control form-control-user" name="unidad" id="motivo">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group ">
                                                            <label>Región</label>
                                                            <select name="tipogestion" class="form-control form-control-user mr-3">
                                                                <option value="baja">Baja</option>
                                                                <option value="traslado">Traslado</option>
                                                                <option value="otro">Otro</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group ">
                                                            <label>Sub-Región</label>
                                                            <select name="tipogestion" class="form-control form-control-user mr-3">
                                                                <option value="baja">Baja</option>
                                                                <option value="traslado">Traslado</option>
                                                                <option value="otro">Otro</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin -->
                                    </div>
                                    <!-- Fin Row -->
                                    <!-- Row -->
                                    <div class="row">
                                        <!-- Espacio3 -->
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Datos del Bien</h1>
                                            </div>
                                        </div>
                                        <!-- Fin -->
                                    </div>
                                    <!-- Fin Row-->
                                    <!-- Row-->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="p-4">
                                                <div class="form-group">
                                                    <label>No.Inventario</label>
                                                    <input type="text" class="form-control form-control-user" name="No.invnetario" id="motivo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Viende de tarjeta No.</label>
                                                    <input type="text" class="form-control form-control-user" name="no.tarjeta" id="motivo">
                                                </div>
                                                <div class="form-group">
                                                    <label>No.Inventario</label>
                                                    <input type="text" class="form-control form-control-user" name="No.invnetario" id="motivo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="p-4">
                                                <div class="form-group">
                                                    <label>Descripción del bien</label>
                                                    <textarea class="form-control form-control-user" name="tca_descripcion" rows="5" cols="40" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>No.Inventario</label>
                                                    <input type="text" class="form-control form-control-user" name="No.invnetario" id="motivo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin -->
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary text-white btn-lg">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Container fluid  -->
                    <!-- ============================================================== -->

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
            <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?= base_url('assets/extra-libs/sparkline/sparkline.js') ?>"></script>
            <!--Wave Effects -->
            <script src="<?= base_url('assets/dist/js/waves.js') ?>"></script>
            <!--Menu sidebar -->
            <script src="<?= base_url('assets/dist/js/sidebarmenu.js') ?>"></script>
            <!--Custom JavaScript -->
            <script src="<?= base_url('assets/dist/js/custom.min.js') ?>"></script>
            <!--This page JavaScript -->
        </body>

        </html>
    <?php endif; ?>
<?php endif; ?>