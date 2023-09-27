<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_EstadoTransaccion extends Model
{
    
    protected $table = 'etr_estado_transaccion'; 
    protected $primaryKey = 'etr_id'; 

    protected $allowedFields = ['etr_nombre', 'etr_descripcion', 'etr_estado']; 


    public function actualizarEstadoTransaccion($estadotransaccionData, $etr_id){
        return $this->update($etr_id, $estadotransaccionData);
    }

    public function desactivarestadotransaccion($estadotransaccionData, $etr_id){
        return $this->update($etr_id, $estadotransaccionData);
    }

    

    
}
