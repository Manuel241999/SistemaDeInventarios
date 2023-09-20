<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_SubCuenta extends Model
{
    
    protected $table = 'scu_sub_cuenta'; 
    protected $primaryKey = 'scu_id'; 

    protected $allowedFields = ['scu_nombre', 'scu_idcue', 'scu_estado']; 
    public function findAllWithCuenta()
{
    $query = $this->db->query('
    SELECT
    s.scu_id as id,
    s.scu_nombre as nombre,
    s.scu_idcue as cuenta,
    s.scu_estado as estado,
    c.cue_nombre as cueNombre
    FROM scu_sub_cuenta as s
    INNER JOIN cue_cuenta as c ON s.scu_idcue  = c.cue_id ;
    ');

    return $query->getResultArray();
}


    public function actualizarSubCuenta($subcuentaData, $scu_id){
        return $this->update($scu_id, $subcuentaData);
    }

    public function desactivarsubcuenta($subcuentaData, $scu_id){
        return $this->update($scu_id, $subcuentaData);
    }

    
}
