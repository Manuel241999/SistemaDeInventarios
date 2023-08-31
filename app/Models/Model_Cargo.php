<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Cargo extends Model
{
    
    protected $table = 'car_cargo'; // Cambia 'car_cargo' al nombre de tu tabla
    protected $primaryKey = 'car_id'; // Cambia 'car_id' al nombre de tu clave primaria

    protected $allowedFields = ['car_nombre']; // Campos permitidos para insertar/actualizar




    
}
