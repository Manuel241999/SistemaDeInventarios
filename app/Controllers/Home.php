<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Inicio()
    {
        return view('Home');
    }

    public function PopUp()
    {
        return view('Inventario/PopUp');
    }

    public function InicioCompras()
    {
        return view('Compras/HomeCompras');
    }
    public function LoginINAB()
    {
        return view('login');
    }
    public function olvidePassword()
    {
        return view('olvidePassword');
    }
    public function registrar()
    {
        return view('registrar');
    }
    public function confirmarCuenta()
    {
        return view('confirmarCuenta');
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
