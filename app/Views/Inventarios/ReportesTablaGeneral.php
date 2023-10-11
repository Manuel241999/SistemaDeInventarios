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
            <title>Unidad de Compras - INAB</title>
            <!-- Favicon icon -->
            <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon.png') ?>">
            <!-- Custom CSS -->
            <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
            <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?= base_url('assets/css/style.min.css') ?>" rel="stylesheet">
            <!--<link href="http://localhost:41062/www/app/Views/Inventario/dist/css/style.min.css'" rel="stylesheet">-->

        </head>

        <body class="bg-gray">
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
                                        <span class="hide-menu">Reportes</span>
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


                    <div class="container-fluid">
                        <div class="fs-2 text-center">
                            <p>Tabla General</p>
                        </div>
                        <form class="table table-success table-striped " action="enviar.php" method="post">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <fieldset>
                                        <input type="text" name="no_inventario" class="form-control  mb-2" placeholder="No. inventario">
                                        <input type="text" name="region" class="form-control mb-2" placeholder="Región">
                                        <input type="text" name="subregion" class="form-control  mb-2" placeholder="Subregión">
                                        <input type="text" name="cuenta" class="form-control  mb-2" placeholder="Cuenta">
                                        <input type="text" name="subcuenta" class="form-control  mb-2" placeholder="Subcuenta">
                                        <input type="text" name="cuenta" class="form-control  mb-2" placeholder="Cuenta SICOIN">
                                        <input type="text" name="subcuenta" class="form-control  mb-2" placeholder="DOC.SICOIN">
                                    </fieldset>
                                </div>

                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="number" name="cant" class="form-control  mb-2" placeholder="Cantidad">
                                        <input type="number" name="descripcion" class="form-control  mb-2" placeholder="Valor">
                                        <input type="text" name="descripcion" class="form-control  mb-2" placeholder="No. De Tarjeta">
                                        <input type="text" name="descripcion" class="form-control  mb-2" placeholder="Nombre del Responsable">
                                        <input type="text" name="descripcion" class="form-control  mb-2" placeholder="Status del Bien">
                                        <input type="text" name="descripcion" class="form-control  mb-2" placeholder="Folio">
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <fieldset>
                                        <input type="text" name="libro" class="form-control  mb-2" placeholder="Libro">
                                        <input type="text" name="no_factura" class="form-control  mb-2" placeholder="No. factura">
                                        <input type="text" name="num_ingreso" class="form-control  mb-2" placeholder="No. ingreso de Almacen">
                                        <input type="number" name="valor" class="form-control  mb-2" placeholder="Donaciones">
                                        <label for="">Fecha de Ingreso de Datos</label>
                                        <input type="date" name="no_factura" class="form-control  mb-2" placeholder="Fecha de Ingreso de Datos">
                                        <label for="">Fecha de Ingreso de Responsable</label>
                                        <input type="date" name="no_factura" class="form-control  mb-2" placeholder="Fecha de Ingreso de Responsable">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <textarea name="descripcion" class="form-control" rows="14" cols="50" placeholder="Descripción del Bien"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <textarea name="observaciones" class="form-control" rows="14" cols="50" placeholder="Observaciones"></textarea>
                                    </fieldset>
                                </div>
                            </div>

                                <div class="d-grid gap-2 col-3 mx-auto">
                                    <input class="btn btn-success btn-lg text-white rounder" type="submit" value="Agregar bien">
                                </div>

                        </form>
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