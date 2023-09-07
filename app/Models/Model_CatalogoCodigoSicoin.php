<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_CatalogoCodigoSicoin extends Model
{
    
    protected $table = 'ccs_catalogo_codigo_sicoin'; 
    protected $primaryKey = 'ccs_id'; 

    protected $allowedFields = ['ccs_nombre', 'ccs_descripcion']; 


    public function actualizarCatalogoCodigoSicoin($catalogoData, $ccs_id){
        return $this->update($ccs_id, $catalogoData);
    }

    
}
