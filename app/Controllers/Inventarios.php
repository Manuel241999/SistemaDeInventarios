<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inventarios extends BaseController
{

    public function HomeInventario()
    {
        return view('Inventarios/HomeInventario');
    }

    public function ListarCompra()
    {
        return view('Inventarios/ListarCompra');
    }

}