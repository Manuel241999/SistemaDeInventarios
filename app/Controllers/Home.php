<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home');
    }

    public function PopUp()
    {
        return view('Inventario/PopUp');
    }
    public function FormularioV()
    {
        return view('Compras/compras');
    }
    public function LoginINAB()
    {
        return view('login');
    }
    public function ListaCompra()
    {
        return view('Inventario/ListaCompra');
    }
    public function ListaRegionesYSub()
    {
        return view('Inventario/ListaRegionesYSub');
    }

    public function Perfil()
    {
        return view('Inventario/Perfil');
    }

    public function Tablas()
    {
        return view('Inventario/Tablas');
    }

    public function Vacio()
    {
        return view('Inventario/Vacio');
    }

}
