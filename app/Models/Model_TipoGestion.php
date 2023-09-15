<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_TipoGestion extends Model
{
    
    protected $table = 'tge_tipo_gestion'; 
    protected $primaryKey = 'tge_id'; 

    protected $allowedFields = ['tge_nombre', 'tge_descripcion', 'tge_estado']; 


    public function actualizarTipoGestion($tipogestionData, $tge_id){
        return $this->update($tge_id, $tipogestionData);
    }


    public function desactivartipogestion($tipogestionData, $tge_id){
        return $this->update($tge_id, $tipogestionData);
    }

    
}
