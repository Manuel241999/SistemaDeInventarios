<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_TransaccionCompraActivo extends Model
{
    
    protected $table = 'tca_transaccion_compra_activo'; 
    protected $primaryKey = 'tca_id'; 

    protected $allowedFields = ['tca_cantidad', 'tca_precio_unidad', 'tca_valor_total', 'tca_idtco', 'tca_descripcion', 'tca_idact']; 


    public function actualizartransaccioncompraactivo($transaccioncompraactivoData, $tca_id){
        return $this->update($tca_id, $transaccioncompraactivoData);
    }

    public function Listadotcaact(){
        $builder = $this->builder();
        $builder->join('tco_transaccion_compra', 'tco_transaccion_compra.tco_id  = tca_transaccion_compra_activo.tca_idtco');
        $builder->join('act_activo', 'act_activo.act_id = tca_transaccion_compra_activo.tca_idact');
        $result = $builder->get();
        return $result->getResult();
    }

    public function Listadotcabytco_id($tco_id){
        $builder = $this->builder();
        $builder->join('act_activo', 'act_activo.act_id = tca_transaccion_compra_activo.tca_idact');
        $builder->where('tca_idtco', $tco_id);
        $result = $builder->get();
        return $result->getResult();
    }

    

    
}
