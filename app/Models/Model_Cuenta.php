<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Cuenta extends Model
{
    
    protected $table = 'cue_cuenta'; 
    protected $primaryKey = 'cue_id'; 

    protected $allowedFields = ['cue_nombre']; 


    public function actualizarCuenta($cuentaData, $cue_id){
        return $this->update($cue_id, $cuentaData);
    }

    
}
