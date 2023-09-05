<?php

namespace App\CodeIgniter;
use CodeIgniter\Controller;


public function InicioAdmin(){
    return view ('.\Home\Main');
}


#region Metodo: Insertar
public function RegistrodeCompras(){

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


        /**Incercion de datos en la base de datos */

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

        $response = $modelCompras ->insert($comprasData);

        if(!response){
            return redirect()->route('#')->with('error', 'Hubo un error al registrar la compra');
        }else{
            return redirect()->route('#')->with('msj','Compra registrada exitosamente');
        }
}
#endregion

#region Metodo: Listar
public function ListarComprar(){
    
    $modeloCompras = model('model_compras');
    $compras = $modeloCompras->findAll();

    $estado_transaccion = model('modelo_estadoTrans');
    $est_transaccion = $estado_transaccion->finAll();

    $transaccion_compra = model('modelo_trCompra');
    $trsCompra = $transaccion_compra->findAll();

    $transaccionCompra = model('model_compras');
    $data = ['transaccioCompra' => $transaccionCompra,
             'compras' => $compras,
             'est_transaccion' => $est_transaccion,
             'trsCompra' => $trsCompra];

    return view ('Compras\ListComrpas', $data);
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
        return redirect()->route('#')->with('error', 'registro de compra no actualizado, valide los datos');
    }else{
        return redirect()->route('#')->with('msj','Compra actualizada exitosamente.');
    }

}
#endregion

?>