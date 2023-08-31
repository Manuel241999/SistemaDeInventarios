<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Login extends Model
{
    
    protected $table = 'per_personal'; // Cambia 'per_personal' al nombre de tu tabla
    protected $primaryKey = 'per_id'; // Cambia 'per_id' al nombre de tu clave primaria

    protected $allowedFields = ['per_nombre', 'per_apellido', 'per_correo', 'per_telefono', 'per_fecha_creacion', 'per_estado', 'per_nit', 'per_resguardo', 'per_acceso_sistema', 'per_contrasena', 'per_iddep', 'per_idcar']; // Campos permitidos para insertar/actualizar

    public function getUserBy(string $column, string $value){
        return $this->where($column, $value)->first();
    }


    public function actualizarUsuario($userData, $per_id){
        return $this->update($per_id, $userData);
    }

    public function desactivarUsuario($userData, $per_id){
        return $this->update($per_id, $userData);
    }


    
}
