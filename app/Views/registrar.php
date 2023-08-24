<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/favicon.png')?>">
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/css/style.min.css')?>" rel="stylesheet">
    
    <link rel="stylesheet" styles="text/css" href="assets/css/styles.css"/>

    <title>LOGIN - INAB</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="fondoLogin">
    
    <!-- Outer Row -->
    <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" 
                        href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand" style="background:#98bf64">
                        <a href="" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!-- Light Logo icon -->
                                <img src="<?=base_url('assets/images/logo-light-icon.png')?>" alt="homepage" 
                                 class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- Light Logo text -->
                                <img src="<?=base_url('assets/images/logo-light-text.png')?>" class="light- 
                                 logo" alt="homepage" />
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
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"></a>
                        </li>
                    </ul>                    
                </div>
            </nav>
        </header>
              <div class="text-center card" id="barraLogin">
              <h1 id="h1Credenciales" class="h4 text-gray-900 mb-4  ">Bienvenido al Instituto Nacional de Bosques</h1>
              </div>
    <div class="container" id="containerLogin">
        <div class="row justify-content-center">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                            <h1 id="h1Login">¿No tienes una Cuenta? Registrate Aqui</h1>
                            </div>
                            <div class="col-lg-6 py-12">
                                <div class="p-5">
                                    <form class="user">

                                        <div class="form-group ">
                                            <input type="text" class="form-control form-control-user"
                                                id="nombre" aria-describedby="emailHelp"
                                                placeholder="Nombre">
                                        </div>

                                        <div class="form-group ">
                                            <input type="text" class="form-control form-control-user"
                                                id="apellido" aria-describedby="emailHelp"
                                                placeholder="Apellido">
                                        </div>

                                        <div class="form-group ">
                                            <input type="email" class="form-control form-control-user"
                                                id="emailRegistrar" aria-describedby="emailHelp"
                                                placeholder="Ingresa tu correo electronico">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="passwordRegistrar" placeholder="Ingresa tu contraseña">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="passwordRepit" placeholder="Vuelve a ingresar tu contraseña">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                        </div>

                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a href="index.html" class="btn btn-success btn-user btn-block mb-6 text-white rounded">
                                                Registrarse
                                            </a>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="row">
                                    <div class="text-center col-6">
                                        <a class="text-uppercase text-white" href="forgot-password.html">¿Olvidaste tu contraseña?</a>
                                    </div>
                                    <div class="text-center col-6">
                                        <a class="text-uppercase text-white" href="forgot-password.html">¿Ya tienes cuanta?</a>
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