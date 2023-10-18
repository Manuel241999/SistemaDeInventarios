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

                    <?php foreach ($ListadotcotcaactiacAprobadas as $ListadotcotcaactiacAprobada) :
                        if ($varidfactura == $ListadotcotcaactiacAprobada->tca_idtco) :
                    ?>
                            <div class="container-fluid">
                                <div class="fs-2 text-center">
                                    <p>Ingreso a Tabla General</p>
                                </div>
                                <form class="table table-success table-striped " method="post">
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <fieldset>
                                                <label for="">No. de Formulario de Ingreso Almacen</label>
                                                <input type="text" name="num_ingreso" class="form-control  mb-2" value="<?= $ListadotcotcaactiacAprobada->tco_cod_formulario ?>">
                                                <label for="">No. factura</label>
                                                <input type="text" name="no_factura" class="form-control  mb-2" placeholder="No. factura" value="<?= $ListadotcotcaactiacAprobada->tco_numero_factura ?>">
                                                <label for="">Cantidad</label>
                                                <input type="number" name="cant" class="form-control  mb-2" placeholder="Cantidad" value="<?= $ListadotcotcaactiacAprobada->tca_cantidad ?>">
                                            </fieldset>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="descripcion" class="form-control" rows="11" cols="50" placeholder="Descripción del Bien"><?= $ListadotcotcaactiacAprobada->tca_descripcion ?></textarea>
                                            </fieldset>
                                        </div>
                                    </div>

                                </form>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <input class="btn btn-success btn-lg text-white rounder" type="submit" value="Ver Listado de Bienes" data-bs-toggle="modal" data-bs-target="#ListadoBienes">
                                </div>
                            </div>
                    <?php
                        endif;
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
                                                            <?php foreach ($listtca as $listtcas) :
                                                            ?>
                                                                <tr>
                                                                    <td class="txt-oflo">#</td>
                                                                    <td class="txt-oflo"><?= $listtcas->act_nombre ?></td>
                                                                    <td class="txt-oflo"><?= $listtcas->tca_cantidad ?></td>
                                                                    <td class="txt-oflo"><?= $listtcas->tca_precio_unidad ?></td>
                                                                    <td class="txt-oflo"><?= $listtcas->tca_valor_total ?></td>
                                                                    <td class="txt-oflo"><textarea name="descripcion" class="form-control" rows="3" cols="50" placeholder="Descripción del Bien"><?= $listtcas->tca_descripcion ?></textarea></td>

                                                                    <td>
                                                                        <button class="btn btn-sm btn-success text-white" data-bs-toggle="modal" data-bs-target="#desplegar<?= $listtcas->tca_id ?>">Desplegar activo</i></button>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
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

                    <!-- Listado de Activos -->


                    <?php foreach ($ListadotcotcaactiacAprobadas as $ListadotcotcaactiacAprobada) :  ?>
                        <div class="modal fade" id="desplegar<?= $ListadotcotcaactiacAprobada->tca_id ?>" tabindex="-1" aria-labelledby="ModificacionActivo">
                            <div class="modal-dialog  modal-dialog-scrollable modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Activos</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex flex-wrap">
                                        <form class="form-horizontal form-material mx-2" method="POST" action="">

                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                        <th>Descripción</th>
                                                        <th>No. Inventario</th>
                                                        <th>Cuenta</th>
                                                        <th>SubCuenta</th>
                                                        <th>Cuenta SICOIN</th>
                                                        <th>Cod. SICOIN</th>
                                                        <th>Valor</th>
                                                        <th>No. de Tarjeta</th>
                                                        <th>Personal Responsable</th>
                                                        <th>Fecha de Ingreso de Responsable</th>
                                                        <th>Status del Bien</th>
                                                        <th>Numero Factura</th>
                                                        <th>Region</th>
                                                        <th>SubRegion</th>
                                                        <th>Fecha de Ingreso Almacen</th>
                                                        <th>Donaciones</th>
                                                        <th>Folio</th>
                                                        <th>Libro</th>
                                                        <th>Observaciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $contador = 1;
                                                    for ($i = 0; $i < $ListadotcotcaactiacAprobada->tca_cantidad; $i++) : ?>
                                                        <tr>
                                                            <td scope="row"><?= $contador ?></td>
                                                            <!-- nombre ya lo trae--->
                                                            <td><input type="text" name="" class="form-control-lg" value="<?= $listtcas->act_nombre ?>" disabled></td>
                                                            <!-- Descripción ya lo trae-->
                                                            <td class="txt-oflo"><textarea name="" class="form-control-lg" rows="3" cols="50" placeholder="Descripción del Bien" required> <? /*= $ListadotcotcaactiacAprobada->iac_descripcion */ ?> </textarea></td>
                                                            <!-- numero inventario -->
                                                            <td><input type="number" name="iac_numero_inventario[]" class="form-control-lg" required></td>
                                                            <!-- Cuenta -->
                                                            <td><select name="iac_idcu[]" id="" class="form-select-lg form-select-lg mb-3" aria-label="Large select example" required>
                                                                    <option value="">--Seleccione--</option>
                                                                    <option value="">Región IV / Suroriental</option>
                                                                    <option value="">Región V / Central </option>
                                                                    <option value="">Región VI / Suroccidental </option>
                                                                    <option value="">Región VIII /Petén </option>
                                                                </select>
                                                            </td>
                                                            <!-- subcuenta -->
                                                            <td>
                                                                <select name="iac_idscu[]" id="" class="form-select-lg mb-3" aria-label="Large select example" required>
                                                                    <option value="">--Seleccione--</option>
                                                                    <option value="">Noroccidente</option>
                                                                    <option value="">Huehuetenang</option>
                                                                    <option value="">Nebaj</option>
                                                                    <option value="">Soloma</option>
                                                                </select>
                                                            </td>
                                                            <!-- Cuenta SICOIN -->

                                                            <td>
                                                                <select name="iac_idccs[]" id="" class=" form-select-lg mb-3" aria-label="Large select example" required>
                                                                    <option value="">--Seleccione--</option>
                                                                    <option value="">Noroccidente</option>
                                                                    <option value="">Huehuetenang</option>
                                                                    <option value="">Nebaj</option>
                                                                    <option value="">Soloma</option>
                                                                </select>
                                                            </td>
                                                            <!-- cod SICOIN -->

                                                            <td><input type="number" name="iac_codigo_sicoin[]" class="form-control-lg" required></td>

                                                            <!-- VALOR ya lo trae -->
                                                            <td><input type="number" name="tca_precio_unidad[]" class="form-control-lg" required></td> 
                                                            <!-- NUMERO DE TARJETA -->
                                                            <td><input type="text" name="iac_idtar[]" class="form-control-lg" required></td>


                                                            <!-- PERSONAL RESPONSABLE  -->

                                                            <td>
                                                                <select name="iac_idper_responsable[]" id="" class="form-select-lg mb-3" aria-label="Large select example" required>
                                                                    <option value="">--Seleccione--</option>
                                                                    <option value="">Manuel</option>
                                                                    <option value="">Carlos</option>
                                                                </select>
                                                            </td>
                                                            <!-- fecha ingreso responsable -->
                                                            <td><input type="date" name="iac_fecha_ingreso[]" class="form-control-lg" required></td>

                                                            <!-- STATUS DEL BIEN -->
                                                            <td><input type="text" name="iac_ideac[]" value="Activo" class="form-control-lg" required></td>

                                                            <!-- NUMERO DE FACTURA ya lo trae- -->
                                                            <td><input type="number" name="" class="form-control-lg" value="<?= $ListadotcotcaactiacAprobada->tco_numero_factura ?>"  required></td>

                                                            <!-- REGION  -->
                                                            <td><select name="" id="" class="form-select-lg form-select-lg mb-3" aria-label="Large select example" required>
                                                                    <option value="">--Seleccione--</option>
                                                                    <option value="">Región IV / Suroriental</option>
                                                                    <option value="">Región V / Central </option>
                                                                    <option value="">Región VI / Suroccidental </option>
                                                                    <option value="">Región VIII /Petén </option>
                                                                </select>
                                                            </td>

                                                            <!-- SUBREGION -->
                                                            <td>
                                                                <select name="iac_ccs" id="" class="form-select-lg mb-3" aria-label="Large select example" >
                                                                    <option value="">--Seleccione--</option>
                                                                    <option value="">Noroccidente</option>
                                                                    <option value="">Huehuetenang</option>
                                                                    <option value="">Nebaj</option>
                                                                    <option value="">Soloma</option>
                                                                </select>
                                                            </td>

                                                            <!-- FECHA DE INGRESO ALMACEN -->
                                                            <td><input type="date" name="iac_fecha_ingreso[]" class="form-control-lg" required></td>


                                                            <!-- DONCACIONES -->
                                                            <td><input type="text" name="iac_donaciones[]" class="form-control-lg" required></td>

                                                            <!-- FOLIO -->
                                                            <td><input type="text" name="iac_folio[]" class="form-control-lg" required></td>
                                                            <!-- LIBRO -->
                                                            <td><input type="text" name="iac_libro[]" class="form-control-lg" required></td>



                                                            <!-- OBSERVACIONES -->
                                                            <td class="txt-oflo"><textarea name="iac_observacion[]" class="form-control-lg" rows="3" cols="50" placeholder="Descripción del Bien" required><?= $listtcas->tca_descripcion ?></textarea></td>
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