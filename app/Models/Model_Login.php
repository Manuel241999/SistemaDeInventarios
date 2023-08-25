<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Login extends Model
{
    
    protected $table = 'per_personal'; // Cambia 'users' al nombre de tu tabla de usuarios
    protected $primaryKey = 'per_id'; // Cambia 'id' al nombre de tu clave primaria

    protected $allowedFields = ['per_correo', 'per_contrasena']; // Campos permitidos para insertar/actualizar

/*
    function ValidarUsuario($per_correo, $per_contrasena){   
        $db = \Config\Database::connect();
    $session = \Config\Services::session();
    $per_id = $session->get('per_id');
    $builder = $db->table('per_personal');


    $builder->select('*');
    //$builder->join('mark_tbl', 'mark_tbl.sub_id = subject_tbl.sub_id');
    $builder->where('per_correo', $per_correo);
    $builder->where('per_contrasena', $per_contrasena);
    $query = $builder->get();
    return $query->getResult();
        
        //$Usuario = $this->db->query("SELECT * FROM per_personal WHERE per_correo = 'prueba@gmail.com' AND per_contrasena = '1234'");
        //return $Usuario->getResult();
     }
  
    */

    
}
