<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Departamento extends Model
{
    
    protected $table = 'dep_departamento'; // Cambia 'dep_departamento' al nombre de tu tabla
    protected $primaryKey = 'dep_id'; // Cambia 'dep_id' al nombre de tu clave primaria

    protected $allowedFields = ['dep_nombre']; // Campos permitidos para insertar/actualizar




    
}

?>