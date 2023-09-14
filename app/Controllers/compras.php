<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Compras extends BaseController
{

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

    #region Metodo: Insertar
    public function RegistrarCompras(){

        $tco_version = $this->request->getPost('tco_version');
        $tco_fecha_ingreso = $this->request->getPost('tco_fecha_ingreso');
        $tco_lugar = $this->request->getPost('tco_lugar');
        $tco_numero = $this->request->getPost('tco_numero');
        $tco_unidad_admin = $this->request->getPost('tco_unidad_admin');
        $tco_cantidad = $this->request->getPost('tco_cantidad');
        $tco_formulario = $this->request->getPost('tco_formulario');
        $tco_dependencia = $this->request->getPost('tco_dependencia');
        $tco_programa = $this->request->getPost('tco_programa');
        $tco_proveedor = $this->request->getPost('tco_proveedor');
        $tco_cod_reglon = $this->request->getPost('tco_cod_reglon');
        $tco_folio_almacen = $this->request->getPost('tco_folio_almacen');
        $tco_nomen_cuenta = $this->request->getPost('tco_nomen_cuenta');
        $tco_observacion = $this->request->getPost('tco_observacion');
        $tco_valor = $this->request->getPost('tco_valor');
        $tco_valor_total = $this->request->getPost('tco_valor_total');
        $tco_Fnombre_almacen = $this->request->getPost('tco_Fnombre_almacen');
        $tco_Fnombre_depto = $this->request->getPost('tco_Fnombre_depto');
        $tco_Fnombre_inventario = $this->request->getPost('tco_Fnombre_inventario');
        $tco_ob_invetario = $this->request->getPost('tco_ob_invetario');
        $tco_doc1 = $this->request->getPost('tco_doc1');
        $tco_doc2 = $this->request->getPost('tco_doc2');
        $tco_doc3 = $this->request->getPost('tco_doc3');
        $tco_doc4 = $this->request->getPost('tco_doc4');
        $tco_idetr = $this->request->getPost('tco_idetr');
        $tco_idper_registro = $this->request->getPost('tco_idper_registro');


        /**Incercion de datos en la base de datos */

        $modelCompras = model('model_compras');
        $comprasData = [
            'tco_version' => $tco_version,
            'tco_fecha_ingreso' => $tco_fecha_ingreso,
            'tco_lugar' => $tco_lugar,
            'tco_numero' => $tco_numero,
            'tco_unidad_admin' => $tco_unidad_admin,
            'tco_cantidad' => $tco_cantidad,
            'tco_formulario' => $tco_formulario,
            'tco_dependencia' => $tco_dependencia,
            'tco_programa' => $tco_programa,
            'tco_proveedor' => $tco_proveedor,
            'tco_cod_reglon' => $tco_cod_reglon,
            'tco_folio_almacen' => $tco_folio_almacen,
            'tco_nomen_cuenta' => $tco_nomen_cuenta,
            'tco_valor' => $tco_valor,
            'tco_valor_total' => $tco_valor_total,
            'tco_Fnombre_almacen' => $tco_Fnombre_almacen,
            'tco_Fnombre_depto' => $tco_Fnombre_depto,
            'tco_Fnombre_inventario' => $tco_Fnombre_inventario,
            'tco_ob_invetario' => $tco_ob_invetario,
            'tco_doc1' => $tco_doc1,
            'tco_doc2' => $tco_doc2,
            'tco_doc3' => $tco_doc3,
            'tco_doc4' => $tco_doc4,
            'tco_idetr' => $tco_idetr,
            'tco_idper_registro' => $tco_idper_registro
        ];

        $response = $modelCompras ->insert($comprasData);

        if(!$response){
            return redirect()->route('Rcompras')->with('error', 'Hubo un error al registrar la compra');
        }else{
            return redirect()->route('Rcompras')->with('msj','Compra registrada exitosamente');
        }
}
#endregion


#region Metodo: Actualizar / Modificar
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
        return redirect()->route('Rcompras')->with('error', 'registro de compra no actualizado, valide los datos');
    }else{
        return redirect()->route('Rcompras')->with('msj','Compra actualizada exitosamente.');
    }

}
#endregion    
}