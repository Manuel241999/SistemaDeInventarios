<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Compras extends BaseController
{

    public function InicioCompras()
    {
        return view('Compras/HomeCompras');
    }

    public function ListarComprar()
    {

        $estTransaccion = model('model_estadoTrans');
        $est_transaccion = $estTransaccion->findAll();

        $model = model('Model_Login');
        $usuarios = $model->findAll();
        $data = ['usuarios' => $usuarios,
        'est_transaccion' => $est_transaccion
    ];
        return view('Compras/compras', $data);  

    }

    
    public function registrarcompra(){
        
        $tco_doc1 = $this->request->getFile('tco_doc1');
        $tco_doc2 = $this->request->getFile('tco_doc2');
        $tco_doc3 = $this->request->getFile('tco_doc3');
        $tco_doc4 = $this->request->getFile('tco_doc4');

        
        if ($tco_doc1->isValid() && !$tco_doc1->hasMoved() && $tco_doc2->isValid() && !$tco_doc2->hasMoved() && $tco_doc3->isValid() && !$tco_doc3->hasMoved() && $tco_doc4->isValid() && !$tco_doc4->hasMoved()) {
 // Define la ruta de destino donde deseas guardar el archivo
            $rutaDestino = WRITEPATH . 'uploads';

            // Mueve el archivo a la ubicación deseada
            $tco_doc1->move($rutaDestino);
            $tco_doc2->move($rutaDestino);
            $tco_doc3->move($rutaDestino);
            $tco_doc4->move($rutaDestino);

            // Puedes obtener el nombre del archivo subido
            $tco_doc1 = $tco_doc1->getName();
            $tco_doc2 = $tco_doc2->getName();
            $tco_doc3 = $tco_doc3->getName();
            $tco_doc4 = $tco_doc4->getName();

            $modelCompras = model('model_compras');
            $comprasData = [
                'tco_cod_formulario'=> $this->request->getPost('tco_cod_formulario'),
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
                'tco_ob_invetario' => $this->request->getPost('tco_ob_invetario'),
                'tco_doc1' => $tco_doc1,
                'tco_doc2' => $tco_doc2,
                'tco_doc3' => $tco_doc3,
                'tco_doc4' => $tco_doc4,
                'tco_idetr' => $this->request->getPost('tco_idetr'),
                'tco_idper_registro' => $this->request->getPost('tco_idper_registro')
            ];



            $response = $modelCompras ->insert($comprasData);

            if(!$response){
                return redirect()->route('ListarComprar')->with('error', 'Hubo un error al registrar la compra.');
            }else{
                return redirect()->route('ListarComprar')->with('msj', 'Compra registrada exitosamente.');
            }


        }else{
            return redirect()->route('ListarComprar')->with('error', 'Hubo un error al registrar la compra por problemas en los archivos.');
        }

}




public function ActualizarCompras(){

    $tco_id = $this->request->getPost('tco_id');
    $tco_cantidad = $this->request->getPost('tco_cantidad');
    $tco_descripcion = $this->request->getPost('tco_descripcion');
    $tco_valor = $this->request->getPost('tco_valor');
    $tco_serie_factura = $this->request->getPost('tco_serie_factura');
    $tco_numero_factura = $this->request->getPost('tco_numero_factura');
    $tco_fecha_ingreso = $this->request->getPost('tco_fecha_ingreso');
    $tco_doc1 = $this->request->getPost('tco_doc1');
    $tco_doc2 = $this->request->getPost('tco_doc2');
    $tco_doc3 = $this->request->getPost('tco_doc3');
    $tco_doc4 = $this->request->getPost('tco_doc4');
    $tco_idetr = $this->request->getPost('tco_idetr');
    $tco_idper_registro = $this->request->getPost('tco_idper_registro');

    $modelCompras = model('model_compras');
    $comprasData = [

        'tco_cantidad' => $tco_cantidad,
        'tco_descripcion' => $tco_descripcion,
        'tco_valor' => $tco_valor,
        'tco_serie_factura' => $tco_serie_factura,
        'tco_numero_factura' => $tco_numero_factura,
        'tco_fecha_ingreso' => $tco_fecha_ingreso,
        'tco_doc1' => $tco_doc1,
        'tco_doc2' => $tco_doc2,
        'tco_doc3' => $tco_doc3,
        'tco_doc4' => $tco_doc4,
        'tco_idetr' => $tco_idetr,
        'tco_idper_registro' => $tco_idper_registro
    ];

    $response = $modelCompras->ActualizarCompras($comprasData, $tco_id);

    if(!response){
        return redirect()->route('ListarComprar')->with('error', 'registro de compra no actualizado, valide los datos');
    }else{
        return redirect()->route('ListarComprar')->with('msj','Compra actualizada exitosamente.');
    }

}
   
}