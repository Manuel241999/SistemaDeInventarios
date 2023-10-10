<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Activo extends Model
{
    
    protected $table = 'act_activo'; 
    protected $primaryKey = 'act_id'; 

    protected $allowedFields = ['act_nombre', 'act_descripcion','act_valor','act_fecha']; 


    public function ListadoActivosEstados(){
        $builder = $this->builder();
        $result = $builder->get();
        return $result->getResult();
    }

    
}
