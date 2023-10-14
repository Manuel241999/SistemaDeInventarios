<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Compras extends BaseController
{

    public function InicioCompras(){
        $estTransaccion = model('model_estadoTrans');
        $est_transaccion = $estTransaccion->findAll();

        $model = model('Model_Login');
        $usuarios = $model->findAll();

        $modelCompras = model('model_compras');
        $comprasrechazadas = $modelCompras->ListadoComprasRechazadas();
        $comprasaprobadas = $modelCompras->ListadoComprasAprobadas();
        $listadotcotcaactiacrechazadas = $modelCompras->ListadotcotcaactiacRechazadas();
        $ListadoEstados = $modelCompras->ListadoEstados();
        $listacompras = $modelCompras->findAll();
        

        $data = [
            'listacompras' => $listacompras,
            'comprasrechazadas' => $comprasrechazadas,
            'comprasaprobadas' => $comprasaprobadas,
            'usuarios' => $usuarios,
            'est_transaccion' => $est_transaccion,
            'ListadoEstados' => $ListadoEstados,
            'listadotcotcaactiacrechazadas' => $listadotcotcaactiacrechazadas
        ];

        return view('Compras/HomeCompras', $data);
    }

    public function ListarComprar(){

        $modeltraComprasact = model('Model_TransaccionCompraActivo');
        $listadotcaact = $modeltraComprasact->Listadotcaact();

        $modelCompras = model('model_compras');
        $listaesperas = $modelCompras->ListadoEspera();
        $listacompras = $modelCompras->findAll();

        $estTransaccion = model('model_estadoTrans');
        $est_transaccion = $estTransaccion->findAll();

        $modelactivo = model('Model_Activo');
        $listadoactivos = $modelactivo->findAll();

        $model = model('Model_Login');
        $usuarios = $model->findAll();
        $data = [
            'usuarios' => $usuarios,
            'est_transaccion' => $est_transaccion,
            'listacompras' => $listacompras,
            'listaesperas' => $listaesperas,
            'listadotcaacts' => $listadotcaact,
            'listadoactivos' => $listadoactivos
        ];
        return view('Compras/ListarCompra',$data);
    }

    public function registrarcompra(){

        $tco_doc1 = $this->request->getFile('tco_doc1');
        $tco_doc2 = $this->request->getFile('tco_doc2');
        $tco_doc3 = $this->request->getFile('tco_doc3');


        if ($tco_doc1->isValid() && !$tco_doc1->hasMoved() && $tco_doc2->isValid() && !$tco_doc2->hasMoved() && $tco_doc3->isValid() && !$tco_doc3->hasMoved()) {
            // Define la ruta de destino donde deseas guardar el archivo
            $rutaDestino = WRITEPATH . 'uploads';

            // Mueve el archivo a la ubicación deseada
            $tco_doc1->move($rutaDestino);
            $tco_doc2->move($rutaDestino);
            $tco_doc3->move($rutaDestino);

            // Puedes obtener el nombre del archivo subido
            $tco_doc1 = $tco_doc1->getName();
            $tco_doc2 = $tco_doc2->getName();
            $tco_doc3 = $tco_doc3->getName();

            $modelCompras = model('model_compras');
            $comprasData = [
                'tco_cod_formulario' => $this->request->getPost('tco_cod_formulario'),
                'tco_version' => $this->request->getPost('tco_version'),
                'tco_fecha_ingreso' => $this->request->getPost('tco_fecha_ingreso'),
                'tco_lugar' => $this->request->getPost('tco_lugar'),
                'tco_numero' => $this->request->getPost('tco_numero'),
                'tco_unidad_admin' => $this->request->getPost('tco_unidad_admin'),
                'tco_formulario' => $this->request->getPost('tco_formulario'),
                'tco_dependencia' => $this->request->getPost('tco_dependencia'),
                'tco_programa' => $this->request->getPost('tco_programa'),
                'tco_proveedor' => $this->request->getPost('tco_proveedor'),
                'tco_numero_factura' => $this->request->getPost('tco_numero_factura'),
                'tco_cod_renglon' => $this->request->getPost('tco_cod_renglon'),
                'tco_folio_almacen' => $this->request->getPost('tco_folio_almacen'),
                'tco_nomen_cuenta' => $this->request->getPost('tco_nomen_cuenta'),
                'tco_Fnombre_almacen' => $this->request->getPost('tco_Fnombre_almacen'),
                'tco_Fnombre_depto' => $this->request->getPost('tco_Fnombre_depto'),
                'tco_Fnombre_inventario' => $this->request->getPost('tco_Fnombre_inventario'),
                'tco_ob_inventario' => $this->request->getPost('tco_ob_inventario'),
                'tco_doc1' => $tco_doc1,
                'tco_doc2' => $tco_doc2,
                'tco_doc3' => $tco_doc3,
                'tco_idetr' => $this->request->getPost('tco_idetr'),
                'tco_idper_registro' => $this->request->getPost('tco_idper_registro')
            ];



            $response = $modelCompras->insert($comprasData);

            if (!$response) {
                return redirect()->route('ListarComprar')->with('error', 'Hubo un error al registrar la compra.');
            } else {
                return redirect()->route('ListarComprar')->with('msj', 'Compra registrada exitosamente.');
            }
        } else {
            return redirect()->route('ListarComprar')->with('error', 'Hubo un error al registrar la compra por problemas en los archivos.');
        }
    }


public function ActualizarCompraEstado(){
    
    $tco_id = $this->request->getPost('tco_id');

    $modelCompras = model('model_compras');

    $comprasData = [
        'tco_ob_invetario' => $this->request->getPost('tco_ob_invetario'),
        'tco_idetr' => $this->request->getPost('tco_idetr'),
    ];

    $response = $modelCompras->ActualizarCompraEstado($comprasData, $tco_id);

    if(!$response){
        return redirect()->route('ListarCompraInventario')->with('error', 'registro de compra no actualizado, valide los datos');
    }else{
        return redirect()->route('ListarCompraInventario')->with('msj','Compra actualizada exitosamente.');
    }

}

    public function Actualizarcompradata(){

        $tco_id = $this->request->getPost('tco_id');

        $modelCompras = model('model_compras');

        $comprasData = [
            'tco_cod_formulario' => $this->request->getPost('tco_cod_formulario'),
            'tco_version' => $this->request->getPost('tco_version'),
            'tco_fecha_ingreso' => $this->request->getPost('tco_fecha_ingreso'),
            'tco_lugar' => $this->request->getPost('tco_lugar'),
            'tco_numero' => $this->request->getPost('tco_numero'),
            'tco_unidad_admin' => $this->request->getPost('tco_unidad_admin'),
            'tco_cantidad' => $this->request->getPost('tco_cantidad'),
            'tco_formulario' => $this->request->getPost('tco_formulario'),
            'tco_dependencia' => $this->request->getPost('tco_dependencia'),
            'tco_programa' => $this->request->getPost('tco_programa'),
            'tco_proveedor' => $this->request->getPost('tco_proveedor'),
            'tco_cod_reglon' => $this->request->getPost('tco_cod_reglon'),
            'tco_folio_almacen' => $this->request->getPost('tco_folio_almacen'),
            'tco_nomen_cuenta' => $this->request->getPost('tco_nomen_cuenta'),
            'tco_observacion' => $this->request->getPost('tco_observacion'),
            'tco_valor' => $this->request->getPost('tco_valor'),
            'tco_valor_total' => $this->request->getPost('tco_valor_total'),
            'tco_Fnombre_almacen' => $this->request->getPost('tco_Fnombre_almacen'),
            'tco_Fnombre_depto' => $this->request->getPost('tco_Fnombre_depto'),
            'tco_Fnombre_inventario' => $this->request->getPost('tco_Fnombre_inventario'),
            'tco_ob_inventario' => $this->request->getPost('tco_ob_invetario'),
            'tco_idetr' => $this->request->getPost('tco_idetr'),
            'tco_idper_registro' => $this->request->getPost('tco_idper_registro')
        ];

        $response = $modelCompras->ActualizarCompra($comprasData, $tco_id);

        if (!$response) {
            return redirect()->route('InicioCompras')->with('error', 'registro de compra no actualizado, valide los datos');
        } else {
            return redirect()->route('InicioCompras')->with('msj', 'Compra actualizada exitosamente.');
        }
    }



    public function Actualizarcompradoc1(){
        $tco_id = $this->request->getPost('tco_id');
        $tco_doc1 = $this->request->getFile('tco_doc1');
        if ($tco_doc1->isValid() && !$tco_doc1->hasMoved()) {

            $rutaDestino = WRITEPATH . 'uploads';
            $tco_doc1->move($rutaDestino);
            $tco_doc1_name = $tco_doc1->getName();
            $modelCompras = model('model_compras');
            $comprasData = [
                'tco_doc1' => $tco_doc1_name
            ];
            $response = $modelCompras->ActualizarCompradoc1($tco_id, $comprasData);

            if (!$response) {
                return redirect()->route('InicioCompras')->with('error', 'Hubo un error al registrar el archivo.');
            } else {
                return redirect()->route('InicioCompras')->with('msj', 'Archivo registrado exitosamente.');
            }
        } else {
            return redirect()->route('InicioCompras')->with('error', 'Hubo un error al registrar la compra por problemas en los archivos.');
        }
    }


    public function Actualizarcompradoc2(){
        $tco_id = $this->request->getPost('tco_id');
        $tco_doc2 = $this->request->getFile('tco_doc2');
        if ($tco_doc2->isValid() && !$tco_doc2->hasMoved()) {

            $rutaDestino = WRITEPATH . 'uploads';
            $tco_doc2->move($rutaDestino);
            $tco_doc2_name = $tco_doc2->getName();
            $modelCompras = model('model_compras');
            $comprasData = [
                'tco_doc2' => $tco_doc2_name
            ];
            $response = $modelCompras->ActualizarCompradoc1($tco_id, $comprasData);

            if (!$response) {
                return redirect()->route('InicioCompras')->with('error', 'Hubo un error al registrar el archivo.');
            } else {
                return redirect()->route('InicioCompras')->with('msj', 'Archivo registrado exitosamente.');
            }
        } else {
            return redirect()->route('InicioCompras')->with('error', 'Hubo un error al registrar la compra por problemas en los archivos.');
        }
    }


    public function Actualizarcompradoc3(){
        $tco_id = $this->request->getPost('tco_id');
        $tco_doc3 = $this->request->getFile('tco_doc3');
        if ($tco_doc3->isValid() && !$tco_doc3->hasMoved()) {

            $rutaDestino = WRITEPATH . 'uploads';
            $tco_doc3->move($rutaDestino);
            $tco_doc3_name = $tco_doc3->getName();
            $modelCompras = model('model_compras');
            $comprasData = [
                'tco_doc3' => $tco_doc3_name
            ];
            $response = $modelCompras->ActualizarCompradoc1($tco_id, $comprasData);

            if (!$response) {
                return redirect()->route('InicioCompras')->with('error', 'Hubo un error al registrar el archivo.');
            } else {
                return redirect()->route('InicioCompras')->with('msj', 'Archivo registrado exitosamente.');
            }
        } else {
            return redirect()->route('InicioCompras')->with('error', 'Hubo un error al registrar la compra por problemas en los archivos.');
        }
    }

    public function registrar_transaccioncompraactivo()
    {
        
        // Inserta el usuario en la base de datos 
        $tcaModel = model('Model_TransaccionCompraActivo'); // Asegúrate de tener un modelo de usuarios
        $transaccioncompraactivoData = [
            'tca_cantidad' => $this->request->getPost('tca_cantidad'),
            'tca_precio_unidad' => $this->request->getPost('tca_precio_unidad'),
            'tca_valor_total' => $this->request->getPost('tca_valor_total'),
            'tca_idtco' => $this->request->getPost('tca_idtco'),
            'tca_descripcion' => $this->request->getPost('tca_descripcion'),
            'tca_idact ' => $this->request->getPost('tca_idact')
        ];
        $response = $tcaModel->insert($transaccioncompraactivoData);

        if(!$response){
            return redirect()->route('ListarComprar')->with('error', 'Transaccion no registrada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListarComprar')->with('msj', 'Transaccion Registrada con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }

    public function actualizar_transaccioncompraactivo()
    {
        $tca_id  = $this->request->getPost('tca_id');
        // Inserta el usuario en la base de datos 
        $tcaModel = model('Model_TransaccionCompraActivo'); // Asegúrate de tener un modelo de usuarios
        $transaccioncompraactivoData = [
            'tca_cantidad' => $this->request->getPost('tca_cantidad'),
            'tca_precio_unidad' => $this->request->getPost('tca_precio_unidad'),
            'tca_valor_total' => $this->request->getPost('tca_valor_total'),
            'tca_idtco' => $this->request->getPost('tca_idtco'),
            'tca_descripcion' => $this->request->getPost('tca_descripcion'),
            'tca_idact ' => $this->request->getPost('tca_idact')
        ];
        $response = $tcaModel->actualizartransaccioncompraactivo($transaccioncompraactivoData, $tca_id );

        if(!$response){
            return redirect()->route('ListarComprar')->with('error', 'Transaccion no registrada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListarComprar')->with('msj', 'Transaccion Registrada con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }


    public function registrar_activo()
    {
        
        // Inserta el usuario en la base de datos 
        $activoModel = model('Model_Activo'); // Asegúrate de tener un modelo de usuarios
        $activoData = [
            'act_nombre' => $this->request->getPost('act_nombre'),
            'act_fecha' => date("Y-m-d")
        ];
        $response = $activoModel->insert($activoData);

        if(!$response){
            return redirect()->route('ListarComprar')->with('error', 'Transaccion no registrada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListarComprar')->with('msj', 'Transaccion Registrada con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }

    public function actualizar_activo()
    {
        $act_id = $this->request->getPost('act_id');
        // Inserta el usuario en la base de datos 
        $activoModel = model('Model_Activo'); // Asegúrate de tener un modelo de usuarios
        $activoData = [
            'act_nombre' => $this->request->getPost('act_nombre')
        ];
        $response = $activoModel->actualizaractivo($activoData, $act_id);

        if(!$response){
            return redirect()->route('ListarComprar')->with('error', 'Activo no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListarComprar')->with('msj', 'Activo Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }


    public function actualizar_estadotco()
    {
        $tco_id = $this->request->getPost('tco_id');
        // Inserta el usuario en la base de datos 
        $comprasModel = model('model_compras'); // Asegúrate de tener un modelo de usuarios
        $comprasData = [
            'tco_idetr' => $this->request->getPost('tco_idetr')
        ];
        $response = $comprasModel->ActualizarEstadotco($comprasData, $tco_id);

        if(!$response){
            return redirect()->route('ListarComprar')->with('error', 'Transaccion no registrada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListarComprar')->with('msj', 'Transaccion Registrada con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }


    public function registrar_inventarioactivov2()
    {
        
        // Inserta el usuario en la base de datos 
        $inventarioactivoModel = model('Model_InventarioActivoV2'); // Asegúrate de tener un modelo de usuarios
        $inventarioactivoData = [
            'iac_fecha_ingreso' => date("Y-m-d"),
            'iac_descripcion' => $this->request->getPost('iac_descripcion'),
            'iac_idtca' => $this->request->getPost('iac_idtca')
            
        ];
        $response = $inventarioactivoModel->insert($inventarioactivoData);

        if(!$response){
            return redirect()->route('ListarComprar')->with('error', 'Transaccion no registrada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListarComprar')->with('msj', 'Transaccion Registrada con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }

    public function actualizar_inventarioactivov2()
    {
        $iac_id = $this->request->getPost('iac_id');
        // Inserta el usuario en la base de datos 
        $inventarioactivoModel = model('Model_InventarioActivoV2'); // Asegúrate de tener un modelo de usuarios
        $inventarioactivoData = [
            'iac_descripcion' => $this->request->getPost('iac_descripcion')
        ];
        $response = $inventarioactivoModel->actualizarinventarioactivov2($inventarioactivoData, $iac_id);

        if(!$response){
            return redirect()->route('ListarComprar')->with('error', 'Activo no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListarComprar')->with('msj', 'Activo Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }


    


}
