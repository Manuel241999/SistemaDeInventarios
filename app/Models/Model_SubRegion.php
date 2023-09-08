<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_SubRegion extends Model
{
    
    protected $table = 'sre_sub_region'; 
    protected $primaryKey = 'sre_id'; 

    protected $allowedFields = ['sre_nombre', 'sre_telefono1', 'sre_telefono2', 'sre_telefono3', 'sre_correo', 'sre_direccion', 'sre_idreg', 'sre_idper_responsable']; 


    public function actualizarSubRegion($subregionData, $sre_id){
        return $this->update($sre_id, $subregionData);
    }

    
}
