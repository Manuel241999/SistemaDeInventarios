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
    <script src="https://kit.fontawesome.com/f4ec03a2c3.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
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
                        <a href="<?=base_url()?>" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!-- Light Logo icon -->
                                <img src="<?=base_url('assets/images/logo-light-icon.png')?>" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- Light Logo text -->
                                <img src="<?=base_url('assets/images/logo-light-text.png')?>" class="light-logo" alt="homepage" />
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
                                <img src="<?=base_url('assets/images/users/1.jpg')?>" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    Perfil</a>
                                <a class="dropdown-item" href="<?=base_url('/LoginINAB')?>" ><i class="ti-wallet me-1 ms-1"></i>
                                    Login</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-bell me-1 ms-1"></i>
                                    Notificaciones</a>
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url()?>"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Menu</span>
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
                <!-- ============================================================== -->
                <!-- Formulario Compras -->
                <!-- ============================================================== -->
                <div class="row">
                            <!--<div class="col-lg-6 d-none d-lg-block bg-login-image">imane</div>-->
                            <!-- columna 1 -->
                            <div class="col-lg-6">
                                <div class="p-4">
                                    
                                    <form class="user">
                                        <div class="form-group">
                                            <h3>Solicitud de compra de bienes, suministros y servicios</h3>

                                            <input type="text" class="form-control form-control-user" id="codigo"
                                                aria-describedby="emailHelp" placeholder="Codigo">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="version"
                                                aria-describedby="emailHelp" placeholder="Version">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="fechaLugar"
                                                aria-describedby="emailHelp" placeholder="Fecha y Lugar">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="numero"
                                                aria-describedby="emailHelp" placeholder="Numero">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="unidad"
                                                aria-describedby="emailHelp" placeholder="Unidad Administrativa">
                                        </div>

                                        <div class="form-group">
                                            <input type="number" min="0" step="1" class="form-control form-control-user"
                                                id="cantidad" aria-describedby="emailHelp"
                                                placeholder="Cantidad autorizada">
                                        </div>

                                </div>

                                </form>
                            </div>
                            <!-- fin columna 1 -->

                            <!-- columna 2 -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Constancia de ingreso a almacén y a inventario
                                        </h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <br>
                                            <input type="number" id="formulario1H" min="0" step="1"
                                                class="form-control form-control-user" aria-describedby="emailHelp"
                                                placeholder="Formulario 1-H Serie D Número">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="dependencia"
                                                placeholder="Dependencia">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="programa"
                                                placeholder="Programa">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="proveedor"
                                                placeholder="Proveedor">
                                        </div>

                                    </form>


                                </div>
                            </div>
                            <!-- fin columna 2 -->
                 </div>

                <!-- columna 3 -->
                <form class="user">
                            <div class="row">
                                <div class="col-lg-4">

                                    <div class="form-group">
                                        <input type="number" id="codigoRenglon" min="0" step="1"
                                            class="form-control form-control-user" aria-describedby="emailHelp"
                                            placeholder="Codigo de Renglón">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="number" id="folioLibroAlmacen" min="0" step="1"
                                                class="form-control form-control-user" aria-describedby="emailHelp"
                                                placeholder="Folio Libro Almacén">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" id="nomenlaturaLetras" min="0" step="1"
                                                class="form-control form-control-user" aria-describedby="emailHelp"
                                                placeholder="Nomenclatura de cuenta">
                                        </div>
                                </div>

                            </div>
                        </form>

                        <!-- fin columna 3 -->

                        <!-- columna 4  textArea-->
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <textarea class="form-control form-control-user" id="comentarios" name="comentarios"
                                    rows="4" cols="50" placeholder="Descripción del bien / Articulo"></textarea>
                            </div>
                        </div>
                        <!-- fin columna 4 -->

                        <!-- columna 5 y 6 -->
                        <div class="row">
                            <!--<div class="col-lg-6 d-none d-lg-block bg-login-image">imane</div>-->
                            <!-- columna 5 -->
                            <div class="col-lg-6">
                                <div class="p-4">
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user" min="0" id="precioUnidad"
                                                aria-describedby="emailHelp" placeholder="Precio por Unidad Q">
                                        </div>

                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user" min="0" id="precioUnidad"
                                                aria-describedby="emailHelp" placeholder="Valor Total Q">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nombreFirmaAlmacen"
                                                aria-describedby="emailHelp" placeholder="Nombre quien firma almacén">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nombreFirmaDeptoAdmi"
                                                aria-describedby="emailHelp" placeholder="Nombre quien firma depto. Administrativo">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="unidad"
                                                aria-describedby="emailHelp" placeholder="Nombre quien firma iventarios">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control " id="observacionInventario" name="comentarios"
                                                rows="4" cols="50" placeholder="Observación de Inventario"></textarea>
                                        </div>

                                </div>

                                </form>
                            </div>
                            <!-- fin columna 5 -->

                            <!-- columna 6 -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                   
                                    <form class="user">
                                        <div class="form-group">
                                            <label for="">Adjunte documento Solicitud de compra</label>
                                            <div class="col-md-3">
                                                 <a href="#" class="btn btn-primary btn-block"><i class="fa-solid fa-file-pdf fa-xl"></i></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Adjunte Constancia</label>
                                            <div class="col-md-3">
                                                 <a href="#" class="btn btn-primary btn-block"><i class="fa-solid fa-file-pdf fa-xl"></i></a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Adjunte Factura</label>
                                            <div class="col-md-3">
                                                 <a href="#" class="btn btn-primary btn-block"><i class="fa-solid fa-file-pdf fa-xl"></i></a>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="correcto">Documentos o información correcta</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="correcciones">Realizar correciciones</label>
                                        </div>
                                        <div >
                                            <div class="col-md-3">
                                            <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                                            </div>
                                        </div>

                                    </form>


                                </div>
                            </div>
                            <!-- fin columna 6 -->
                        </div>
                
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