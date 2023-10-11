<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_provisionalComAc extends Model
{

    protected $table = 'tca_transaccion_compra_activo';
    protected $primaryKey = 'tca_id';
    protected $protectFields = false;
    protected $allowFields = ['tca_cantidad','tca_precio_unidad','tca_valor_total','tca_idtco','tca_descripcion',
    'tca_idact'];

    public function ListadoActivos(){
        // Crea una instancia del Query Builder
        $builder = $this->builder();
        // Realiza un INNER JOIN con la tabla "Estado Transacción"
        $builder->join('act_activo', 'act_activo.act_id = tca_transaccion_compra_activo.tca_idact');
        // Ejecuta la consulta
        $result = $builder->get();
        // Obtiene los resultados
        return $result->getResult();
    }
}

?>