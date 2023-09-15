<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function InicioAdmin()
    {
        return view('Admin/HomeAdmin');
    }

    public function Administrar()
    {
        //LISTADO DE SUBCUENTA
        $modelsubcuenta = model('Model_SubCuenta');
        $subcuentas = $modelsubcuenta->findAll();
        //LISTADO DE CUENTA
        $modelcuenta = model('Model_Cuenta');
        $cuentas = $modelcuenta->findAll();
        //LISTADO DE CATALOGO CODIGO SICOIN
        $modelcatalogo = model('Model_CatalogoCodigoSicoin');
        $catalogossicoin = $modelcatalogo->findAll();
        //LISTADO TIPO DE GESTION
        $modeltipogestion = model('Model_TipoGestion');
        $tipogestiones = $modeltipogestion->findAll();
        //LISTADO ESTADO TRANSACCION
        $modelestadotransaccion = model('Model_EstadoTransaccion');
        $estadotransacciones = $modelestadotransaccion->findAll();
        //LISTADO ESTADO ACTIVO
        $modelestadoactivo = model('Model_EstadoActivo');
        $estadoactivos = $modelestadoactivo->findAll();
        //LISTADO SUBREGIONES
        $modelsubregion = model('Model_SubRegion');
        $subregiones = $modelsubregion->findAll();
        $subregionesPersonal = $modelsubregion->findAllWithResponsableName();
        //LISTADO REGIONES
        $modelregion = model('Model_Region');
        $regiones = $modelregion->findAll();
        
        //LISTADO PARA USUARIOS
        $modeldep = model('Model_Departamento');
        $departamentos = $modeldep->findAll();

        $modelcar = model('Model_Cargo');
        $cargos = $modelcar->findAll();

        $model = model('Model_Login');
        $usuarios = $model->findAll();
        //ARRAYS
        $data = ['usuarios' => $usuarios,
                'departamentos' => $departamentos,
                'cargos' => $cargos,
                'regiones' => $regiones,
                'subregiones' => $subregiones,
                'subregionesPersonal' => $subregionesPersonal,
                'estadoactivos' => $estadoactivos,
                'estadotransacciones' => $estadotransacciones,
                'tipogestiones' => $tipogestiones,
                'catalogossicoin' => $catalogossicoin,
                'cuentas' => $cuentas,
                'subcuentas' => $subcuentas];
        
        return view('Admin/DataAdmin', $data);
    }


    ///////////////////PROCESO REGISTRAR USUARIO//////////////////////
    public function registrar_usuario()
    {
        $per_contrasena = $this->request->getPost('per_contrasena');
        
        // Encripta la contraseña
        $hashedPassword = password_hash($per_contrasena, PASSWORD_DEFAULT);

        // Inserta el usuario en la base de datos 
        $userModel = model('Model_Login'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'per_nombre' => $this->request->getPost('per_nombre'),
            'per_apellido' => $this->request->getPost('per_apellido'),
            'per_correo' => $this->request->getPost('per_correo'),
            'per_telefono' => $this->request->getPost('per_telefono'),
            'per_fecha_creacion' => $this->request->getPost('per_fecha_creacion'),
            'per_estado' => $this->request->getPost('per_estado'),
            'per_nit' => $this->request->getPost('per_nit'),
            'per_resguardo' => $this->request->getPost('per_resguardo'),
            'per_acceso_sistema' => $this->request->getPost('per_acceso_sistema'),
            'per_contrasena' => $hashedPassword,
            'per_iddep' => $this->request->getPost('per_iddep'),
            'per_idcar' => $this->request->getPost('per_idcar')
        ];
        $response = $userModel->insert($userData);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Usuario no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Usuario Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }


    public function ListaUsuarios()
    {

        $modeldep = model('Model_Departamento');
        $departamentos = $modeldep->findAll();

        $modelcar = model('Model_Cargo');
        $cargos = $modelcar->findAll();

        $model = model('Model_Login');
        $usuarios = $model->findAll();
        $data = ['usuarios' => $usuarios,
                'departamentos' => $departamentos,
                'cargos' => $cargos];

        return view('Admin/ListUser', $data);
    }

    public function ActualizarUsuarios()
    {
        $per_id = $this->request->getPost('per_id');
        
        // Inserta el usuario en la base de datos
        $userModel = model('Model_Login'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'per_nombre' => $this->request->getPost('per_nombre'),
            'per_apellido' => $this->request->getPost('per_apellido'),
            'per_correo' => $this->request->getPost('per_correo'),
            'per_telefono' => $this->request->getPost('per_telefono'),
            'per_fecha_creacion' => $this->request->getPost('per_fecha_creacion'),
            'per_estado' => $this->request->getPost('per_estado'),
            'per_nit' => $this->request->getPost('per_nit'),
            'per_resguardo' => $this->request->getPost('per_resguardo'),
            'per_acceso_sistema' => $this->request->getPost('per_acceso_sistema'),
            'per_iddep' => $this->request->getPost('per_iddep'),
            'per_idcar' => $this->request->getPost('per_idcar')
        ];

        $response = $userModel->actualizarUsuario($userData, $per_id);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Usuario no actualizado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Usuario actualizado con éxito.'); // Redirige al inicio de sesión después del registro
        }

    }

    
    public function DesactivarUsuarios()
    {
        $per_id = $this->request->getPost('per_id');

        $userModel = model('Model_Login'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'per_estado' => 0
        ];

        $response = $userModel->desactivarUsuario($userData, $per_id);
        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Usuario no fue desactivado.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Usuario desactivado con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }


    ///////////////////PROCESO REGIONES//////////////////////
    public function registrarregion()
    {
        // Inserta el usuario en la base de datos 
        $modelregion = model('Model_Region'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'reg_nombre' => $this->request->getPost('reg_nombre'),
            'reg_numero' => $this->request->getPost('reg_numero'),
            'reg_estado' => $this->request->getPost('reg_estado')
        ];
        $response = $modelregion->insert($userData);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Región no registrada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Región Registrada con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }



    public function Actualizarregion()
    {
        $reg_id = $this->request->getPost('reg_id');
        
        // Inserta el usuario en la base de datos
        $modelregion = model('Model_Region'); // Asegúrate de tener un modelo de usuarios
        $regionData = [
            'reg_nombre' => $this->request->getPost('reg_nombre'),
            'reg_numero' => $this->request->getPost('reg_numero'),
            'reg_estado' => $this->request->getPost('reg_estado')
        ];

        $response = $modelregion->actualizarRegion($regionData, $reg_id);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Región no actualizada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Región actualizada con éxito.'); // Redirige al inicio de sesión después del registro
        }

    }


    public function Desactivarregion()
    {
        $reg_id = $this->request->getPost('reg_id');

        $modelregion = model('Model_Region'); // Asegúrate de tener un modelo de usuarios
        $regionData = [
            'reg_estado' => 0
        ];

        $response = $modelregion->desactivarregion($regionData, $reg_id);
        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Región no fue desactivada.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Región desactivada con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }


    ///////////////////PROCESO SUBREGIONES//////////////////////
    public function registrarsubregion()
    {
        // Inserta el usuario en la base de datos 
        $modelsubregion = model('Model_SubRegion'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'sre_nombre' => $this->request->getPost('sre_nombre'),
            'sre_telefono1' => $this->request->getPost('sre_telefono1'),
            'sre_telefono2' => $this->request->getPost('sre_telefono2'),
            'sre_telefono3' => $this->request->getPost('sre_telefono3'),
            'sre_correo' => $this->request->getPost('sre_correo'),
            'sre_direccion' => $this->request->getPost('sre_direccion'),
            'sre_idreg' => $this->request->getPost('sre_idreg'),
            'sre_idper_responsable' => $this->request->getPost('sre_idper_responsable'),
            'sre_estado' => $this->request->getPost('sre_estado')
        ];
        $response = $modelsubregion->insert($userData);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Usuario no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Usuario Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }



    public function Actualizarsubregion()
    {
        $sre_id = $this->request->getPost('sre_id');
        
        // Inserta el usuario en la base de datos
        $modelsubregion = model('Model_SubRegion'); // Asegúrate de tener un modelo de usuarios
        $subregionData = [
            'sre_nombre' => $this->request->getPost('sre_nombre'),
            'sre_telefono1' => $this->request->getPost('sre_telefono1'),
            'sre_telefono2' => $this->request->getPost('sre_telefono2'),
            'sre_telefono3' => $this->request->getPost('sre_telefono3'),
            'sre_correo' => $this->request->getPost('sre_correo'),
            'sre_direccion' => $this->request->getPost('sre_direccion'),
            'sre_idreg' => $this->request->getPost('sre_idreg'),
            'sre_idper_responsable' => $this->request->getPost('sre_idper_responsable'),
            'sre_estado' => $this->request->getPost('sre_estado')
        ];

        $response = $modelsubregion->actualizarSubRegion($subregionData, $sre_id);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Sub Región no actualizada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Sub Región actualizada con éxito.'); // Redirige al inicio de sesión después del registro
        }

    }


    public function Desactivarsubregion()
    {
        $sre_id = $this->request->getPost('sre_id');

        $modelsubregion = model('Model_SubRegion'); // Asegúrate de tener un modelo de usuarios
        $subregionData = [
            'sre_estado' => 0
        ];

        $response = $modelsubregion->desactivarsubregion($subregionData, $sre_id);
        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Sub Región no fue desactivada.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Sub Región desactivada con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }


    ///////////////////PROCESO ESTADO ACTIVO//////////////////////
    public function registrarestadoactivo()
    {
        // Inserta el estado en la base de datos 
        $modelestadoactivo = model('Model_EstadoActivo'); // Asegúrate de tener un modelo de estado de transaccion de compras
        $userData = [
            'eac_nombre' => $this->request->getPost('eac_nombre'),
            'eac_descripcion' => $this->request->getPost('eac_descripcion'),
            'eac_estado' => $this->request->getPost('eac_estado')
        ];
        $response = $modelestadoactivo->insert($userData);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Estado de Activo no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Estado de Activo Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }



    public function Actualizarestadoactivo()
    {
        $eac_id = $this->request->getPost('eac_id');
        
        // Inserta el usuario en la base de datos
        $modelestadoactivo = model('Model_EstadoActivo'); // Asegúrate de tener un modelo de usuarios
        $estadoactivoData = [
            'eac_nombre' => $this->request->getPost('eac_nombre'),
            'eac_descripcion' => $this->request->getPost('eac_descripcion'),
            'eac_estado' => $this->request->getPost('eac_estado')
        ];

        $response = $modelestadoactivo->actualizarEstadoActivo($estadoactivoData, $eac_id);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Estado Activo no actualizado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Estado Activo actualizado con éxito.'); // Redirige al inicio de sesión después del registro
        }

    }

    public function Desactivarestadoactivo()
    {
        $eac_id = $this->request->getPost('eac_id');

        $modelestadoactivo = model('Model_EstadoActivo'); // Asegúrate de tener un modelo de Estado Activo
        $estadoactivoData = [
            'eac_estado' => 0
        ];

        $response = $modelestadoactivo->desactivarestadoactivo($estadoactivoData, $eac_id);
        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Estado Activo no fue desactivado.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Estado Activo desactivado con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }


    ///////////////////PROCESO ESTADO TRANSACCION//////////////////////
    public function registrarestadotransaccion()
    {
        // Inserta el usuario en la base de datos 
        $modelestadotransaccion = model('Model_EstadoTransaccion'); // Asegúrate de tener un modelo de Estado transaccion compra
        $userData = [
            'etr_nombre' => $this->request->getPost('etr_nombre'),
            'etr_descripcion' => $this->request->getPost('etr_descripcion'),
            'etr_estado' => $this->request->getPost('etr_estado')
        ];
        $response = $modelestadotransaccion->insert($userData);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Estado Transacción no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Estado Transacción Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }



    public function Actualizarestadotransaccion()
    {
        $etr_id = $this->request->getPost('etr_id');
        
        // Inserta el usuario en la base de datos
        $modelestadotransaccion = model('Model_EstadoTransaccion'); // Asegúrate de tener un modelo de Estado transaccion compra
        $estadotransaccionData = [
            'etr_nombre' => $this->request->getPost('etr_nombre'),
            'etr_descripcion' => $this->request->getPost('etr_descripcion'),
            'etr_estado' => $this->request->getPost('etr_estado')
        ];

        $response = $modelestadotransaccion->actualizarEstadoTransaccion($estadotransaccionData, $etr_id);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Estado Transacción no actualizado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Estado Transacción actualizado con éxito.'); // Redirige al inicio de sesión después del registro
        }

    }

    public function Desactivarestadotransaccion()
    {
        $etr_id = $this->request->getPost('etr_id');

        $modelestadotransaccion = model('Model_EstadoTransaccion'); // Asegúrate de tener un modelo de Estado transaccion compra
        $estadotransaccionData = [
            'etr_estado' => 0
        ];

        $response = $modelestadotransaccion->desactivarestadotransaccion($estadotransaccionData, $etr_id);
        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Estado transacción no fue desactivado.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Estado transacción desactivado con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }


    ///////////////////PROCESO TIPO GESTION//////////////////////
    public function registrartipogestion()
    {
        // Inserta el usuario en la base de datos 
        $modeltipogestion = model('Model_TipoGestion'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'tge_nombre' => $this->request->getPost('tge_nombre'),
            'tge_descripcion' => $this->request->getPost('tge_descripcion'),
            'tge_estado' => $this->request->getPost('tge_estado')
        ];
        $response = $modeltipogestion->insert($userData);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Tipo Gestión no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Tipo Gestión Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }



    public function Actualizartipogestion()
    {
        $tge_id = $this->request->getPost('tge_id');
        
        // Inserta el usuario en la base de datos
        $modeltipogestion = model('Model_TipoGestion'); // Asegúrate de tener un modelo de usuarios
        $tipogestionData = [
            'tge_nombre' => $this->request->getPost('tge_nombre'),
            'tge_descripcion' => $this->request->getPost('tge_descripcion'),
            'tge_estado' => $this->request->getPost('tge_estado')
        ];

        $response = $modeltipogestion->actualizarTipoGestion($tipogestionData, $tge_id);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Tipo Gestión no actualizado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Tipo Gestión actualizado con éxito.'); // Redirige al inicio de sesión después del registro
        }

    }

    public function Desactivartipogestion()
    {
        $tge_id = $this->request->getPost('tge_id');

        $modeltipogestion = model('Model_TipoGestion'); // Asegúrate de tener un modelo de usuarios
        $tipogestionData = [
            'tge_estado' => 0
        ];

        $response = $modeltipogestion->desactivartipogestion($tipogestionData, $tge_id);
        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Tipo Gestión no fue desactivado.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Tipo Gestión desactivado con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }


    ///////////////////PROCESO CATALOGO CODIGO SICOIN//////////////////////
    public function registrarcatalogosicoin()
    {
        // Inserta el usuario en la base de datos 
        $modelcatalogo = model('Model_CatalogoCodigoSicoin'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'ccs_nombre' => $this->request->getPost('ccs_nombre'),
            'ccs_descripcion' => $this->request->getPost('ccs_descripcion'),
            'css_estado' => $this->request->getPost('css_estado')
        ];
        $response = $modelcatalogo->insert($userData);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Catalogo Código Sicoin no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Catalogo Código Sicoin Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }



    public function Actualizarcatalogosicoin()
    {
        $ccs_id = $this->request->getPost('ccs_id');
        
        // Inserta el usuario en la base de datos
        $modelcatalogo = model('Model_CatalogoCodigoSicoin'); // Asegúrate de tener un modelo de usuarios
        $catalogoData = [
            'ccs_nombre' => $this->request->getPost('ccs_nombre'),
            'ccs_descripcion' => $this->request->getPost('ccs_descripcion'),
            'css_estado' => $this->request->getPost('css_estado')
        ];

        $response = $modelcatalogo->actualizarCatalogoCodigoSicoin($catalogoData, $ccs_id);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Catalogo Código Sicoin no actualizado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Catalogo Código Sicoin actualizado con éxito.'); // Redirige al inicio de sesión después del registro
        }

    }

    public function Desactivarcatalogosicoin()
    {
        $ccs_id = $this->request->getPost('ccs_id');

        $modelcatalogosicoin = model('Model_CatalogoCodigoSicoin'); // Asegúrate de tener un modelo de usuarios
        $catalogosicoinData = [
            'tge_estado' => 0
        ];

        $response = $modelcatalogosicoin->desactivarcatalogosicoin($catalogosicoinData, $ccs_id);
        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Catálogo Código Sicoin no fue desactivado.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Catálogo Código Sicoin desactivado con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }



    ///////////////////PROCESO CUENTA/////////////////////
    public function registrarcuenta()
    {
        // Inserta el usuario en la base de datos 
        $modelcuenta = model('Model_Cuenta'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'cue_nombre' => $this->request->getPost('cue_nombre'),
            'cue_estado' => $this->request->getPost('cue_estado')
        ];
        $response = $modelcuenta->insert($userData);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Cuenta no registrada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Cuenta Registrada con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }



    public function Actualizarcuenta()
    {
        $cue_id = $this->request->getPost('cue_id');
        
        // Inserta el usuario en la base de datos
        $modelcuenta = model('Model_Cuenta'); // Asegúrate de tener un modelo de usuarios
        $cuentaData = [
            'cue_nombre' => $this->request->getPost('cue_nombre'),
            'cue_estado' => $this->request->getPost('cue_estado')
        ];

        $response = $modelcuenta->actualizarCuenta($cuentaData, $cue_id);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Cuenta no actualizada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Cuenta actualizada con éxito.'); // Redirige al inicio de sesión después del registro
        }

    }


    public function Desactivarcuenta()
    {
        $cue_id = $this->request->getPost('cue_id');

        $modelcuenta = model('Model_Cuenta'); // Asegúrate de tener un modelo de usuarios
        $cuentaData = [
            'tge_estado' => 0
        ];

        $response = $modelcuenta->desactivarcuenta($cuentaData, $cue_id);
        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Cuenta no fue desactivada.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Cuenta desactivada con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }


    ///////////////////PROCESO SUBCUENTA/////////////////////
    public function registrarsubcuenta()
    {
        // Inserta el usuario en la base de datos 
        $modelsubcuenta = model('Model_SubCuenta'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'scu_nombre' => $this->request->getPost('scu_nombre'),
            'scu_idcue' => $this->request->getPost('scu_idcue'),
            'scu_estado' => $this->request->getPost('scu_estado')
        ];
        $response = $modelsubcuenta->insert($userData);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Sub Cuenta no registrada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Sub Cuenta Registrada con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }



    public function Actualizarsubcuenta()
    {
        $scu_id = $this->request->getPost('scu_id');
        
        // Inserta el usuario en la base de datos
        $modelsubcuenta = model('Model_SubCuenta'); // Asegúrate de tener un modelo de usuarios
        $subcuentaData = [
            'scu_nombre' => $this->request->getPost('scu_nombre'),
            'scu_idcue' => $this->request->getPost('scu_idcue'),
            'scu_estado' => $this->request->getPost('scu_estado')
        ];

        $response = $modelsubcuenta->actualizarSubCuenta($subcuentaData, $scu_id);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Sub Cuenta no actualizada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Sub Cuenta actualizada con éxito.'); // Redirige al inicio de sesión después del registro
        }

    }
    

    public function Desactivarsubcuenta()
    {
        $scu_id = $this->request->getPost('scu_id');

        $modelsubcuenta = model('Model_SubCuenta'); // Asegúrate de tener un modelo de usuarios
        $subcuentaData = [
            'scu_estado' => 0
        ];

        $response = $modelsubcuenta->desactivarsubcuenta($subcuentaData, $scu_id);
        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Sub Cuenta no fue desactivada.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Sub Cuenta desactivada con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }





}
