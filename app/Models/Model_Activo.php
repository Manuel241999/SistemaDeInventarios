<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Activo extends Model
{
    
    protected $table = 'act_activo'; 
    protected $primaryKey = 'act_id'; 

    protected $allowedFields = ['act_nombre', 'act_fecha_ingreso','act_descripcion','act_valor','act_idscu','act_ideac','act_idcsi','act_idper_responsable']; 


    public function ListadoActivosEstados(){
        $builder = $this->builder();
        $builder->join('eac_estado_activo', 'eac_estado_activo.eac_id = act_activo.act_ideac');
        $result = $builder->get();
        return $result->getResult();
    }

    
}
