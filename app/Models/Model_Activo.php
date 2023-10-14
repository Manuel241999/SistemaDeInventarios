<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Activo extends Model
{
    
    protected $table = 'act_activo'; 
    protected $primaryKey = 'act_id'; 

    protected $allowedFields = ['act_nombre', 'act_fecha']; 

    public function actualizaractivo($activoData, $act_id){
        return $this->update($act_id, $activoData);
    }

    public function ListadoActivosEstados(){
        $builder = $this->builder();
        $result = $builder->get();
        return $result->getResult();
    }

    
}
