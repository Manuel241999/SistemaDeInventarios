<?php
namespace App\Controllers;

use CodeIgniter\Controller;


class Login extends BaseController
{
    

    public function index()
    {
        if(!session()->logged_in){
            return view('login');
        }
       return redirect()->route('InicioAdmin');
        
    }

    public function signin()
    {
        
        $per_correo = trim($this->request->getPost('per_correo'));
        $per_contrasena = trim($this->request->getPost('per_contrasena'));
        
        $model = model('Model_Login'); // Asegúrate de tener un modelo de usuarios
        
        if (!$user = $model->getUserBy('per_correo', $per_correo))
        {
            return redirect()->back()->with('error', 'Correo no encontrado en la Base de datos');
            
        }

        
        if (!password_verify($per_contrasena, $user['per_contrasena']))
        {
            return redirect()->back()->with('error', 'Credenciales inválidas');
            
        }

        if ($user['per_acceso_sistema'] == 0)
        {
            return redirect()->back()->with('error', 'Usuario sin acceso al sistema, comunicarse con su admisnitrador.');
            
        }

        if ($user['per_estado'] == 0)
        {
            return redirect()->back()->with('error', 'Usuario sin acceso al sistema, comunicarse con su admisnitrador.');
            
        }

        session()->set([
            'per_id' => $user['per_id'],
            'per_correo' => $user['per_correo'],
            'logged_in' => true
        ]);

        return redirect()->route('InicioAdmin'); // Redirige a la página de inicio después de iniciar sesión
        
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/'); // Redirige al inicio de sesión después de cerrar sesión
    }

    
}
