<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Region extends Model
{
    
    protected $table = 'reg_region'; 
    protected $primaryKey = 'reg_id'; 

    protected $allowedFields = ['reg_nombre', 'reg_numero', 'reg_estado']; 


    public function actualizarRegion($regionData, $reg_id){
        return $this->update($reg_id, $regionData);
    }

    public function desactivarregion($regionData, $reg_id){
        return $this->update($reg_id, $regionData);
    }

    
}
