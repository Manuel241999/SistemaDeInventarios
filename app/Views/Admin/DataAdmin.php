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
    <title>Control de Inventario - INAB</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/favicon.png')?>">
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/css/style.min.css')?>" rel="stylesheet">
    <!--<link href="http://localhost:41062/www/app/Views/Inventario/dist/css/style.min.css'" rel="stylesheet">-->
    
</head>

<body>
        <?= $this->include('Layout/Header') ?>
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
                                         <!-- MENSAJE DE ALERTA SEGUN SEA EL CASO -->
                           <div class="d-flex align-items-center justify-content-center font-bold">
                                <?php if (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger " role="alert"><?= session()->getFlashdata('error') ?>xdssss
                                            </div>
                                            <?php endif; ?>

                                <?php if (session()->getFlashdata('msj')) : ?>
                                    <div class="alert alert-success " role="alert"><?= session()->getFlashdata('msj') ?>
                                </div>
                                <?php endif; ?>
                            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="page-title">Usuarios </h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonUsuarioIngresar">Ingresar</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonUsuarioMostrar">Mostrar</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--div data 1-->
        <!-- Modal botonUsuarioIngresar-->
        <div class="modal fade" id="botonUsuarioIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrar_usuario'))?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresa un Nuevo Usuario.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="per_nombre"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Apellido:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Apellido" name="per_apellido"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Correo:</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Correo" name="per_correo"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Telefono:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Telefono" name="per_telefono"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Fecha Creación:</label>
                                <div class="col-md-12">
                                    <input type="date" name="per_fecha_creacion"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="per_estado" class="form-select shadow-none form-control-line">
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">NIT:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="NIT" name="per_nit"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Resguardo:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Resguardo" name="per_resguardo"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Acceso al Sistema:</label>
                                <div class="col-md-12">
                                    <select name="per_acceso_sistema" class="form-select shadow-none form-control-line">
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Contraseña:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Contraseña" name="per_contrasena"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Departamento</label>
                                <div class="col-md-12">
                                <select name="per_iddep" class="form-select shadow-none form-control-line">

                                    <?php foreach ($departamentos as $departamento): ?>       
                                    <option value=<?= $departamento['dep_id'] ?>><?= $departamento['dep_nombre'] ?></option>
                                    <?php endforeach; ?>

                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Cargo</label>
                                <div class="col-md-12">
                                <select name="per_idcar" class="form-select shadow-none form-control-line">

                                <?php foreach ($cargos as $cargo): ?>       
                                <option value=<?= $cargo['car_id'] ?>><?= $cargo['car_nombre'] ?></option>
                                <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                        </div>   
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal botonUsuarioMostrar -->
        <div class="modal fade" id="botonUsuarioMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Usuarios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de usuarios -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Cargo</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($usuarios as $usuario): ?>
                                        <tr>
                                            <th scope="row"><?= $usuario['per_id'] ?></th>
                                            <td><?= $usuario['per_nombre'] ?></td>
                                            <td><?= $usuario['per_apellido'] ?></td>
                                            <td><?= $usuario['per_correo'] ?></td>
                                            <td><?= ($usuario['per_estado'] == 1) ? 'Activo' : 'Inactivo' ?></td>
                                            <td>
                                                <?php
                                                if ($usuario['per_idcar'] == 1) {
                                                    echo 'Administrador';
                                                } elseif ($usuario['per_idcar'] == 2) {
                                                    echo 'Inventarios';
                                                } else {
                                                    echo 'Compras';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteuser<?= $usuario['per_id'] ?>">                                                    
                                                </button>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateuser<?= $usuario['per_id'] ?>">
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                    </table>
                                        </div>
                                            </div>
                                                <div class="modal-footer">
                                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
        </div>

                                    <!-- Modales Delete y Update -->
                                    <?php foreach ($usuarios as $usuario): ?>
                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="deleteuser<?= $usuario['per_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('DesactivarUsuarios'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar al usuario?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="col-md-12"><?= $usuario['per_nombre'].' '.$usuario['per_apellido'] ?></label>
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="per_id" value="<?= $usuario['per_id'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary">Desactivar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Update -->
                                        <div class="modal fade" id="updateuser<?= $usuario['per_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('ActualizarUsuarios'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="form-group">
                                                                <label class="col-md-12">Id:</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" name="per_id" value="<?= $usuario['per_id'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Nombre:</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" placeholder="Nombre" name="per_nombre" value="<?= $usuario['per_nombre'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Apellido:</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" placeholder="Nombre" name="per_apellido" value="<?= $usuario['per_apellido'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Correo:</label>
                                                                <div class="col-md-12">
                                                                    <input type="email" placeholder="Correo" name="per_correo" value="<?= $usuario['per_correo'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Telefono:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="Correo" name="per_telefono" value="<?= $usuario['per_telefono'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Fecha Creación:</label>
                                                                <div class="col-md-12">
                                                                    <input type="date" name="per_fecha_creacion" value="<?= $usuario['per_fecha_creacion'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Estado:</label>
                                                                <div class="col-md-12">
                                                                    <select name="per_estado" class="form-select shadow-none form-control-line">
                                                                    <?php if ($usuario['per_estado'] == 1) : ?>
                                                                        <option  value="<?= $usuario['per_estado'] ?>">Activo</option>
                                                                    <?php else : ?>
                                                                        <option  value="<?= $usuario['per_estado'] ?>">Inactivo</option>
                                                                    <?php endif; ?>   
                                                                        <option value="1">Activo</option>
                                                                        <option value="2">Inactivo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">NIT:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="NIT" name="per_nit" value="<?= $usuario['per_nit'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Resguardo:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="NIT" name="per_resguardo" value="<?= $usuario['per_resguardo'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Acceso al Sistema:</label>
                                                                <div class="col-md-12">
                                                                    <select name="per_acceso_sistema" class="form-select shadow-none form-control-line">
                                                                        <option  value="<?= $usuario['per_acceso_sistema'] ?>"><?= $usuario['per_acceso_sistema'] ?></option>
                                                                        <option value="1">Si</option>
                                                                        <option value="2">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Departamento</label>
                                                                <div class="col-md-12">
                                                                    <select name="per_iddep" class="form-select shadow-none form-control-line">
                                                                        <option  value="<?= $usuario['per_iddep'] ?>"><?= $usuario['per_iddep'] ?></option>
                                                                        <?php foreach ($departamentos as $departamento): ?>
                                                                        <option value="<?= $departamento['dep_id'] ?>"><?= $departamento['dep_nombre'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Cargo</label>
                                                                <div class="col-md-12">
                                                                <select name="per_idcar" class="form-select shadow-none form-control-line">
                                                                        <option  value="<?= $usuario['per_idcar'] ?>"><?= $usuario['per_idcar'] ?></option>
                                                                        <?php foreach ($cargos as $cargo): ?>
                                                                        <option value="<?= $cargo['car_id'] ?>"><?= $cargo['car_nombre'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
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
                                    <?php endforeach; ?>

        
        <!---->
        <!--COLUMN 2-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="page-title">Regiones </h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonRegionesIngresar">Ingresar</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonRegionesMostrar">Mostrar</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--div data 1-->
        <!-- Modal -->
        <!-- Modal botonRegionesIngresar-->
        <div class="modal fade" id="botonRegionesIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrarregion'))?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresa una Nueva Region.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre de la Region:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="reg_nombre"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Numero de la region:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Numero" name="reg_numero"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="reg_estado" class="form-select shadow-none form-control-line">
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>   
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal botonRegionesMostrar -->
        <div class="modal fade" id="botonRegionesMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Regiones</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de usuarios -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Region</th>
                                        <th scope="col">Numero de Region</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($regiones as $region): ?>
                                        <tr>
                                            <th scope="row"><?= $region['reg_id'] ?></th>
                                            <td><?= $region['reg_nombre'] ?></td>
                                            <td><?= $region['reg_numero'] ?></td>
                                            <td>
                                                <?php
                                                if ($region['reg_estado'] == 1) {
                                                    echo 'Activo';
                                                } else {
                                                    echo 'Inactivo';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteregion<?= $region['reg_id'] ?>">                                                    
                                                </button>
                                            </td>

                                            <td>
                                                <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateRegion<?= $region['reg_id'] ?>">
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                    </table>
                                        </div>
                                            </div>
                                                <div class="modal-footer">
                                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
        </div>

                                    <!-- Modale Delete -->
                                    <?php foreach ($regiones as $region): ?>
                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="deleteregion<?= $region['reg_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Desactivarregion'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar la Región?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="col-md-12"><?= $region['reg_nombre'] ?></label>
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="reg_id" value="<?= $region['reg_id'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary">Desactivar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Modal Update -->
                                        <div class="modal fade" id="updateRegion<?= $region['reg_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Actualizarregion'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                        
                                                            <div class="form-group">
                                                                <label class="col-md-12">Nombre:</label>
                                                                <div class="col-md-12">
                                                                <input type="hidden" name="reg_id" value="<?= $region['reg_id'] ?>"/>
                                                                    <input type="text" placeholder="Nombre" name="reg_nombre" value="<?= $region['reg_nombre'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Numero de Region:</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" placeholder="Numero" name="reg_numero" value="<?= $region['reg_numero'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Estado:</label>
                                                                <div class="col-md-12">
                                                                    <select name="reg_estado" class="form-select shadow-none form-control-line">
                                                                        <option value="<?= $region['reg_numero'] ?>">Estado</option>
                                                                        <option value="1">Activo</option>
                                                                        <option value="2">Inactivo</option>
                                                                    </select>
                                                                </div>
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
                                    <?php endforeach; ?>

  <!---->
        <!--COLUMN 3-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="page-title">Sub Regiones </h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonSubRegionesIngresar">Ingresar</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonSubRegionesMostrar">Mostrar</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--div data 1-->
        <!-- Modal -->
        <!-- Modal botonSubRegionesIngresar-->
        <div class="modal fade" id="botonSubRegionesIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrarsubregion'))?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresa una Nueva Sub Region.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nombre de la Sub Region:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nombre" name="sre_nombre"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Telefono 1:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Numero" name="sre_telefono1"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Telefono 2:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Numero" name="sre_telefono2"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Telefono 3:</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Numero" name="sre_telefono3"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Correo Electronico:</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Correo Electronico" name="sre_correo"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Dirección:</label>
                               <textarea name="sre_direccion" cols="50" rows="5" placeholder="Coloca la dirección">
                               </textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Region a la que pertenece:</label>
                                <div class="col-md-12">
                                    <select name="sre_idreg" class="form-select shadow-none form-control-line">

                                    <?php foreach ($regiones as $region): ?>       
                                    <option value=<?= $region['reg_id'] ?>><?= $region['reg_nombre'] ?></option>
                                    <?php endforeach; ?>
                                    
                                     </select>
                                </div>
                            </div> 

                            <div class="form-group">
                                <label class="col-md-12">Personal Responsable:</label>
                                <div class="col-md-12">
                                    <select name="sre_idper_responsable" class="form-select shadow-none form-control-line">
                                        <?php foreach ($usuarios as $usuario): ?>       
                                        <option value=<?= $usuario['per_id'] ?>><?= $usuario['per_nombre'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Estado:</label>
                                <div class="col-md-12">
                                    <select name="sre_estado" class="form-select shadow-none form-control-line">
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>   
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal botonSubRegionesMostrar -->
        <div class="modal fade" id="botonSubRegionesMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Sub Regiones</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de usuarios -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Sub Region</th>
                                        <th scope="col">Telefono 1</th>
                                        <th scope="col">Telefono 2</th>
                                        <th scope="col">Telefono 3</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Region a la que pertenece</th>
                                        <th scope="col">Personal Responsable</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($subregiones as $subregion): ?>
                                        <tr>
                                            <th scope="row"><?= $subregion['sre_id'] ?></th>
                                            <td><?= $subregion['sre_nombre'] ?></td>
                                            <td><?= $subregion['sre_telefono1'] ?></td>
                                            <td><?= $subregion['sre_telefono2'] ?></td>
                                            <td><?= $subregion['sre_telefono3'] ?></td>
                                            <td><?= $subregion['sre_correo'] ?></td>
                                            <td><?= $subregion['sre_direccion'] ?></td>
                                            <td><?= $subregion['sre_idreg'] ?></td>
                                            <td><?= $subregion['sre_idper_responsable'] ?></td>
                                            <td>
                                                <?php
                                                if ($subregion['sre_estado'] == 1) {
                                                    echo 'Activo';
                                                } else {
                                                    echo 'Inactivo';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteSubregion<?= $subregion['sre_id'] ?>">                                                    
                                                </button>
                                            </td>

                                            <td>
                                                <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateSubRegion<?= $subregion['sre_id'] ?>">
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                    </table>
                                        </div>
                                            </div>
                                                <div class="modal-footer">
                                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
        </div>

                                    <!-- Modale Delete -->
                                    <?php foreach ($subregiones as $subregion): ?>
                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="deleteSubregion<?= $subregion['sre_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Desactivarsubregion'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar la Región?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="col-md-12"><?= $subregion['sre_nombre'] ?></label>
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="sre_id" value="<?= $subregion['sre_id'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary">Desactivar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Modal Update -->
                                        <div class="modal fade" id="updateSubRegion<?= $subregion['sre_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Actualizarsubregion'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                        
                                                            <div class="form-group">
                                                                <label class="col-md-12">Nombre:</label>
                                                                <div class="col-md-12">
                                                                <input type="hidden" name="sre_id" value="<?= $subregion['sre_id'] ?>"/>
                                                                    <input type="text" placeholder="Nombre" name="sre_nombre" value="<?= $subregion['sre_nombre'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Telefono 1:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="Numero" name="sre_telefono1" value="<?= $subregion['sre_telefono1'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Telefono 2:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="Numero" name="sre_telefono2" value="<?= $subregion['sre_telefono2'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Telefono 3:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="Numero" name="sre_telefono3"  value="<?= $subregion['sre_telefono3'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Correo Electronico:</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" placeholder="Correo Electronico" name="sre_correo" value="<?= $subregion['sre_correo'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Dirección:</label>
                                                            <textarea name="sre_direccion" cols="50" rows="5" placeholder="Coloca la dirección" value="<?= $subregion['sre_direccion'] ?>">
                                                            </textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Region a la que pertenece:</label>
                                                                <div class="col-md-12">
                                                                    <select name="sre_idreg" class="form-select shadow-none form-control-line">
                                            
                                                                    <?php foreach ($regiones as $region): ?>       
                                                                    <option value=<?= $region['reg_id'] ?>><?= $region['reg_nombre'] ?></option>
                                                                    <?php endforeach; ?>
                                                                    
                                                                    </select>
                                                                </div>
                                                            </div> 

                                                            <div class="form-group">
                                                                <label class="col-md-12">Personal Responsable:</label>
                                                                <div class="col-md-12">
                                                                    <select name="sre_idper_responsable" class="form-select shadow-none form-control-line">

                                                                        <?php foreach ($usuarios as $usuario): ?>       
                                                                        <option value=<?= $usuario['per_id'] ?>><?= $usuario['per_nombre'] ?></option>
                                                                        <?php endforeach; ?>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Estado:</label>
                                                                <div class="col-md-12">
                                                                    <select name="reg_estado" class="form-select shadow-none form-control-line">
                                                                        <option value="1">Activo</option>
                                                                        <option value="2">Inactivo</option>
                                                                    </select>
                                                                </div>
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
                                    <?php endforeach; ?>






        <!--COLUMN 4-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                    <h4 class="page-title">Estado de Transaciones de Compra </h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonEtrEstadoCompraIngresar">Ingresar</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonEtrEstadoCompraMostrar">Mostrar</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--div data 1-->
        <!-- Modal -->
                <!-- Modal botonEstadoTransaccionCompra-->
                <div class="modal fade" id="botonEtrEstadoCompraIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrarestadotransaccion'))?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ingresa una Nuevo Estado de Transaccion de Compra.</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-md-12">Nombre del Estado:</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nombre" name="etr_nombre"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Descripción del Estado:</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Descripción" name="etr_descripcion"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Estado:</label>
                                        <div class="col-md-12">
                                            <select name="etr_estado" class="form-select shadow-none form-control-line">
                                                <option value="1">Activo</option>
                                                <option value="2">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>   
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

        <!-- Modal botonEstadoTransaccionCompraMostrar -->
        <div class="modal fade" id="botonEtrEstadoCompraMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Estado de Transaccion de Compras</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de los estados de transaccion -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre del Estado</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($estadotransacciones as $estadotransaccion): ?>
                                        <tr>
                                            <th scope="row"><?= $estadotransaccion['etr_id'] ?></th>
                                            <td><?= $estadotransaccion['etr_nombre'] ?></td>
                                            <td><?= $estadotransaccion['etr_descripcion'] ?></td>
                                            <td>
                                                <?php
                                                if ($estadotransaccion['etr_estado'] == 1) {
                                                    echo 'Activo';
                                                } else {
                                                    echo 'Inactivo';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteEstadoTransC<?= $estadotransaccion['etr_id'] ?>">                                                    
                                                </button>
                                            </td>

                                            <td>
                                                <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateEstadoTransC<?= $estadotransaccion['etr_id'] ?>">
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                    </table>
                                        </div>
                                            </div>
                                                <div class="modal-footer">
                                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
        </div>

                                    <!-- Modale Delete -->
                                    <?php foreach ($estadotransacciones as $estadotransaccion): ?>
                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="deleteEstadoTransC<?= $estadotransaccion['etr_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Desactivarestadotransaccion'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar el Estado de Transacción?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="col-md-12"><?= $estadotransaccion['etr_nombre'] ?></label>
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="etr_id" value="<?= $estadotransaccion['etr_id'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary">Desactivar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Modal Update -->
                                        <div class="modal fade" id="updateEstadoTransC<?= $estadotransaccion['etr_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Actualizarestadotransaccion'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                        
                                                            <div class="form-group">
                                                                <label class="col-md-12">Nombre del Estado:</label>
                                                                <div class="col-md-12">
                                                                <input type="hidden" name="etr_id" value="<?= $estadotransaccion['etr_id'] ?>"/>
                                                                    <input type="text" placeholder="Nombre" name="etr_nombre" value="<?= $estadotransaccion['etr_nombre'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Descripción del Estado:</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" placeholder="Numero" name="etr_descripcion" value="<?= $estadotransaccion['etr_descripcion'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Estado:</label>
                                                                <div class="col-md-12">
                                                                    <select name="etr_estado" class="form-select shadow-none form-control-line">
                                                                    <?php if ($estadotransaccion['etr_estado'] == 1) : ?>
                                                                        <option  value="1">Activo</option>
                                                                        <option value="2">Inactivo</option>
                                                                    <?php else : ?>
                                                                        <option  value="2">Inactivo</option>
                                                                        <option value="1">Activo</option>
                                                                    <?php endif; ?>       
                                                                    </select>
                                                                </div>
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
                                    <?php endforeach; ?>



        <!--COLUMN 5-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="page-title">Estado de Activos</h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#boton1">Ingresar</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#boton1">Mostrar</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
       <!-- Modal -->
                <!-- Modal botonSubRegionesIngresar-->
                <div class="modal fade" id="botonEtrEstadoCompraIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrarsubregion'))?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ingresa una Nueva Sub Region.</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-md-12">Nombre de la Sub Region:</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nombre" name="sre_nombre"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telefono 1:</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="Numero" name="sre_telefono1"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telefono 2:</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="Numero" name="sre_telefono2"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telefono 3:</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="Numero" name="sre_telefono3"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Correo Electronico:</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Correo Electronico" name="sre_correo"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Dirección:</label>
                                    <textarea name="sre_direccion" cols="50" rows="5" placeholder="Coloca la dirección">
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Region a la que pertenece:</label>
                                        <div class="col-md-12">
                                            <select name="sre_idreg" class="form-select shadow-none form-control-line">

                                            <?php foreach ($regiones as $region): ?>       
                                            <option value=<?= $region['reg_id'] ?>><?= $region['reg_nombre'] ?></option>
                                            <?php endforeach; ?>
                                            
                                            </select>
                                        </div>
                                    </div> 

                                    <div class="form-group">
                                        <label class="col-md-12">Personal Responsable:</label>
                                        <div class="col-md-12">
                                            <select name="sre_idper_responsable" class="form-select shadow-none form-control-line">
                                                <?php foreach ($usuarios as $usuario): ?>       
                                                <option value=<?= $usuario['per_id'] ?>><?= $usuario['per_nombre'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Estado:</label>
                                        <div class="col-md-12">
                                            <select name="sre_estado" class="form-select shadow-none form-control-line">
                                                <option value="1">Activo</option>
                                                <option value="2">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>   
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                </div>
        </div>

        <!-- Modal botonSubRegionesMostrar -->
        <div class="modal fade" id="botonEtrEstadoCompraMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Sub Regiones</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de usuarios -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Sub Region</th>
                                        <th scope="col">Telefono 1</th>
                                        <th scope="col">Telefono 2</th>
                                        <th scope="col">Telefono 3</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Region a la que pertenece</th>
                                        <th scope="col">Personal Responsable</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($subregiones as $subregion): ?>
                                        <tr>
                                            <th scope="row"><?= $subregion['sre_id'] ?></th>
                                            <td><?= $subregion['sre_nombre'] ?></td>
                                            <td><?= $subregion['sre_telefono1'] ?></td>
                                            <td><?= $subregion['sre_telefono2'] ?></td>
                                            <td><?= $subregion['sre_telefono3'] ?></td>
                                            <td><?= $subregion['sre_correo'] ?></td>
                                            <td><?= $subregion['sre_direccion'] ?></td>
                                            <td><?= $subregion['sre_idreg'] ?></td>
                                            <td><?= $subregion['sre_idper_responsable'] ?></td>
                                            <td>
                                                <?php
                                                if ($subregion['sre_estado'] == 1) {
                                                    echo 'Activo';
                                                } else {
                                                    echo 'Inactivo';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteSubregion<?= $subregion['sre_id'] ?>">                                                    
                                                </button>
                                            </td>

                                            <td>
                                                <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateSubRegion<?= $subregion['sre_id'] ?>">
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                    </table>
                                        </div>
                                            </div>
                                                <div class="modal-footer">
                                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
        </div>

                                    <!-- Modale Delete -->
                                    <?php foreach ($subregiones as $subregion): ?>
                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="deleteSubregion<?= $subregion['sre_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Desactivarsubregion'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar la Región?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="col-md-12"><?= $subregion['sre_nombre'] ?></label>
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="sre_id" value="<?= $subregion['sre_id'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary">Desactivar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Modal Update -->
                                        <div class="modal fade" id="updateSubRegion<?= $subregion['sre_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Actualizarsubregion'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                        
                                                            <div class="form-group">
                                                                <label class="col-md-12">Nombre:</label>
                                                                <div class="col-md-12">
                                                                <input type="hidden" name="sre_id" value="<?= $subregion['sre_id'] ?>"/>
                                                                    <input type="text" placeholder="Nombre" name="sre_nombre" value="<?= $subregion['sre_nombre'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Telefono 1:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="Numero" name="sre_telefono1" value="<?= $subregion['sre_telefono1'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Telefono 2:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="Numero" name="sre_telefono2" value="<?= $subregion['sre_telefono2'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Telefono 3:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="Numero" name="sre_telefono3"  value="<?= $subregion['sre_telefono3'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Correo Electronico:</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" placeholder="Correo Electronico" name="sre_correo" value="<?= $subregion['sre_correo'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Dirección:</label>
                                                            <textarea name="sre_direccion" cols="50" rows="5" placeholder="Coloca la dirección" value="<?= $subregion['sre_direccion'] ?>">
                                                            </textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Region a la que pertenece:</label>
                                                                <div class="col-md-12">
                                                                    <select name="sre_idreg" class="form-select shadow-none form-control-line">
                                            
                                                                    <?php foreach ($regiones as $region): ?>       
                                                                    <option value=<?= $region['reg_id'] ?>><?= $region['reg_nombre'] ?></option>
                                                                    <?php endforeach; ?>
                                                                    
                                                                    </select>
                                                                </div>
                                                            </div> 

                                                            <div class="form-group">
                                                                <label class="col-md-12">Personal Responsable:</label>
                                                                <div class="col-md-12">
                                                                    <select name="sre_idper_responsable" class="form-select shadow-none form-control-line">

                                                                        <?php foreach ($usuarios as $usuario): ?>       
                                                                        <option value=<?= $usuario['per_id'] ?>><?= $usuario['per_nombre'] ?></option>
                                                                        <?php endforeach; ?>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Estado:</label>
                                                                <div class="col-md-12">
                                                                    <select name="reg_estado" class="form-select shadow-none form-control-line">
                                                                        <option value="1">Activo</option>
                                                                        <option value="2">Inactivo</option>
                                                                    </select>
                                                                </div>
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
                                    <?php endforeach; ?>

        <!--COLUMN 5-->
       
        <!--COLUMN 5-->
        <div class="col-lg-4 col-xlg-3 col-md-4">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <h4 class="page-title">Tipos de Gestiones</h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-6">
                            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonTiposGestionesIngresar">Ingresar</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#botonTiposGestionesMostrar">Mostrar</button>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
       <!-- Modal -->
                <!-- Modal botonTiposGestionesIngresar-->
                <div class="modal fade" id="botonTiposGestionesIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('registrarsubregion'))?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ingresa una Nueva Sub Region.</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-md-12">Nombre de la Sub Region:</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nombre" name="sre_nombre"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telefono 1:</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="Numero" name="sre_telefono1"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telefono 2:</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="Numero" name="sre_telefono2"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telefono 3:</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="Numero" name="sre_telefono3"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Correo Electronico:</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Correo Electronico" name="sre_correo"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Dirección:</label>
                                    <textarea name="sre_direccion" cols="50" rows="5" placeholder="Coloca la dirección">
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Region a la que pertenece:</label>
                                        <div class="col-md-12">
                                            <select name="sre_idreg" class="form-select shadow-none form-control-line">

                                            <?php foreach ($regiones as $region): ?>       
                                            <option value=<?= $region['reg_id'] ?>><?= $region['reg_nombre'] ?></option>
                                            <?php endforeach; ?>
                                            
                                            </select>
                                        </div>
                                    </div> 

                                    <div class="form-group">
                                        <label class="col-md-12">Personal Responsable:</label>
                                        <div class="col-md-12">
                                            <select name="sre_idper_responsable" class="form-select shadow-none form-control-line">
                                                <?php foreach ($usuarios as $usuario): ?>       
                                                <option value=<?= $usuario['per_id'] ?>><?= $usuario['per_nombre'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Estado:</label>
                                        <div class="col-md-12">
                                            <select name="sre_estado" class="form-select shadow-none form-control-line">
                                                <option value="1">Activo</option>
                                                <option value="2">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>   
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                </div>
        </div>

        <!-- Modal botonTiposGestionesMostrar -->
        <div class="modal fade" id="botonTiposGestionesMostrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mostrar Sub Regiones</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de usuarios -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Sub Region</th>
                                        <th scope="col">Telefono 1</th>
                                        <th scope="col">Telefono 2</th>
                                        <th scope="col">Telefono 3</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Region a la que pertenece</th>
                                        <th scope="col">Personal Responsable</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($subregiones as $subregion): ?>
                                        <tr>
                                            <th scope="row"><?= $subregion['sre_id'] ?></th>
                                            <td><?= $subregion['sre_nombre'] ?></td>
                                            <td><?= $subregion['sre_telefono1'] ?></td>
                                            <td><?= $subregion['sre_telefono2'] ?></td>
                                            <td><?= $subregion['sre_telefono3'] ?></td>
                                            <td><?= $subregion['sre_correo'] ?></td>
                                            <td><?= $subregion['sre_direccion'] ?></td>
                                            <td><?= $subregion['sre_idreg'] ?></td>
                                            <td><?= $subregion['sre_idper_responsable'] ?></td>
                                            <td>
                                                <?php
                                                if ($subregion['sre_estado'] == 1) {
                                                    echo 'Activo';
                                                } else {
                                                    echo 'Inactivo';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger mdi mdi-close text-white" data-bs-toggle="modal" data-bs-target="#deleteSubregion<?= $subregion['sre_id'] ?>">                                                    
                                                </button>
                                            </td>

                                            <td>
                                                <button class=" btn btn-sm btn-success mdi mdi-account-edit text-white" data-bs-toggle="modal" data-bs-target="#updateSubRegion<?= $subregion['sre_id'] ?>">
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                    </table>
                                        </div>
                                            </div>
                                                <div class="modal-footer">
                                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
        </div>

                                    <!-- Modale Delete -->
                                    <?php foreach ($subregiones as $subregion): ?>
                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="deleteSubregion<?= $subregion['sre_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Desactivarsubregion'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea Desactivar la Región?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="col-md-12"><?= $subregion['sre_nombre'] ?></label>
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="sre_id" value="<?= $subregion['sre_id'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary">Desactivar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Modal Update -->
                                        <div class="modal fade" id="updateSubRegion<?= $subregion['sre_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form class="form-horizontal form-material mx-2" method="POST" action="<?=base_url(route_to('Actualizarsubregion'))?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ingrese o modifique la información de la solicitud.</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                        
                                                            <div class="form-group">
                                                                <label class="col-md-12">Nombre:</label>
                                                                <div class="col-md-12">
                                                                <input type="hidden" name="sre_id" value="<?= $subregion['sre_id'] ?>"/>
                                                                    <input type="text" placeholder="Nombre" name="sre_nombre" value="<?= $subregion['sre_nombre'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Telefono 1:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="Numero" name="sre_telefono1" value="<?= $subregion['sre_telefono1'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Telefono 2:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="Numero" name="sre_telefono2" value="<?= $subregion['sre_telefono2'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Telefono 3:</label>
                                                                <div class="col-md-12">
                                                                    <input type="number" placeholder="Numero" name="sre_telefono3"  value="<?= $subregion['sre_telefono3'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Correo Electronico:</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" placeholder="Correo Electronico" name="sre_correo" value="<?= $subregion['sre_correo'] ?>"
                                                                        class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Dirección:</label>
                                                            <textarea name="sre_direccion" cols="50" rows="5" placeholder="Coloca la dirección" value="<?= $subregion['sre_direccion'] ?>">
                                                            </textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Region a la que pertenece:</label>
                                                                <div class="col-md-12">
                                                                    <select name="sre_idreg" class="form-select shadow-none form-control-line">
                                            
                                                                    <?php foreach ($regiones as $region): ?>       
                                                                    <option value=<?= $region['reg_id'] ?>><?= $region['reg_nombre'] ?></option>
                                                                    <?php endforeach; ?>
                                                                    
                                                                    </select>
                                                                </div>
                                                            </div> 

                                                            <div class="form-group">
                                                                <label class="col-md-12">Personal Responsable:</label>
                                                                <div class="col-md-12">
                                                                    <select name="sre_idper_responsable" class="form-select shadow-none form-control-line">

                                                                        <?php foreach ($usuarios as $usuario): ?>       
                                                                        <option value=<?= $usuario['per_id'] ?>><?= $usuario['per_nombre'] ?></option>
                                                                        <?php endforeach; ?>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Estado:</label>
                                                                <div class="col-md-12">
                                                                    <select name="reg_estado" class="form-select shadow-none form-control-line">
                                                                        <option value="1">Activo</option>
                                                                        <option value="2">Inactivo</option>
                                                                    </select>
                                                                </div>
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
                                    <?php endforeach; ?>

    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
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

<?php endif; ?>