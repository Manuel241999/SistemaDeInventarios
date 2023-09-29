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
                                        <span class="hide-menu">Home</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('ListarCompraInventario') ?>" aria-expanded="false">
                                        <i class="mdi mdi-av-timer"></i>
                                        <span class="hide-menu">Registro Compras</span>
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
                    <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- COLUM ACTIVE 1-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-0">Activo</h4>
                                <h2 class="font-light">50 <span class="font-16 text-success font-medium">+23%</span>
                                </h2>
                                <div class="mt-4">
                                    <div class="row text-center">
                                        <div class="col-6 border-right">
                                            <h4 class="mb-0">58%</h4>
                                            <span class="font-14 text-muted">Ingresado</span>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="mb-0">42%</h4>
                                            <span class="font-14 text-muted">Saliente</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-0">Activo</h4>
                                <h2 class="font-light">50 <span class="font-16 text-success font-medium">+23%</span>
                                </h2>
                                <div class="mt-4">
                                    <div class="row text-center">
                                        <div class="col-6 border-right">
                                            <h4 class="mb-0">58%</h4>
                                            <span class="font-14 text-muted">Ingresado</span>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="mb-0">42%</h4>
                                            <span class="font-14 text-muted">Saliente</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUM ACTIVE 2-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-0">Activo</h4>
                                <h2 class="font-light">50 <span class="font-16 text-success font-medium">+23%</span>
                                </h2>
                                <div class="mt-4">
                                    <div class="row text-center">
                                        <div class="col-6 border-right">
                                            <h4 class="mb-0">58%</h4>
                                            <span class="font-14 text-muted">Ingresado</span>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="mb-0">42%</h4>
                                            <span class="font-14 text-muted">Saliente</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-0">Activo</h4>
                                <h2 class="font-light">50 <span class="font-16 text-success font-medium">+23%</span>
                                </h2>
                                <div class="mt-4">
                                    <div class="row text-center">
                                        <div class="col-6 border-right">
                                            <h4 class="mb-0">58%</h4>
                                            <span class="font-14 text-muted">Ingresado</span>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="mb-0">42%</h4>
                                            <span class="font-14 text-muted">Saliente</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUM ACTIVE 3-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-0">Activo</h4>
                                <h2 class="font-light">50 <span class="font-16 text-success font-medium">+23%</span>
                                </h2>
                                <div class="mt-4">
                                    <div class="row text-center">
                                        <div class="col-6 border-right">
                                            <h4 class="mb-0">58%</h4>
                                            <span class="font-14 text-muted">Ingresado</span>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="mb-0">42%</h4>
                                            <span class="font-14 text-muted">Saliente</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-0">Activo</h4>
                                <h2 class="font-light">50 <span class="font-16 text-success font-medium">+23%</span>
                                </h2>
                                <div class="mt-4">
                                    <div class="row text-center">
                                        <div class="col-6 border-right">
                                            <h4 class="mb-0">58%</h4>
                                            <span class="font-14 text-muted">Ingresado</span>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="mb-0">42%</h4>
                                            <span class="font-14 text-muted">Saliente</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Listado de Activos</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ACTIVO</th>
                                            <th class="border-top-0">STATUS</th>
                                            <th class="border-top-0">FECHA INGRESO</th>
                                            <th class="border-top-0">FACTURA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="txt-oflo">Activo</td>
                                            <td><span class="label label-success label-rounded">ACTIVO</span> </td>
                                            <td class="txt-oflo">Julio 27, 2023</td>
                                            <td><span class="font-medium">01234</span></td>
                                        </tr>
                                        <tr>

                                            <td class="txt-oflo">Activo</td>
                                            <td><span class="label label-info label-rounded">TRANSFERIDO</span></td>
                                            <td class="txt-oflo">Julio 27, 2023</td>
                                            <td><span class="font-medium">01234</span></td>
                                        </tr>
                                        <tr>

                                            <td class="txt-oflo">Activo</td>
                                            <td><span class="label label-purple label-rounded">PENDIENTE</span></td>
                                            <td class="txt-oflo">Julio 27, 2023</td>
                                            <td><span class="font-medium">01234</span></td>
                                        </tr>
                                        <tr>

                                            <td class="txt-oflo">Activo</td>
                                            <td><span class="label label-danger label-rounded">BAJA</span> </td>
                                            <td class="txt-oflo">Julio 27, 2023</td>
                                            <td><span class="font-medium">01234</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Procesos Recientes</h4>
                            </div>
                            <div class="comment-widgets" style="height:430px;">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2">
                                        <div class="p-2">
                                            <img src="<?=base_url('assets/images/users/2.jpg')?>" alt="user" width="50"
                                                class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Usuario Emisor</h6>
                                        <span class="mb-3 d-block">Descripcion del proceso.</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Julio 27, 2023</span>
                                            <span class="label label-rounded label-primary">Pendiente</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2">
                                        <div class="p-2">
                                            <img src="<?=base_url('assets/images/users/3.jpg')?>" alt="user" width="50"
                                                class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Usuario Emisor</h6>
                                        <span class="mb-3 d-block">Descripcion del proceso.</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Julio 27, 2023</span>
                                            <span class="label label-rounded label-success">Finalizado</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2">
                                        <div class="p-2">
                                            <img src="<?=base_url('assets/images/users/4.jpg')?>" alt="user" width="50"
                                                class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Usuario Emisor</h6>
                                        <span class="mb-3 d-block">Descripcion del proceso.</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Julio 27, 2023</span>
                                            <span class="label label-rounded label-danger">Rechazado</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Comment Row -->
                                 <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2">
                                        <div class="p-2">
                                            <img src="<?=base_url('assets/images/users/5.jpg')?>" alt="user" width="50"
                                                class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Usuario Emisor</h6>
                                        <span class="mb-3 d-block">Descripcion del proceso.</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Julio 27, 2023</span>
                                            <span class="label label-rounded label-danger">Pendiente</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Moviemiento de Activos</h4>
                            </div>
                            <div class="comment-widgets" style="height:430px;">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2">
                                        <h6 class="font-medium">Activo 1</h6>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Usuario</h6>
                                        <span class="mb-3 d-block">Descripcion del movimiento.</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Julio 27, 2023</span>
                                            <span class="label label-rounded label-primary">Pendiente</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2">
                                        <h6 class="font-medium">Activo 1</h6>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Usuario</h6>
                                        <span class="mb-3 d-block">Descripcion del movimiento.</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Julio 27, 2023</span>
                                            <span class="label label-rounded label-success">Finalizado</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2">
                                        <h6 class="font-medium">Activo 1</h6>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Usuario</h6>
                                        <span class="mb-3 d-block">Descripcion del movimiento.</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Julio 27, 2023</span>
                                            <span class="label label-rounded label-danger">Rechazado</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Comment Row -->
                                 <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2">
                                        <h6 class="font-medium">Activo 1</h6>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Usuario</h6>
                                        <span class="mb-3 d-block">Descripcion del movimiento.</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">Julio 27, 2023</span>
                                            <span class="label label-rounded label-primary">Pendiente</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-check"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
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