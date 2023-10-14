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
                    

                    <input type="text" value="<?= $varidfactura?>">

                    <?php foreach ($ListadotcotcaactiacAprobadas as $ListadotcotcaactiacAprobada) :
                        
                    ?>
                            
                    <?php
                    endforeach; ?>
                    <!-- modal ingreso Listado de Bienes -->

                    <div class="modal fade" id="ListadoBienes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Listado de Activos referente a Informe</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Listado general de unidad de Compras</h4>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <th scope="border-top-0">#</th>
                                                            <th class="border-top-0">Nombre</th>
                                                            <th class="border-top-0">Cantidad</th>
                                                            <th class="border-top-0">Precio por unidad</th>
                                                            <th class="border-top-0">valor total</th>
                                                            <th class="border-top-0">Descripción Activo</th>
                                                            <th class="border-top-0">Ingresar C/U</th>
                                                        </thead>
                                                        <tbody>

                                                            <tr>
                                                                <td class="txt-oflo">1</td>
                                                                <td class="txt-oflo">Sillas marca rey</td>
                                                                <td class="txt-oflo">20</td>
                                                                <td class="txt-oflo">30</td>
                                                                <td class="txt-oflo">600</td>
                                                                <td class="txt-oflo"><textarea name="descripcion" class="form-control" rows="10" cols="50" placeholder="Descripción del Bien"></textarea></td>
                                                                <td><button class=" btn btn-lg btn-success  text-white" data-bs-toggle="modal" data-bs-target="#ListadoBienesUnidad">Ingresar</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="txt-oflo">2</td>
                                                                <td class="txt-oflo">Escritorios Negros</td>
                                                                <td class="txt-oflo">20</td>
                                                                <td class="txt-oflo">30</td>
                                                                <td class="txt-oflo">600</td>
                                                                <td class="txt-oflo"><textarea name="descripcion" class="form-control" rows="10" cols="50" placeholder="Descripción del Bien"></textarea></td>
                                                                <td><button class=" btn btn-lg btn-success text-white" data-bs-toggle="modal" data-bs-target="#ListadoBienesUnidad">Ingresar</button></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- modal ingreso de activo por unidad -->
                    <div class="modal fade" id="ListadoBienesUnidad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content" style="background: #D5F5E3;">
                                <div class="modal-header">
                                    <h4 class="modal-title text-dark" id="exampleModalLabel">Activo Unitario</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form>
                                                <h2>Numero 1 de 20</h2>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" name="no_inventario" class="form-control  mb-2" placeholder="No. inventario">

                                                        <label for="">Region:</label>
                                                        <select name="" id="" class="form-select form-select-lg mb-3" aria-label="Large select example">
                                                            <option value="">--Seleccione--</option>
                                                            <option value="">Región IV / Suroriental</option>
                                                            <option value="">Región V / Central </option>
                                                            <option value="">Región VI / Suroccidental </option>
                                                            <option value="">Región VIII /Petén </option>
                                                        </select>

                                                        <label for="">SubRegion:</label>
                                                        <select name="" id="" class="form-select form-select-lg mb-3" aria-label="Large select example">
                                                            <option value="">--Seleccione--</option>
                                                            <option value="">Noroccidente</option>
                                                            <option value="">Huehuetenang</option>
                                                            <option value="">Nebaj</option>
                                                            <option value="">Soloma</option>
                                                        </select>
                                                        <input type="text" name="cuenta" class="form-control  mb-2" placeholder="Cuenta">
                                                        <input type="text" name="subcuenta" class="form-control  mb-2" placeholder="Subcuenta">
                                                        <input type="text" name="cuenta" class="form-control  mb-2" placeholder="Cuenta SICOIN">
                                                        <input type="text" name="subcuenta" class="form-control  mb-2" placeholder="DOC.SICOIN">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <input type="number" name="descripcion" class="form-control  mb-2" placeholder="Valor">
                                                        <input type="text" name="descripcion" class="form-control  mb-2" placeholder="No. De Tarjeta">
                                                        <label for="">Personal Responsable:</label>
                                                        <select name="" id="" class="form-select form-select-lg mb-3" aria-label="Large select example">
                                                            <option value="">--Seleccione--</option>
                                                            <option value="">Manuel Ordoñez</option>
                                                            <option value="">Carlos Galindo</option>
                                                        </select>

                                                        <label for="">Status del Bien:</label>
                                                        <select name="" id="" class="form-select form-select-lg mb-3" aria-label="Large select example">
                                                            <option value="">--Seleccione--</option>
                                                            <option value="">Activo</option>
                                                            <option value="">Baja en almacen</option>
                                                            <option value="">Baja definitiva</option>
                                                            <option value="">Traslado</option>
                                                            <option value="">Perdida</option>
                                                            <option value="">Robo</option>
                                                            <option value="">En acta</option>
                                                        </select>

                                                        <input type="text" name="descripcion" class="form-control  mb-2" placeholder="Folio">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" name="libro" class="form-control  mb-2" placeholder="Libro">
                                                        <input type="number" name="valor" class="form-control  mb-2" placeholder="Donaciones">
                                                        <label for="">Fecha de Ingreso de Datos</label>
                                                        <input type="date" name="no_factura" class="form-control  mb-2" placeholder="Fecha de Ingreso de Datos">
                                                        <label for="">Fecha de Ingreso de Responsable</label>
                                                        <input type="date" name="no_factura" class="form-control  mb-2" placeholder="Fecha de Ingreso de Responsable">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <textarea name="observaciones" class="form-control" rows="14" cols="50" placeholder="Observaciones"></textarea>
                                                    </div>
                                                </div>
                                                <button class=" btn btn-lg btn-success text-white">Ingresar</button>
                                            </form>
                                        </div>
                                    </div>

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