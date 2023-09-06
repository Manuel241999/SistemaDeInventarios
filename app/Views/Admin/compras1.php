<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Control de Inventario - INAB</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/favicon.png')?>">
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" styles="text/css" href="assets/css/styles.css"/>
    <link rel="stylesheet" styles="text/css" href="assets/css/responsive.css"/>

    <link href="<?=base_url('assets/css/style.min.css')?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f4ec03a2c3.js" crossorigin="anonymous"></script>

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<aside class="left-sidebar"  id="asideCompartido">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav asideLetras">
                    <ul id="sidebarnav" >
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url()?>"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Menu</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('/PopUp')?>"
                                aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Opcion 1</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">Opcion 2</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url('/FormularioV')?>"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">FormularioVentas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Opcion 3</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="mdi mdi-face"></i>
                                <span class="hide-menu">Opcion 4</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
<body class="bg-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-4">
                        <!-- Row de columna 1 y 2 -->
                        <div class="row">
                            <!--<div class="col-lg-6 d-none d-lg-block bg-login-image">imane</div>-->
                            <!-- columna 1 -->
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Ingreso de información UNIDAD DE COMPRAS</h1>
                                </div>
                            </div>
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
                                        <br>
                                        <br>
                                        <br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="correcto">Documentos o información correcta</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="correcciones">Realizar correciciones</label>
                                        </div>
                                        

                                    </form>


                                </div>
                            </div>
                            <!-- fin columna 6 -->
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>