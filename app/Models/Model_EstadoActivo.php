<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_EstadoActivo extends Model
{
    
    protected $table = 'eac_estado_activo'; 
    protected $primaryKey = 'eac_id'; 

    protected $allowedFields = ['eac_nombre', 'eac_descripcion', 'eac_estado']; 



    public function actualizarEstadoActivo($estadoactivoData, $eac_id){
        return $this->update($eac_id, $estadoactivoData);
    }

    public function desactivarestadoactivo($estadoactivoData, $eac_id){
        return $this->update($eac_id, $estadoactivoData);
    }
    
}
