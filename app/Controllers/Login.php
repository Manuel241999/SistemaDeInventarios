<?php
namespace App\Controllers;

use CodeIgniter\Controller;


class Login extends BaseController
{
    

    public function index()
    {
        return view('login');
    }

    public function sessionlogin()
    {
        
        $per_correo = $this->request->getPost('per_correo');
        $per_contrasena = $this->request->getPost('per_contrasena');
        //$per_correo = $_POST['per_correo'];
        //$per_contrasena = $_POST['per_contrasena'];
        // Realiza la validación del usuario y contraseña en tu modelo de usuarios
        $userModel = new \App\Models\Model_Login(); // Asegúrate de tener un modelo de usuarios
        $user = $userModel->where('per_correo', $per_correo)
                            ->where('per_contrasena', $per_contrasena)
                          ->first();

        if ($user)
        {
            // Inicia la sesión y crea variables de sesión
            $session = session();
            $userData = [
                'per_id' => $user['per_id'],
                'per_correo' => $user['per_correo'],
                'logged_in' => true
            ];
            $session->set($userData);

            //return redirect()->to('/Inicio'); // Redirige a la página de inicio después de iniciar sesión
            return view('Home', $userData);
        }
        else
        {
            //echo $per_correo;
            //echo $per_contrasena;
            return redirect()->back()->with('error', 'Credenciales inválidas');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/'); // Redirige al inicio de sesión después de cerrar sesión
    }

    
}
