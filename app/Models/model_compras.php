<?php

namespace App\Models;
use CodeIgniter\Model;

class model_compras extends Model
{

    protected $table = 'tco_transaccion_compra';
    protected $primaryKey = 'tco_id';
    protected $protectFields = false;
    protected $allowFields = ['tco_cod_formulario', 'tco_version','tco_fecha_ingreso','tco_lugar','tco_numero','tco_unidad_admin','tco_cantidad','tco_formulario',
    'tco_dependencia','tco_programa','tco_proveedor','tco_cod_reglon','tco_folio_almacen','tco_nomen_cuenta','tco_observacion','tco_valor','tco_valor_total',
    'tco_Fnombre_almacen','tco_Fnombre_depto','tco_Fnombre_inventario','tco_ob_inventario','tco_doc1','tco_doc2','tco_doc3','tco_idetr','tco_idper_registro'];



    public function ActualizarCompra($comprasData, $tco_id){
        return $this->update($tco_id, $comprasData);
    }

    public function ActualizarCompradoc1($tco_id, $comprasData){
        return $this->update($tco_id, $comprasData);
    }

    public function ActualizarCompradoc2($comprasData, $tco_id){
        return $this->update($tco_id, $comprasData);
    }

    public function ActualizarCompradoc3($comprasData, $tco_id){
        return $this->update($tco_id, $comprasData);
    }


    public function ListadoEstados(){
        // Crea una instancia del Query Builder
        $builder = $this->builder();
        // Realiza un INNER JOIN con la tabla "Estado Transacción"
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        // Ejecuta la consulta
        $result = $builder->get();
        // Obtiene los resultados
        return $result->getResult();
    }

    public function ListadoComprasRechazadas(){
        // Crea una instancia del Query Builder
        $builder = $this->builder();
        // Realiza un INNER JOIN con la tabla "Estado Transacción"
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        // Aplica un filtro where
        $builder->where('etr_estado_transaccion.etr_nombre', 'Rechazada');
        // Ejecuta la consulta
        $result = $builder->get();
        // Obtiene los resultados
        return $result->getResult();
    }

    public function ListadoComprasAprobadas(){
        // Crea una instancia del Query Builder
        $builder = $this->builder();
        // Realiza un INNER JOIN con la tabla "Estado Transacción"
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        // Aplica un filtro where
        $builder->where('etr_estado_transaccion.etr_nombre', 'Aprobada');
        // Ejecuta la consulta
        $result = $builder->get();
        // Obtiene los resultados
        return $result->getResult();
    }



}

?>