<?php
$session = session();
date_default_timezone_set("America/Guatemala");
if (!isset($_SESSION['logged_in'])) : ?>
    <?= $this->include('Views/Errors') ?>
<?php endif; ?>
<?php if (isset($_SESSION['per_idcar'])) :
    $per_idcar = $_SESSION['per_idcar'];
    $per_encargado = $_SESSION['per_id'];
    if ($per_idcar != 2) : ?>
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
                <aside class="left-sidebar" data-sidebarbg="skin5">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav">
                            <ul id="sidebarnav">
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('InicioCompras') ?>" aria-expanded="false">
                                        <i class="mdi mdi-av-timer"></i>
                                        <span class="hide-menu">Menu</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('ListarComprar') ?>" aria-expanded="false">
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
                                <h4 class="page-title">Ingreso de información unidad de compras</h4>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="d-flex align-items-center justify-content-end">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="#">Compras</a>
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

                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger " role="alert"><?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('msj')) : ?>
                            <div class="alert alert-success " role="alert"><?= session()->getFlashdata('msj') ?>
                            </div>
                        <?php endif; ?>
                        <!-- ============================================================== -->
                        <!-- Formulario Compras -->
                        <!-- ============================================================== -->

                        <div class="card text-center">
                            <div class="card-body">
                                <button class="btn btn-sm btn-success text-white fs-4" data-bs-toggle="modal" data-bs-target="#agregarcompra">Agregar compra</i></button>
                            </div>
                        </div>
                        <div class="modal fade" id="agregarcompra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Solicitud de Compras</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" id="miFormualrio" action="<?= base_url(route_to('registrarcompra')) ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <!-- columna 1 -->
                                                <div class="col-lg-6">
                                                    <div class="p-4">
                                                        <h1 class="h4 text-gray-900 mb-4">Solicitud de compra de bienes, suministros y servicios</h1>
                                                        <br />
                                                        <div class="form-group">
                                                            <label>Cod. Formulario</label>
                                                            <input type="text" class="form-control form-control-user" name="tco_cod_formulario" id="tco_cod_formulario" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Version</label>
                                                            <input type="number" class="form-control form-control-user" name="tco_version" id="tco_version" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fecha</label>
                                                            <input type="date" name="tco_fecha_ingreso" id="tco_fecha_ingreso" class="form-control form-control-user" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Lugar</label>
                                                            <input type="text" class="form-control form-control-user" name="tco_lugar" id="tco_lugar" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Numero</label>
                                                            <input type="text" class="form-control form-control-user" name="tco_numero" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Unidad Administrativa</label>
                                                            <input type="text" class="form-control form-control-user" name="tco_unidad_admin" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fin columna 1 -->
                                                <!-- columna 2 -->
                                                <div class="col-lg-6">
                                                    <div class="p-5">
                                                        <div class="text-center">
                                                            <h1 class="h4 text-gray-900 mb-4">Constancia de ingreso a almacén y e inventario</h1>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Formulario 1-H Serie D Número</label>
                                                            <input type="text" name="tco_formulario" min="0" step="1" class="form-control form-control-user" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dependencia</label>
                                                            <input type="text" name="tco_dependencia" class="form-control form-control-user" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Programa</label>
                                                            <input type="text" name="tco_programa" class="form-control form-control-user" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Proveedor</label>
                                                            <input type="text" name="tco_proveedor" class="form-control form-control-user" required />
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <label>Empleado Encargado</label>
                                                            <?php foreach ($usuarios as $persona) : ?>
                                                                <?php if ($persona['per_id'] == $per_encargado) : ?>
                                                                    <input type="text" class="form-control form-control-user" value="<?= $persona['per_nombre'] . ' ' . $persona["per_apellido"] ?>" disabled />
                                                                    <input type="hidden" name="tco_idper_registro" class="form-control form-control-user" value="<?= $per_encargado ?>" />
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Estado de la transaccion</label>
                                                            <?php foreach ($est_transaccion as $transacciones) : ?>
                                                                <?php if ($transacciones['etr_id'] == 4) : ?>
                                                                    <input type="hidden" name="tco_idetr" value="<?= $transacciones['etr_id'] ?>">
                                                                    <input type="text" class="form-control form-control-user" value="<?= $transacciones['etr_nombre'] ?>" disabled>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>No.Factura</label>
                                                            <input type="text" class="form-control form-control-user" name="tco_numero_factura" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Columna 2 -->
                                            <!-- columna 3 -->
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Codigo de Renglón</label>
                                                        <input type="number" name="tco_cod_renglon" class="form-control form-control-user" required />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Folio Libro Almacén</label>
                                                        <input type="number" name="tco_folio_almacen" class="form-control form-control-user" required />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Nomenclatura de cuenta</label>
                                                        <input type="number" name="tco_nomen_cuenta" min="0" step="1" class="form-control form-control-user" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin columna 3 -->
                                            <div class="row">
                                                <!-- Columan 4 -->
                                                <div class="col-lg-6">
                                                    <div class="p-4">
                                                        <div class="form-group">
                                                            <label>Nombre quien firma almacén</label>
                                                            <input type="text" name="tco_Fnombre_almacen" class="form-control form-control-user" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nombre quien firma depto. Administrativo</label>
                                                            <input type="text" name="tco_Fnombre_depto" class="form-control form-control-user" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nombre quien firma iventarios</label>
                                                            <input type="text" name="tco_Fnombre_inventario" class="form-control form-control-user" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Observación de Inventario</label>
                                                            <textarea class="form-control" name="tco_ob_invetario" name="comentarios" rows="4" cols="50" disabled></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fin de la columan4 -->
                                                <!-- Columna 5 -->
                                                <div class="col-lg-6">
                                                    <div class="p-4">
                                                        <div class="form-group">
                                                            <label for="file1" class="fs-4">Adjunte documento Solicitud de compra</label>
                                                            <div class="input-group">
                                                                <input type="file" name="tco_doc1" class="form-control-lg bg-success text-white" required />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="file2" class="fs-4">Adjunte Constancia</label>
                                                            <div class="input-group">
                                                                <input type="file" name="tco_doc2" class="form-control-lg bg-success text-white" required />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="file3" class="fs-4">Adjunte Factura</label>
                                                            <div class="input-group">
                                                                <input type="file" name="tco_doc3" class="form-control-lg bg-success text-white" required />
                                                            </div>
                                                            <div>
                                                                <br />
                                                                <div class="col-md-3">
                                                                    <input type="submit" value="Guardar" class="btn btn-success btn-block btn-lg text-white fs-4">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fin de la comulna 5 -->
                                            </div><!--row-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabla de registro -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tabla de registro de compra</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="table-success">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Código de formulario</th>
                                                    <th scope="col">Formulario 1-H</th>
                                                    <th scope="col" colspan="2">Action</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador = 1;
                                                foreach ($listaesperas as $listaespera) : ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $contador; ?></th>
                                                        <td><?= $listaespera->tco_cod_formulario ?></td>
                                                        <td><?= $listaespera->tco_formulario ?></td>
                                                        <td><button class="btn btn-sm btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnAgregar<?= $listaespera->tco_id ?>">Agregar Activo</button>
                                                            <!-- Modal Ingreso-->
                                                            <div class="modal fade" id="btnAgregar<?= $listaespera->tco_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Ingreso de activos</h5>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <button class="btn btn-sm btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnAgregarActivo">Crear Activo</button>
                                                                            </div>
                                                                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('registrar_transaccioncompraactivo')) ?>">
                                                                                <input type="hidden" value="<?= $listaespera->tco_id ?>" />
                                                                                <div class="form-group">
                                                                                    <label>Listado de Activos</label>
                                                                                    <select name="tca_idact" class="form-control form-control-user mr-3">
                                                                                        <?php foreach ($listadoactivos as $listadoactivo) : ?>
                                                                                            <option value="<?= $listadoactivo['act_id'] ?>"><?= $listadoactivo['act_nombre'] ?></option>
                                                                                        <?php endforeach; ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Cantidad</label>
                                                                                    <input type="text" name="tca_cantidad" class="form-control form-control-user" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Precio por unidad</label>
                                                                                    <input type="text" name="tca_precio_unidad" class="form-control form-control-user" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Valor total</label>
                                                                                    <input type="text" name="tca_valor_total" class="form-control form-control-user" required>
                                                                                    <input type="hidden" name="tca_idtco" value="<?= $listaespera->tco_id ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Descripcion del bien / Articula </label>
                                                                                    <textarea class="form-control form-control-user" name="tca_descripcion" rows="4" cols="50" required></textarea>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                                    <button type="submit" class="btn btn-primary" id="IngresoActivos">Agregar</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!---->
                                                        </td>
                                                        <td><button class="btn btn-sm btn-success text-white" data-bs-toggle="modal" data-bs-target="#btnMostrar<?= $listaespera->tco_id ?>">Mostrar Activo</button></td>
                                                        <td>
                                                            <form method="POST" action="<?= base_url(route_to('actualizar_estadotco')) ?>">
                                                                <?php foreach ($est_transaccion as $est_transacciones) :
                                                                    if ($est_transacciones['etr_nombre'] == 'Pendiente') {
                                                                ?>
                                                                        <input type="hidden" name="tco_idetr" value="<?= $est_transacciones['etr_id'] ?>" />
                                                                        <input type="hidden" name="tco_id" value="<?= $listaespera->tco_id ?>" />
                                                                <?php };
                                                                endforeach; ?>
                                                                <button type="submit" class="btn btn-sm btn-primary">Enviar a Inventario</button>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    $contador++;
                                                endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php $contador = 0; ?>
                                </div>
                            </div>
                        </div>
                        <!-- Fin de la tabla -->
                        <!-- Creación del activo -->
                        <div class="modal fade" id="btnAgregarActivo" tabindex="-1" aria-labelledby="MostrarActivo" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Creación de Activo</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('registrar_activo')) ?>">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" name="act_nombre" class="form-control form-control-user" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Fecha</label>
                                                <input type="date" name="act_fecha_ingreso" id="tco_fecha_ingreso" class="form-control form-control-user" required />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary" id="IngresoActivos">Agregar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin de creación de activo -->
                        <?php
                        foreach ($listaesperas as $listaespera) : ?>
                            <!-- Mostrar activos -->
                            <div class="modal fade" id="btnMostrar<?= $listaespera->tco_id ?>" tabindex="-1" aria-labelledby="MostrarActivo" aria-hidden="true">
                                <?php $var = $listaespera->tco_id ?>
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Activos</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="table-resposive">
                                                <table class="table">
                                                    <thead class="table-succes">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Cantidad</th>
                                                            <th scope="col">Precio por Unidad</th>
                                                            <th scope="col">Valor Total</th>
                                                            <th scope="col">Descripcion del bien / Articulo</th>
                                                            <th scope="col">Accion</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $contador = 1;
                                                        foreach ($listadotcotcaactiacesperas as $listadotcotcaactiacespera) :
                                                            if ($var == $listadotcotcaactiacespera->tca_idtco) : ?>
                                                                <tr>
                                                                    <td scope="row"><?= $contador ?> </td>
                                                                    <td><?= $listadotcotcaactiacespera->act_nombre ?> </td>
                                                                    <td><?= $listadotcotcaactiacespera->tca_cantidad ?> </td>
                                                                    <td><?= $listadotcotcaactiacespera->tca_precio_unidad ?></td>
                                                                    <td><?= $listadotcotcaactiacespera->tca_valor_total ?></td>
                                                                    <td><?= $listadotcotcaactiacespera->tca_descripcion ?></td>
                                                                    <td><button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#updateActivo<?= $listadotcotcaactiacespera->tca_id ?>"><i class="mdi mdi-account-edit text-white"></i></button>
                                                                    </td>
                                                                    <?php foreach ($listainventarioactivos as $listainventarioactivo) {
                                                                        if ($listadotcotcaactiacespera->tca_id == $listainventarioactivo['iac_idtca']) { ?>
                                                                            <td><button class="btn btn-sm btn-success text-white" data-bs-toggle="modal" disabled>Desplegar activo</i></button>
                                                                            </td>
                                                                        <?php break;
                                                                        } else { ?>
                                                                            <td><button class="btn btn-sm btn-success text-white" data-bs-toggle="modal" data-bs-target="#desplegar<?= $listadotcotcaactiacespera->tca_id ?>">Desplegar activo</i></button>
                                                                            </td>
                                                                    <?php break;
                                                                        }
                                                                    } ?>
                                                                </tr>

                                                        <?php
                                                                $contador++;
                                                            endif;
                                                        endforeach;
                                                        $contador = 0;
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin de Mostrar activos -->
                        <?php endforeach; ?>
                        <?php foreach ($listadotcaacts as $listadotcaact) : ?>
                            <!-- Modificación del activo -->
                            <div class="modal fade" id="updateActivo<?= $listadotcaact->tca_id ?>" tabindex="-1" aria-labelledby="ModificacionActivo">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Actualización de Activo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('actualizar_transaccioncompraactivo')) ?>">
                                                <input type="hidden" name="tca_id" value="<?= $listadotcaact->tca_id ?>" />
                                                <input type="hidden" name="tca_idtco" value="<?= $listadotcaact->tca_idtco ?>" />
                                                <div class="form-group">
                                                    <label>Listado de Activos</label>
                                                    <select name="tca_idact" class="form-control form-control-user mr-3">
                                                        <?php foreach ($listadoactivos as $listadoactivo) :
                                                            if ($listadotcaact->tca_idact == $listadoactivo['act_id']) : ?>
                                                                <option value="<?= $listadoactivo['act_id'] ?>" selected><?= $listadoactivo['act_nombre'] ?></option>
                                                            <?php else : ?>
                                                                <option value="<?= $listadoactivo['act_id'] ?>"><?= $listadoactivo['act_nombre'] ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Cantidad</label>
                                                    <input type="text" name="tca_cantidad" class="form-control form-control-user" value="<?= $listadotcaact->tca_cantidad ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio por unidad</label>
                                                    <input type="text" name="tca_precio_unidad" class="form-control form-control-user" value="<?= $listadotcaact->tca_precio_unidad ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Valor total</label>
                                                    <input type="text" name="tca_valor_total" class="form-control form-control-user" value="<?= $listadotcaact->tca_valor_total ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripcion del bien / Articula </label>
                                                    <textarea class="form-control form-control-user" name="tca_descripcion" rows="4" cols="50" required><?= $listadotcaact->tca_descripcion ?></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin MOdificación de activo -->
                        <?php endforeach; ?>
                        <!-- Desplegar  activo -->
                        <?php foreach ($listadotcaacts as $listadotcaact) :  ?>
                            <div class="modal fade" id="desplegar<?= $listadotcaact->tca_id ?>" tabindex="-1" aria-labelledby="ModificacionActivo">
                                <div class="modal-dialog  modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Agregar Descripción</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body d-flex flex-wrap">
                                            <form class="form-horizontal form-material mx-2" method="POST" action="<?= base_url(route_to('registrar_masivocomprasinventarioactivov2')) ?>">

                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre</th>
                                                            <th>Descripción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <input type="hidden" name="tca_id" value="<?= $listadotcaact->tca_id ?>">
                                                        <?php $contador = 1;
                                                        for ($i = 0; $i < $listadotcaact->tca_cantidad; $i++) : ?>
                                                            <tr>
                                                                <td scope="row"><?= $contador ?></td>
                                                                <td><input type="text" class="form-control form-control-user" value="<?= $listadotcaact->act_nombre ?>" required disabled></td>
                                                                <td><textarea class="form-control form-control-user" name="iac_descripcion[]" rows="4" cols="50" required></textarea>
                                                            </tr>


                                                        <?php $contador++;
                                                        endfor; ?>
                                                    </tbody>
                                                </table>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary" id="IngresoActivos">Agregar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- Fin Desplegar activo -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Container fluid  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    <footer class="footer text-center">
                        Todos los Derechos Reservados - INAB</a>.
                    </footer>
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
            <script src="<?= base_url('assets/js/ValidarCampoCompra.js') ?>"></script>
            <!--This page JavaScript -->

        </body>

        </html>
    <?php endif; ?>
<?php endif; ?>