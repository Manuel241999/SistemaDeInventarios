<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_InventarioActivoV2 extends Model
{
    
    protected $table = 'iac_inventario_activov2'; 
    protected $primaryKey = 'iac_id'; 

    protected $allowedFields = ['iac_fecha_ingreso', 'iac_descripcion','iac_idtca', 'iac_idscu','iac_ideac', 'iac_idcsi','iac_idper_responsable']; 

    public function actualizarinventarioactivov2($inventarioactivoData, $iac_id){
        return $this->update($iac_id, $inventarioactivoData);
    }

    

    
}
