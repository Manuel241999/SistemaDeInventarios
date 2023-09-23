<?php
$session = session();
date_default_timezone_set("America/Guatemala");
if (!isset($_SESSION['logged_in'])) : ?>
    <p>No has iniciado sesión.</p>
    <a href="<?= base_url('/') ?>">Iniciar sesión</a>
<?php endif; ?>
<?php if (isset($_SESSION['per_idcar'])) :
    $per_id = $_SESSION['per_idcar'];
    if ($per_id != 2) : ?>
        <?php $session->destroy(); ?>
        <p>No tiene permisos para ingresar.
            ¡Se cerro su sesión!
        </p>
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
                                        <span class="hide-menu">Home</span>
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
                                                    <th class="border-top-0">Status</th>
                                                    <th class="border-top-0">Observaciones de Inventario</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador = 1;
                                                foreach ($Listarcompra as $listarcompras) :
                                                ?>
                                                    <tr>
                                                        <td class="txt-oflo"><?php echo $contador; ?></td>
                                                        <td class="txt-oflo"><?= $listarcompras['tco_cod_formulario'] ?></td>
                                                        <td class="txt-oflo"><?= $listarcompras['tco_formulario'] ?></td>
                                                        <?php if ($listarcompras['tco_idetr'] == 1) { ?>
                                                            <td><span class="label label-success label-rounded">Aprobado</span> </td>
                                                        <?php } elseif ($listarcompras['tco_idetr'] == 2) { ?>
                                                            <td><span class="label label-purple  label-rounded">Pendiente</span> </td>
                                                        <?php } elseif ($listarcompras['tco_idetr'] == 3) { ?>
                                                            <td><span class="label label-danger  label-rounded">Rechazado</span> </td>
                                                        <?php } ?>
                                                        <td class="txt-oflo"><?= $listarcompras['tco_ob_invetario'] ?></td>
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
                                        <h4 class="card-title">Documentación Pendiente</h4>
                                    </div>
                                    <div class="comment-widgets" style="height:430px;">
                                        <!-- Comment Row -->
                                        <!-- Listado de archivos aprovados -->
                                        <?php foreach ($Listarcompra as $Listarcompras) :
                                        ?>
                                            <?php if ($Listarcompras['tco_idetr'] == 2) { ?>
                                                <div class="d-flex flex-row comment-row mt-0">
                                                    <div class="p-2">
                                                        <div class="p-2">
                                                            <img src="<?= base_url('assets/images/users/5.jpg') ?>" alt="user" width="50" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">Codigo Formulario: <?= $Listarcompras['tco_cod_formulario'] ?></h6>
                                                        <h6 class="font-medium">Formulario 1-H: <?= $Listarcompras['tco_formulario'] ?></h6>
                                                        <span class="mb-3 d-block"><?= $Listarcompras['tco_ob_invetario'] ?></span>
                                                        <div class="comment-footer">
                                                            <span class="label label-purple label-rounded">Pendiente</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php  } ?>
                                        <?php endforeach;
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
                                        <!-- Listado de archivos Rechazados -->
                                        <?php foreach ($Listarcompra as $Listarcompras) : ?>
                                            <?php if ($Listarcompras['tco_idetr'] == 3) { ?>
                                                <div class="d-flex flex-row comment-row mt-0">
                                                    <div class="p-2">
                                                        <div class="p-2">
                                                            <img src="<?= base_url('assets/images/users/5.jpg') ?>" alt="user" width="50" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">Codigo Formulario: <?= $Listarcompras['tco_cod_formulario'] ?></h6>
                                                        <h6 class="font-medium">Formulario 1-H: <?= $Listarcompras['tco_formulario'] ?></h6>
                                                        <span class="mb-3 d-block"><?= $Listarcompras['tco_ob_invetario'] ?></span>
                                                        <div class="comment-footer">
                                                            <span class="label label-danger label-rounded">Rechazado</span>
                                                            <td><button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#updateCompra<?= $Listarcompras['tco_id'] ?>"><i class="mdi mdi-account-edit text-white"></i></button></td>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php  } ?>
                                            <?php endforeach; ?>
                                    </div>
                                    <!-- Modal de corrección de compra -->
                                    <div class="modal fade" id="updateCompra<?= $Listarcompras['tco_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <?= $variableID= $Listarcompras['tco_id'] ?>
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Solicitud de Compras</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" id="miFormualrio" action="<?= base_url(route_to('ActualizarCompras')) ?>" enctype="multipart/form-data">
                                                        <div class="row">
                                                        <?php foreach ($Listarcompra as $Listarcompra) : ?>
                                                            <?php if($Listarcompra['tco_id'] == $variableID) :?>
                                                            <!-- columna 1 -->
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="tco_id" value="$Listarcompras['tco_id']">
                                                                <div class="p-4">
                                                                    <h1 class="h4 text-gray-900 mb-4">Solicitud de compra de bienes, suministros y servicios</h1>
                                                                    <br />
                                                                    <div class="form-group">
                                                                        <label>Cod. Formulario</label>
                                                                        <input type="text" class="form-control form-control-user" name="tco_cod_formulario" id="tco_cod_formulario" value="<?= $Listarcompras['tco_cod_formulario'] ?>" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Version</label>
                                                                        <input type="number" class="form-control form-control-user" name="tco_version" id="tco_version" value="<?= $Listarcompras['tco_version']?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Fecha</label>
                                                                        <input type="date" name="tco_fecha_ingreso" id="tco_fecha_ingreso" class="form-control form-control-user" value="<?= $Listarcompras['tco_fecha_ingreso']?>" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Lugar</label>
                                                                        <input type="text" class="form-control form-control-user" name="tco_lugar" id="tco_lugar" value="<?= $Listarcompras['tco_lugar']?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Numero</label>
                                                                        <input type="text" class="form-control form-control-user" name="tco_numero" value="<?= $Listarcompras['tco_numero']?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Unidad Administrativa</label>
                                                                        <input type="text" class="form-control form-control-user" name="tco_unidad_admin" value="<?= $Listarcompras['tco_unidad_admin']?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Cantidad Autorizada</label>
                                                                        <input type="number" class="form-control form-control-user" name="tco_cantidad" value="<?= $Listarcompras['tco_cantidad']?>"/>
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
                                                                        <input type="text" name="tco_formulario" min="0" step="1" class="form-control form-control-user" value="<?= $Listarcompras['tco_formulario']?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Dependencia</label>
                                                                        <input type="text" name="tco_dependencia" class="form-control form-control-user" value="<?= $Listarcompras['tco_dependencia']?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Programa</label>
                                                                        <input type="text" name="tco_programa" class="form-control form-control-user" value="<?= $Listarcompras['tco_programa']?>"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Proveedor</label>
                                                                        <input type="text" name="tco_proveedor" class="form-control form-control-user" value="<?= $Listarcompras['tco_proveedor']?>"/>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label>Empleado Encargado</label>
                                                                        <?php foreach ($usuarios as $persona) : ?>
                                                                            <?php if ($persona['per_id'] == $Listarcompras['tco_idper_registro']) : ?>
                                                                                <input type="text" class="form-control form-control-user" value="<?= $persona['per_nombre'] . ' ' . $persona["per_apellido"] ?>" disabled />
                                                                                <input type="hidden" name="tco_idper_registro" class="form-control form-control-user" value="<?= $Listarcompras['tco_idper_registro'] ?>" />
                                                                            <?php endif; ?>
                                                                        <?php endforeach; ?>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label>Estado de la transaccion</label>
                                                                        <?php foreach ($est_transaccion as $transacciones) : ?>
                                                                            <?php if ($transacciones['etr_id'] == $Listarcompras['tco_idetr']) : ?>
                                                                                <input type="text" class="form-control form-control-user" value="<?= $transacciones['etr_nombre'] ?>" disabled />
                                                                                <input type="hidden" name="tco_idetr" class="form-control form-control-user" value="<?= $Listarcompras['tco_idetr'] ?>" />
                                                                            <?php endif; ?>
                                                                        <?php endforeach; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Fin Columna 2 -->
                                                            <!-- columna 3 -->
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <input type="number" name="tco_cod_reglon" class="form-control form-control-user" placeholder="Codigo de Renglón" value="<?= $Listarcompras['tco_cod_reglon'] ?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <input type="number" name="tco_folio_almacen" class="form-control form-control-user" placeholder="Folio Libro Almacén" value="<?= $Listarcompras['tco_folio_almacen'] ?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <input type="number" name="tco_nomen_cuenta" min="0" step="1" class="form-control form-control-user" placeholder="Nomenclatura de cuenta" value="<?= $Listarcompras['tco_nomen_cuenta'] ?>"/>
                                                                </div>
                                                            </div>
                                                            <!-- Fin columna 3 -->
                                                            <!-- Columan 4 -->
                                                            <div class="form-group">
                                                                <textarea class="form-control form-control-user" name="tco_observacion" rows="4" cols="50" placeholder="Descripción del bien / Articulo" value="<?= $Listarcompras['tco_observacion'] ?>"></textarea>
                                                            </div>
                                                            <!-- Fin Columna 4 -->
                                                            <!-- columna 5 -->
                                                            <div class="col-lg-6">
                                                                <div class="p-4">
                                                                    <div class="form-group">
                                                                        <input type="number" name="tco_valor" class="form-control form-control-user" min="0" aria-describedby="emailHelp" placeholder="Precio por Unidad Q" value="<?= $Listarcompras['tco_valor'] ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="number" name="tco_valor_total" class="form-control form-control-user" min="0" aria-describedby="emailHelp" placeholder="Valor Total Q" value="<?= $Listarcompras['tco_valor_total'] ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" name="tco_Fnombre_almacen" class="form-control form-control-user" placeholder="Nombre quien firma almacén" value="<?= $Listarcompras['tco_Fnombre_almacen'] ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" name="tco_Fnombre_depto" class="form-control form-control-user" placeholder="Nombre quien firma depto. Administrativo" value="<?= $Listarcompras['tco_Fnombre_depto'] ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" name="tco_Fnombre_inventario" class="form-control form-control-user" placeholder="Nombre quien firma iventarios" value="<?= $Listarcompras['tco_Fnombre_inventario'] ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" name="tco_ob_invetario" name="comentarios" rows="4" cols="50" placeholder="Observación de Inventario" value="<?= $Listarcompras['tco_ob_invetario'] ?>" disabled></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="p-4">
                                                                    <div class="form-group">
                                                                        <label for="file1" class="fs-4">Documento de Solicitud de compra</label>
                                                                        <div class="input-group">
                                                                        <input type="file" name="tco_doc1" class="form-control-lg bg-success text-white" />
                                                                        <!-- Mostrar el valor del archivo -->
                                                                        <input type="text" name="tco_doc1_value" class="form-control form-control-user" value="<?= $Listarcompras['tco_doc1'] ?>" readonly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="file2" class="fs-4">Documento de Constancia</label>
                                                                        <div class="input-group">
                                                                        <input type="file" name="tco_doc2" class="form-control-lg bg-success text-white" />
                                                                        <!-- Mostrar el valor del archivo -->
                                                                        <input type="text" name="tco_doc2_value" class="form-control form-control-user" value="<?= $Listarcompras['tco_doc2'] ?>" readonly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="file3" class="fs-4">Documento de Factura</label>
                                                                        <div class="input-group">
                                                                        <input type="file" name="tco_doc3" class="form-control-lg bg-success text-white" />
                                                                        <!-- Mostrar el valor del archivo -->
                                                                        <input type="text" name="tco_doc2_value" class="form-control form-control-user" value="<?= $Listarcompras['tco_doc3'] ?>" readonly />
                                                                        </div>
                                                                        <div>
                                                                            <br />
                                                                            <div class="col-md-3">
                                                                                <input type="submit" value="Enviar" class="btn btn-success btn-block btn-lg text-white fs-4">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Finaliza rows -->
                                                                </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                    </form>
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