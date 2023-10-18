<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Region extends BaseController
{
    public function HomeRegion(){
        $model = model('Model_Login');
        $usuarios = $model->findAll();

        $data = [
            'usuarios' => $usuarios
        ];

        return view('Regiones/HomeRegiones',$data);
    }

    public function RegionTraslado(){
        $model = model('Model_Login');
        $usuarios = $model->findAll();

        $data = [
            'usuarios' => $usuarios
        ];

        return view('Regiones/TrasladodeBienes',$data);

    }
}