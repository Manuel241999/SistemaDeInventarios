<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Activo_Gestion extends Model
{
    
    protected $table = 'age_activo_gestion'; 
    protected $primaryKey = 'age_id '; 

    protected $allowedFields = ['age_idact', 'age_idges ']; 

    public function ListadoMovimientosActivos(){
        $builder = $this->builder();
        $builder->join('act_activo', 'act_activo.act_id = age_activo_gestion.age_idact');
        $builder->join('ges_gestion', 'ges_gestion.ges_id = age_activo_gestion.age_idges');
        $builder->join('tge_tipo_gestion', 'tge_tipo_gestion.tge_id = ges_gestion.ges_idtge');
        $result = $builder->get();
        return $result->getResult();
    }


    
}
