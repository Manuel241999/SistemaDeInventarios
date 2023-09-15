<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_SubCuenta extends Model
{
    
    protected $table = 'scu_sub_cuenta'; 
    protected $primaryKey = 'scu_id'; 

    protected $allowedFields = ['scu_nombre', 'scu_idcue', 'scu_estado']; 


    public function actualizarSubCuenta($subcuentaData, $scu_id){
        return $this->update($scu_id, $subcuentaData);
    }

    public function desactivarsubcuenta($subcuentaData, $scu_id){
        return $this->update($scu_id, $subcuentaData);
    }

    
}
