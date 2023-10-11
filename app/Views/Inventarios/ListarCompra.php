<?php
$session = session();
date_default_timezone_set("America/Guatemala");
if (!isset($_SESSION['logged_in'])) : ?>
    <?= $this->include('Views/Errors') ?>
<?php endif; ?>
<?php if (isset($_SESSION['per_idcar'])) :
    $per_idcar = $_SESSION['per_idcar'];
    $per_encargado = $_SESSION['per_id'];
    if ($per_idcar != 3) : ?>
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
            <title>Registro de Compras- INAB</title>
            <!-- Favicon icon -->
            <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon.png') ?>">
            <!-- Custom CSS -->
            <link href="<?= base_url('assets/libs/chartist/dist/chartist.min.css') ?>" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?= base_url('assets/css/style.min.css') ?>" rel="stylesheet">
            <link href="<?= base_url('assets/css/styles.css') ?>">
            <!--<link href="http://localhost:41062/www/app/Views/Inventario/dist/css/style.min.css'" rel="stylesheet">-->
            <script src="https://kit.fontawesome.com/f4ec03a2c3.js" crossorigin="anonymous"></script>


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
                                <a class="logo">
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
                                    <span>Compras <?= $_SESSION['per_correo'] . $_SESSION['per_iddep']; ?></span>
                                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="<?= base_url('assets/images/users/1.jpg') ?>" alt="user" class="rounded-circle" width="31">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                            Perfil</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                                            Accesos</a>
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
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('') ?>" aria-expanded="false">
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
                        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Page wrapper  -->
                        <!-- ============================================================== -->
                        <div class="container-fluid">
                            <?php if (session()->getFlashdata('error')) : ?>
                                <div class="alert alert-danger " role="alert"><?= session()->getFlashdata('error') ?>
                                </div>
                            <?php endif; ?>

                            <?php if (session()->getFlashdata('msj')) : ?>
                                <div class="alert alert-success " role="alert"><?= session()->getFlashdata('msj') ?>
                                </div>
                            <?php endif; ?>
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
                                                        <th class="border-top-0">Status</th>
                                                        <th class="border-top-0">Observaciones de Inventario</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $contador = 1;
                                                    foreach ($ListadoPendientes as $ListadoPendiente) :
                                                    ?>
                                                        <tr>
                                                            <td class="txt-oflo"><?php echo $contador; ?></td>
                                                            <td class="txt-oflo"><?= $ListadoPendiente->tco_cod_formulario ?></td>
                                                            <td class="txt-oflo"><?= $ListadoPendiente->tco_formulario ?></td>
                                                            <td class="txt-oflo"><?= $ListadoPendiente->etr_nombre ?></td>
                                                            <td class="txt-oflo"><?= $ListadoPendiente->tco_ob_inventario ?></td>
                                                            <td><button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#verificarCompra<?= $ListadoPendiente->tco_id ?>"><i class="mdi mdi-account-edit text-white"></i></button></td>
                                                            <td></td>
                                                        </tr>
                                                    <?php
                                                        $contador++;
                                                    endforeach;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php $contador = 0;
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <?php foreach ($ListadoPendientes as $ListadoPendiente) : ?>
                                <!-- Modal de corrección de compra -->
                                <div class="modal fade" id="verificarCompra<?= $ListadoPendiente->tco_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Solicitud de Compras</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" id="miFormualrio" action="<?= base_url(route_to('ActualizarCompraEstado')) ?>" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <!--columna 1 -->
                                                        <div class="col-lg-6">
                                                            <input type="hidden" name="tco_id" value="<?= $ListadoPendiente->tco_id ?>">
                                                            <div class="p-4">
                                                                <h1 class="h4 text-gray-900 mb-4">Solicitud de compra de bienes, suministros y servicios</h1>
                                                                <div class="form-group">
                                                                    <label>Cod. Formulario</label>
                                                                    <input type="text" class="form-control form-control-user" name="tco_cod_formulario" id="tco_cod_formulario" value="<?= $ListadoPendiente->tco_cod_formulario ?>" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Version</label>
                                                                    <input type="number" class="form-control form-control-user" name="tco_version" id="tco_version" value="<?= $ListadoPendiente->tco_version ?>" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Fecha</label>
                                                                    <input type="date" name="tco_fecha_ingreso" id="tco_fecha_ingreso" class="form-control form-control-user" value="<?= $ListadoPendiente->tco_fecha_ingreso ?>" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Lugar</label>
                                                                    <input type="text" class="form-control form-control-user" name="tco_lugar" id="tco_lugar" value="<?= $ListadoPendiente->tco_lugar ?>" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Numero</label>
                                                                    <input type="text" class="form-control form-control-user" name="tco_numero" value="<?= $ListadoPendiente->tco_numero ?>" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Unidad Administrativa</label>
                                                                    <input type="text" class="form-control form-control-user" name="tco_unidad_admin" value="<?= $ListadoPendiente->tco_unidad_admin ?>" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Cantidad Autorizada</label>
                                                                    <input type="number" class="form-control form-control-user" name="tco_cantidad" value="" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Fin columna 1 -->
                                                        <!-- columna 2 -->
                                                        <div class="col-lg-6">
                                                            <div class="p-4">
                                                                <div class="text-center">
                                                                    <h1 class="h4 text-gray-900 mb-4">Constancia de ingreso a almacén y e inventario</h1>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Formulario 1-H Serie D Número</label>
                                                                    <input type="text" name="tco_formulario" min="0" step="1" class="form-control form-control-user" value="<?= $ListadoPendiente->tco_formulario ?>" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Dependencia</label>
                                                                    <input type="text" name="tco_dependencia" class="form-control form-control-user" value="<?= $ListadoPendiente->tco_dependencia ?>" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Programa</label>
                                                                    <input type="text" name="tco_programa" class="form-control form-control-user" value="<?= $ListadoPendiente->tco_programa ?>" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Proveedor</label>
                                                                    <input type="text" name="tco_proveedor" class="form-control form-control-user" value="<?= $ListadoPendiente->tco_proveedor ?>" disabled />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Empleado Encargado</label>
                                                                    <?php foreach ($usuarios as $persona) : ?>
                                                                        <?php if ($persona['per_id'] == $ListadoPendiente->tco_idper_registro) : ?>
                                                                            <input type="text" class="form-control form-control-user" value="<?= $persona['per_nombre'] . ' ' . $persona["per_apellido"] ?>" disabled />
                                                                            <input type="hidden" name="tco_idper_registro" class="form-control form-control-user" value="<?= $ListadoPendiente->tco_idper_registro ?>" />
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Estado de la transaccion</label>
                                                                    <select name="tco_idetr" class="form-control form-control-user">
                                                                        <?php foreach ($est_transaccion as $transacciones) : ?>
                                                                            <?php if ($transacciones['etr_id'] == 1 || $transacciones['etr_id'] == 2) : ?>
                                                                                <option value="<?= $transacciones['etr_id'] ?>"><?= $transacciones['etr_nombre'] ?></option>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Fin Columna 2 -->
                                                    <!-- columna 3 -->
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="number" name="tco_cod_reglon" class="form-control form-control-user" placeholder="Codigo de Renglón" value="" disabled />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="number" name="tco_folio_almacen" class="form-control form-control-user" placeholder="Folio Libro Almacén" value="<?= $ListadoPendiente->tco_folio_almacen ?>" disabled />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="number" name="tco_nomen_cuenta" min="0" step="1" class="form-control form-control-user" placeholder="Nomenclatura de cuenta" value="<?= $ListadoPendiente->tco_nomen_cuenta ?>" disabled />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Fin columna 3 -->
                                                    <!-- Columan 4 -->
                                                    <div class="form-group">
                                                        <textarea class="form-control form-control-user" name="tco_observacion" rows="4" cols="50" placeholder="Descripción del bien / Articulo" disabled></textarea>
                                                    </div>
                                                    <!-- Fin Columna 4 -->
                                                    <!-- columna 5 -->
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Listado de Activos de la Factura</h4>
                                                                </div>
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="border-top-0">#</th>
                                                                                <th class="border-top-0">Nombre</th>
                                                                                <th class="border-top-0">Cantidad</th>
                                                                                <th class="border-top-0">Precio por unidad</th>
                                                                                <th class="border-top-0">valor total</th>
                                                                                <th class="border-top-0">Descripción Activo</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $contador = 1;
                                                                            foreach ($ListadoPendientes as $ListadoPendiente) :
                                                                            ?>
                                                                                <tr>
                                                                                    <td class="txt-oflo"><?php echo $contador; ?></td>
                                                                                    <td class="txt-oflo"><?= $ListadoPendiente->tco_cod_formulario ?></td>
                                                                                    <td class="txt-oflo"><?= $ListadoPendiente->tco_formulario ?></td>
                                                                                    <td class="txt-oflo"><?= $ListadoPendiente->etr_nombre ?></td>
                                                                                    <td class="txt-oflo"><?= $ListadoPendiente->tco_ob_inventario ?></td>
                                                                                </tr>
                                                                            <?php
                                                                                $contador++;
                                                                            endforeach;
                                                                            ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <?php $contador = 0;
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="p-4">
                                                                <div class="form-group">
                                                                    <input type="text" name="tco_Fnombre_almacen" class="form-control form-control-user text-center" placeholder="Nombre quien firma almacén" value="" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="tco_Fnombre_depto" class="form-control form-control-user text-center" placeholder="Nombre quien firma depto. Administrativo" value="" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="tco_Fnombre_inventario" class="form-control form-control-user text-center" placeholder="Nombre quien firma inventarios" value="" disabled>
                                                                </div>
                                                           </div>
                                                        
                                                        </div>
                                                    </div>
                                                    <!-- Fin Columna 5 -->
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="tco_ob_inventario" id="tco_ob_inventario" rows="4" cols="50" placeholder="Observación de Inventario"></textarea>
                                                    </div>

                                                    <div class="modal-footer d-flex justify-content-around">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-primary text-white">Actualizar</button>
                                                    </div>
                                                </form>

                                                <!-- columna 6 -->
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="p-4 ml-30">
                                                            <button class="btn btn-success text-white btn-lg" data-bs-toggle="modal" data-bs-target="#btnDoc1<?= $ListadoPendiente->tco_id ?>">Descargar pdf ingreso solicitud de compra</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="p-4 ml-30">
                                                            <button class="btn btn-success text-white btn-lg" data-bs-toggle="modal" data-bs-target="#btnDoc2<?= $ListadoPendiente->tco_id ?>">Descargar pdf ingreso de constancio</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="p-4 ml-30">
                                                            <button class="btn btn-success text-white btn-lg" data-bs-toggle="modal" data-bs-target="#btnDoc3<?= $ListadoPendiente->tco_id ?>">Descargar pdf ingreso de factura</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fin Columna 6 -->
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!-- -->
                                <!-- Modales de Documento1 -->
                                <div class="modal fade" id="btnDoc1<?= $ListadoPendiente->tco_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Usuario.</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarcompradoc1')) ?>" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="file" name="tco_doc1" class="form-control-lg bg-success text-white">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-primary text-white">Actualizar</button>
                                                    </div>
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <!-- Modales de Documento2 -->
                                <div class="modal fade" id="btnDoc2<?= $ListadoPendiente->tco_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarcompradoc2')) ?>" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Usuario.</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="file" name="tco_doc2" class="form-control-lg bg-success text-white">
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
                                <!-- Modales de Documento3 -->
                                <div class="modal fade" id="btnDoc3<?= $ListadoPendiente->tco_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarcompradoc3')) ?>" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Usuario.</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="file" name="tco_doc3" class="form-control-lg bg-success text-white">
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
                                <!-- -->
                            <?php endforeach; ?>
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
                                            <h4 class="card-title">Documentación Aceptada</h4>
                                        </div>
                                        <div class="comment-widgets" style="height:430px;">
                                            <!-- Comment Row -->

                                            <?php foreach ($comprasaprobadas as $comprasaprobada) : ?>
                                                <!-- Listado de archivos aprovados -->
                                                <div class="d-flex flex-row comment-row mt-0">
                                                    <div class="p-2">
                                                        <div class="p-2">
                                                            <img src="<?= base_url('assets/images/users/5.jpg') ?>" alt="user" width="50" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">Codigo Formulario: <?= $comprasaprobada->tco_cod_formulario ?></h6>
                                                        <h6 class="font-medium">Formulario 1-H: <?= $comprasaprobada->tco_formulario ?></h6>
                                                        <span class="mb-3 d-block"><?= $comprasaprobada->tco_ob_inventario ?></span>
                                                        <div class="comment-footer">
                                                            <span class="label label-success label-rounded"><?= $comprasaprobada->etr_nombre ?></span>
                                                            <a class="btn btn-sm btn-success text-white " href="<?= base_url('IngresoTablaGeneral') ?>">Ingreso a Tabla General</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            <?php endforeach;
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Documentación Rechazada</h4>
                                        </div>
                                        <div class="comment-widgets" style="height:430px;">
                                            <?php foreach ($comprasrechazadas as $comprarechazada) : ?>
                                                <!-- Listado de archivos Rechazados -->
                                                <div class="d-flex flex-row comment-row mt-0">
                                                    <div class="p-2">
                                                        <div class="p-2">
                                                            <img src="<?= base_url('assets/images/users/5.jpg') ?>" alt="user" width="50" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">Codigo Formulario: <?= $comprarechazada->tco_cod_formulario ?></h6>
                                                        <h6 class="font-medium">Formulario 1-H: <?= $comprarechazada->tco_formulario ?></h6>
                                                        <span class="mb-3 d-block"><?= $comprarechazada->tco_ob_inventario ?></span>
                                                        <div class="comment-footer">
                                                            <span class="label label-danger label-rounded">Rechazado</span>
                                                            <?php $variableID =  $comprarechazada->tco_id ?>
                                                            <td><button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#updateCompra<?= $comprarechazada->tco_id ?>"><i class="mdi mdi-account-edit text-white"></i></button></td>
                                                            <td></td>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>

                                        <?php foreach ($comprasrechazadas as $comprarechazada) : ?>
                                            <!-- Modal de corrección de compra -->
                                            <div class="modal fade" id="updateCompra<?= $comprarechazada->tco_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Solicitud de Compras</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" id="miFormualrio" action="<?= base_url(route_to('Actualizarcompradata')) ?>" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <!--columna 1 -->
                                                                    <div class="col-lg-6">
                                                                        <input type="hidden" name="tco_id" value="<?= $comprarechazada->tco_id ?>">
                                                                        <div class="p-4">
                                                                            <h1 class="h4 text-gray-900 mb-4">Solicitud de compra de bienes, suministros y servicios</h1>
                                                                            <div class="form-group">
                                                                                <label>Cod. Formulario</label>
                                                                                <input type="text" class="form-control form-control-user" name="tco_cod_formulario" id="tco_cod_formulario" value="<?= $comprarechazada->tco_cod_formulario ?>" disabled />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Version</label>
                                                                                <input type="number" class="form-control form-control-user" name="tco_version" id="tco_version" value="<?= $comprarechazada->tco_version ?>" disabled />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Fecha</label>
                                                                                <input type="date" name="tco_fecha_ingreso" id="tco_fecha_ingreso" class="form-control form-control-user" value="<?= $comprarechazada->tco_fecha_ingreso ?>" disabled />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Lugar</label>
                                                                                <input type="text" class="form-control form-control-user" name="tco_lugar" id="tco_lugar" value="<?= $comprarechazada->tco_lugar ?>" disabled />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Numero</label>
                                                                                <input type="text" class="form-control form-control-user" name="tco_numero" value="<?= $comprarechazada->tco_numero ?>" disabled />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Unidad Administrativa</label>
                                                                                <input type="text" class="form-control form-control-user" name="tco_unidad_admin" value="<?= $comprarechazada->tco_unidad_admin ?>" disabled />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Cantidad Autorizada</label>
                                                                                <input type="number" class="form-control form-control-user" name="tco_cantidad" value="" disabled />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Fin columna 1 -->
                                                                    <!-- columna 2 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="p-4">
                                                                            <div class="text-center">
                                                                                <h1 class="h4 text-gray-900 mb-4">Constancia de ingreso a almacén y e inventario</h1>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Formulario 1-H Serie D Número</label>
                                                                                <input type="text" name="tco_formulario" min="0" step="1" class="form-control form-control-user" value="<?= $comprarechazada->tco_formulario ?>" disabled />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Dependencia</label>
                                                                                <input type="text" name="tco_dependencia" class="form-control form-control-user" value="<?= $comprarechazada->tco_dependencia ?>" disabled />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Programa</label>
                                                                                <input type="text" name="tco_programa" class="form-control form-control-user" value="<?= $comprarechazada->tco_programa ?>" disabled />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Proveedor</label>
                                                                                <input type="text" name="tco_proveedor" class="form-control form-control-user" value="<?= $comprarechazada->tco_proveedor ?>" disabled />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Empleado Encargado</label>
                                                                                <?php foreach ($usuarios as $persona) : ?>
                                                                                    <?php if ($persona['per_id'] == $comprarechazada->tco_idper_registro) : ?>
                                                                                        <input type="text" class="form-control form-control-user" value="<?= $persona['per_nombre'] . ' ' . $persona["per_apellido"] ?>" disabled />
                                                                                        <input type="hidden" name="tco_idper_registro" class="form-control form-control-user" value="<?= $comprarechazada->tco_idper_registro ?>" />
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; ?>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Estado de la transaccion</label>
                                                                                <select name="tco_idetr" class="form-control form-control-user">
                                                                                    <?php foreach ($est_transaccion as $transacciones) : ?>
                                                                                        <?php if ($transacciones['etr_id'] == 1 || $transacciones['etr_id'] == 2) : ?>
                                                                                            <option value="<?= $transacciones['etr_id'] ?>"><?= $transacciones['etr_nombre'] ?></option>
                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Fin Columna 2 -->
                                                                <!-- columna 3 -->
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                            <input type="number" name="tco_cod_reglon" class="form-control form-control-user" placeholder="Codigo de Renglón" value="" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                            <input type="number" name="tco_folio_almacen" class="form-control form-control-user" placeholder="Folio Libro Almacén" value="<?= $comprarechazada->tco_folio_almacen ?>" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                            <input type="number" name="tco_nomen_cuenta" min="0" step="1" class="form-control form-control-user" placeholder="Nomenclatura de cuenta" value="<?= $comprarechazada->tco_nomen_cuenta ?>" disabled />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Fin columna 3 -->
                                                                <!-- Columan 4 -->
                                                                <div class="form-group">
                                                                    <textarea class="form-control form-control-user" name="tco_observacion" rows="4" cols="50" placeholder="Descripción del bien / Articulo" disabled></textarea>
                                                                </div>
                                                                <!-- Fin Columna 4 -->
                                                                <!-- columna 5 -->
                                                                <div class="row">
                                                                <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Listado de Activos de la Factura</h4>
                                                                </div>
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="border-top-0">#</th>
                                                                                <th class="border-top-0">Nombre</th>
                                                                                <th class="border-top-0">Cantidad</th>
                                                                                <th class="border-top-0">Precio por unidad</th>
                                                                                <th class="border-top-0">valor total</th>
                                                                                <th class="border-top-0">Descripción Activo</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $contador = 1;
                                                                            foreach ($ListadoPendientes as $ListadoPendiente) :
                                                                            ?>
                                                                                <tr>
                                                                                    <td class="txt-oflo"><?php echo $contador; ?></td>
                                                                                    <td class="txt-oflo"><?= $ListadoPendiente->tco_cod_formulario ?></td>
                                                                                    <td class="txt-oflo"><?= $ListadoPendiente->tco_formulario ?></td>
                                                                                    <td class="txt-oflo"><?= $ListadoPendiente->etr_nombre ?></td>
                                                                                    <td class="txt-oflo"><?= $ListadoPendiente->tco_ob_inventario ?></td>
                                                                                </tr>
                                                                            <?php
                                                                                $contador++;
                                                                            endforeach;
                                                                            ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <?php $contador = 0;
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="p-4">
                                                                <div class="form-group">
                                                                    <input type="text" name="tco_Fnombre_almacen" class="form-control form-control-user text-center" placeholder="Nombre quien firma almacén" value="" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="tco_Fnombre_depto" class="form-control form-control-user text-center" placeholder="Nombre quien firma depto. Administrativo" value="" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="tco_Fnombre_inventario" class="form-control form-control-user text-center" placeholder="Nombre quien firma inventarios" value="" disabled>
                                                                </div>
                                                           </div>
                                                        
                                                        </div>
                                                                </div>
                                                                <!-- Fin Columna 5 -->
                                                                <div class="form-group">
                                                                    <textarea class="form-control" name="tco_ob_inventario" id="tco_ob_inventario" rows="4" cols="50" placeholder="Observación de Inventario"></textarea>
                                                                </div>
                                                                <div class="modal-footer d-flex justify-content-around">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="submit" class="btn btn-primary text-white">Actualizar</button>
                                                                </div>
                                                            </form>

                                                            <!-- columna 6 -->
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="p-4 ml-30">
                                                                        <button class="btn btn-success text-white btn-lg" data-bs-toggle="modal" data-bs-target="#btnDoc1<?= $comprarechazada->tco_id ?>">Ingreso Solicitud de compra</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="p-4 ml-30">
                                                                        <button class="btn btn-success text-white btn-lg" data-bs-toggle="modal" data-bs-target="#btnDoc2<?= $comprarechazada->tco_id ?>">Ingreso de Constancio</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="p-4 ml-30">
                                                                        <button class="btn btn-success text-white btn-lg" data-bs-toggle="modal" data-bs-target="#btnDoc3<?= $comprarechazada->tco_id ?>">Ingreso de Factura</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Fin Columna 6 -->
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <!-- -->
                                            <!-- Modales de Documento1 -->
                                            <div class="modal fade" id="btnDoc1<?= $comprarechazada->tco_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Usuario.</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarcompradoc1')) ?>" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <input type="file" name="tco_doc1" class="form-control-lg bg-success text-white">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="submit" class="btn btn-primary text-white">Actualizar</button>
                                                                </div>
                                                            </form>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modales de Documento2 -->
                                            <div class="modal fade" id="btnDoc2<?= $comprarechazada->tco_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarcompradoc2')) ?>" enctype="multipart/form-data">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Usuario.</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="file" name="tco_doc2" class="form-control-lg bg-success text-white">
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
                                            <!-- Modales de Documento3 -->
                                            <div class="modal fade" id="btnDoc3<?= $comprarechazada->tco_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('Actualizarcompradoc3')) ?>" enctype="multipart/form-data">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Usuario.</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="file" name="tco_doc3" class="form-control-lg bg-success text-white">
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
                                            <!-- -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>


                            </div>
                            <!-- ============================================================== -->
                            <!-- Recent comment and chats -->
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
                    <script src="<?= base_url('assets/js/ValidarCampoCompra.js') ?>"></script>
                    <!--This page JavaScript -->

        </body>

        </html>
    <?php endif; ?>
<?php endif; ?>