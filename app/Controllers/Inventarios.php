<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inventarios extends BaseController
{

    public function HomeInventario()
   {
        return view('Inventarios/HomeInventario');    
   }

   public function MovimientodeBien(){
        return view('Inventarios/TrasladodeBienes');
   }


    public function ListarCompraInventario()
    {
        $estTransaccion = model('model_estadoTrans');
        $est_transaccion = $estTransaccion->findAll();

        $model = model('Model_Login');
        $usuarios = $model->findAll();

        $modelCompras = model('model_compras');
        $comprasrechazadas = $modelCompras->ListadoComprasRechazadas();
        $comprasaprobadas = $modelCompras->ListadoComprasAprobadas();
        $ListadoPendientes = $modelCompras->ListadoComprasPendientes();
        $ListadoEstados = $modelCompras->ListadoEstados();
        $listacompras = $modelCompras->findAll();

        $data = ['listacompras' => $listacompras,
                'comprasrechazadas' => $comprasrechazadas,
                'comprasaprobadas' => $comprasaprobadas,
                'usuarios' => $usuarios,
                'est_transaccion' => $est_transaccion,
                'ListadoEstados' => $ListadoEstados,
                'ListadoPendientes' => $ListadoPendientes
    ];
    // {
    //     $estTransaccion = model('model_estadoTrans');
    //     $est_transaccion = $estTransaccion->findAll();

    //     $model = model('Model_Login');
    //     $usuarios = $model->findAll();
    //     $data = ['usuarios' => $usuarios,
    //     'est_transaccion' => $est_transaccion
    // ];
        return view('Inventarios/ListarCompra',$data);
    }

    public function IngresoTablaGeneral()
    {
         return view('Inventarios/TablaGeneral');    
    }

    public function ListadoTablaGeneral()
    {
        return view('Inventario/ReportesTablaGeneral');
    }

}