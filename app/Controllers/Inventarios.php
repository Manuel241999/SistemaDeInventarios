<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inventarios extends BaseController
{

    public function HomeInventario()
    {
        return view('Inventarios/HomeInventario');
    }

    public function ListarCompraInventario()
    {
        $estTransaccion = model('model_estadoTrans');
        $est_transaccion = $estTransaccion->findAll();

        $model = model('Model_Login');
        $usuarios = $model->findAll();
        $data = ['usuarios' => $usuarios,
        'est_transaccion' => $est_transaccion
    ];
        return view('Inventarios/ListarCompra',$data);
    }

}