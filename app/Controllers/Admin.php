<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function InicioAdmin()
    {
        return view('Admin/HomeAdmin');
    }

    public function Administrar()
    {
        
        return view('Admin/DataAdmin');
    }


    ///////////////////PROCESO REGISTRAR USUARIO//////////////////////
    public function registrar_usuario()
    {
        $per_nombre = $this->request->getPost('per_nombre');
        $per_apellido = $this->request->getPost('per_apellido');
        $per_correo = $this->request->getPost('per_correo');
        $per_telefono = $this->request->getPost('per_telefono');
        $per_fecha_creacion = $this->request->getPost('per_fecha_creacion');
        $per_estado = $this->request->getPost('per_estado');
        $per_nit = $this->request->getPost('per_nit');
        $per_resguardo = $this->request->getPost('per_resguardo');
        $per_acceso_sistema = $this->request->getPost('per_acceso_sistema');
        $per_contrasena = $this->request->getPost('per_contrasena');
        $per_iddep = $this->request->getPost('per_iddep');
        $per_idcar = $this->request->getPost('per_idcar');

        // Encripta la contraseña
        $hashedPassword = password_hash($per_contrasena, PASSWORD_DEFAULT);

        // Inserta el usuario en la base de datos 
        $userModel = model('Model_Login'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'per_nombre' => $per_nombre,
            'per_apellido' => $per_apellido,
            'per_correo' => $per_correo,
            'per_telefono' => $per_telefono,
            'per_fecha_creacion' => $per_fecha_creacion,
            'per_estado' => $per_estado,
            'per_nit' => $per_nit,
            'per_resguardo' => $per_resguardo,
            'per_acceso_sistema' => $per_acceso_sistema,
            'per_contrasena' => $hashedPassword,
            'per_iddep' => $per_iddep,
            'per_idcar' => $per_idcar
        ];
        $response = $userModel->insert($userData);

        if(!$response){
            return redirect()->route('Administrar')->with('error', 'Usuario no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('Administrar')->with('msj', 'Usuario Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }


    public function ListaUsuarios()
    {

        $modeldep = model('Model_Departamento');
        $departamentos = $modeldep->findAll();

        $modelcar = model('Model_Cargo');
        $cargos = $modelcar->findAll();

        $model = model('Model_Login');
        $usuarios = $model->findAll();
        $data = ['usuarios' => $usuarios,
                'departamentos' => $departamentos,
                'cargos' => $cargos];

        return view('Admin/ListUser', $data);
    }

    public function ActualizarUsuarios()
    {
        $per_id = $this->request->getPost('per_id');
        $per_nombre = $this->request->getPost('per_nombre');
        $per_apellido = $this->request->getPost('per_apellido');
        $per_correo = $this->request->getPost('per_correo');
        $per_telefono = $this->request->getPost('per_telefono');
        $per_fecha_creacion = $this->request->getPost('per_fecha_creacion');
        $per_estado = $this->request->getPost('per_estado');
        $per_nit = $this->request->getPost('per_nit');
        $per_resguardo = $this->request->getPost('per_resguardo');
        $per_acceso_sistema = $this->request->getPost('per_acceso_sistema');
        $per_iddep = $this->request->getPost('per_iddep');
        $per_idcar = $this->request->getPost('per_idcar');


        // Inserta el usuario en la base de datos
        $userModel = model('Model_Login'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'per_nombre' => $per_nombre,
            'per_apellido' => $per_apellido,
            'per_correo' => $per_correo,
            'per_telefono' => $per_telefono,
            'per_fecha_creacion' => $per_fecha_creacion,
            'per_estado' => $per_estado,
            'per_nit' => $per_nit,
            'per_resguardo' => $per_resguardo,
            'per_acceso_sistema' => $per_acceso_sistema,
            'per_iddep' => $per_iddep,
            'per_idcar' => $per_idcar
        ];

        $response = $userModel->actualizarUsuario($userData, $per_id);

        if(!$response){
            return redirect()->route('ListaUsuarios')->with('error', 'Usuario no actualizado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListaUsuarios')->with('msj', 'Usuario actualizado con éxito.'); // Redirige al inicio de sesión después del registro
        }

    }

    
    public function DesactivarUsuarios()
    {
        $per_id = $this->request->getPost('per_id');

        $userModel = model('Model_Login'); // Asegúrate de tener un modelo de usuarios
        $userData = [
            'per_estado' => 0
        ];

        $response = $userModel->desactivarUsuario($userData, $per_id);
        if(!$response){
            return redirect()->route('ListaUsuarios')->with('error', 'Usuario no fue desactivado.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListaUsuarios')->with('msj', 'Usuario desactivado con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }


}
