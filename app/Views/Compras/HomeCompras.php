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
        <title>Unidad de Compras - INAB</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon.png') ?>">
        <!-- Custom CSS -->
        <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?= base_url('assets/css/style.min.css') ?>" rel="stylesheet">
        <!--<link href="http://localhost:41062/www/app/Views/Inventario/dist/css/style.min.css'" rel="stylesheet">-->

    </head>

    <body>

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
            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header" data-logobg="skin5">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                            <i class="ti-menu ti-close"></i>
                        </a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <div class="navbar-brand">
                            <a href="<?= base_url() ?>" class="logo">
                                <!-- Logo icon -->
                                <b class="logo-icon">
                                    <!-- Light Logo icon -->
                                    <img src="<?= base_url('assets/images/logo-light-icon.png') ?>" alt="homepage" class="light-logo" />
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                                    <!-- Light Logo text -->
                                    <img src="<?= base_url('assets/images/logo-light-text.png') ?>" class="light-logo" alt="homepage" />
                                </span>
                            </a>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->

                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" style="background:#98bf64" data-navbarbg="skin6">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-start me-auto">
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-end">
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <span>Compras</span>
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url('assets/images/users/1.jpg') ?>" alt="user" class="rounded-circle" width="31">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                        Perfil</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-bell me-1 ms-1"></i>
                                        Notificaciones</a>
                                    <a class="dropdown-item" href="<?= base_url(route_to('logout')) ?>"><i class="ti-close me-1 ms-1"></i>
                                        Cerrar Sesión</a>
                                </ul>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
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
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('InicioCompras') ?>" aria-expanded="false">
                                    <i class="mdi mdi-av-timer"></i>
                                    <span class="hide-menu">Home</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('FormularioC') ?>" aria-expanded="false">
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
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">

                    <!-- ============================================================== -->
                    <!-- Ravenue - page-view-bounce rate -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Listado general de unidad de Compras</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="border-top-0">#</th>
                                                <th class="border-top-0">Código de Formulario</th>
                                                <th class="border-top-0">Formulario 1-H</th>
                                                <th class="border-top-0">Estado</th>
                                                <th class="border-top-0">Observaciones</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            /*$contador =1;
                                            foreach($variable as $compras):
                                            */ ?>
                                            <tr>
                                                <td class="txt-oflo"><?php //echo $contador;?> 1</td>
                                                <td class="txt-oflo"><?php //$varaible['tco_id']?>84-85</td>
                                                <td class="txt-oflo"><?php //$varaible['tco_formualrio']?>DG45</td>
                                                <?php //if($varaible['tco_idetr']==1) 
                                                ?>
                                                <td><span class="label label-success label-rounded">Aprobado</span> </td>
                                                <?php // }else{ 
                                                ?>
                                                <!-- <td><span class="label label-danger  label-rounded">Rechazado</span> </td> -->
                                                <?php //}
                                                ?>
                                                <td class="txt-oflo"><?php //$variable['tco_observacion']?>identificar</td>
                                            </tr>
                                            <?php
                                            /*$contador++;
                                            endforeach;*/
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php //$contador=0;
                                ?>
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
                                    <h4 class="card-title">Documentación Aprobada</h4>
                                </div>
                                <div class="comment-widgets" style="height:430px;">
                                    <!-- Comment Row -->
                                    
                                    <?php //foreach($variable2 as $estado_aprobado): 
                                    ?>
                                    <?php //if ($variable2['tco_idetr '] == 1) { ?>
                                        
                                        <div class="d-flex flex-row comment-row mt-0">
                                            <div class="p-2">
                                                <div class="p-2">
                                                    <img src="<?=base_url('assets/images/users/5.jpg')?>" alt="user" width="50"
                                                        class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="comment-text w-100">
                                                <h6 class="font-medium">Codigo Formulario: <?php //$varaible['tco_id']?> 84-85</h6>
                                                <h6 class="font-medium">Formulario  1-H: <?php //$varaible['tco_formualrio']?> DG45 </h6>
                                                <span class="mb-3 d-block"><?php //$variable['tco_observacion']?> Se necesita revisar las firmas del documento factura</span>
                                                <div class="comment-footer">
                                                    <span class="label label-success label-rounded">Aprobado</span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php // } ?>
                                    <?php //endforeach; 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Documentación Rechazada</h4>
                                </div>
                                <div class="comment-widgets" style="height:430px;">
                                <?php //foreach($variable2 as $estado_aprobado): 
                                    ?>
                                    <?php //if ($variable2['tco_idetr '] == 0) { ?>
                                        
                                        <div class="d-flex flex-row comment-row mt-0">
                                            <div class="p-2">
                                                <div class="p-2">
                                                    <img src="<?=base_url('assets/images/users/5.jpg')?>" alt="user" width="50"
                                                        class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="comment-text w-100">
                                                <h6 class="font-medium">Codigo Formulario: <?php //$varaible['tco_id']?> 84-85</h6>
                                                <h6 class="font-medium">Formulario  1-H: <?php //$varaible['tco_formualrio']?> DG45 </h6>
                                                <span class="mb-3 d-block"><?php //$variable['tco_observacion']?> Se necesita revisar las firmas del documento factura</span>
                                                <div class="comment-footer">
                                                    <span class="label label-danger label-rounded">Rechazada</span>
                                                    <td><button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#updateuser<?//= $usuario['per_id'] ?>"><i class="mdi mdi-account-edit text-white"></i></button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    <?php // } ?>
                                    <?php //endforeach; 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Recent comment and chats -->
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