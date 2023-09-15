<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_SubRegion extends Model
{
    
    protected $table = 'sre_sub_region'; 
    protected $primaryKey = 'sre_id'; 
    protected $allowedFields = ['sre_nombre', 'sre_telefono1', 'sre_telefono2', 'sre_telefono3', 'sre_correo', 'sre_direccion', 'sre_idreg', 'sre_idper_responsable', 'sre_estado']; 

    public function findAllWithResponsableName()
{
    $query = $this->db->query('
        SELECT
            s.sre_id as id,
            s.sre_nombre as nombre,
            s.sre_telefono1 as telefono1,
            s.sre_telefono2 as telefono2,
            s.sre_telefono3 as telefono3,
            s.sre_correo as correo,
            s.sre_direccion as direccion,
            s.sre_idreg as idRegion,
            s.sre_estado as estado,
            p.per_nombre as nombre_del_responsable
        FROM sre_sub_region s
        INNER JOIN per_personal p ON s.sre_idper_responsable = p.per_id
    ');

    return $query->getResultArray();
}

    public function actualizarSubRegion($subregionData, $sre_id){
        return $this->update($sre_id, $subregionData);
    }

    public function desactivarsubregion($subregionData, $sre_id){
        return $this->update($sre_id, $subregionData);
    }

    
}
