<?php

namespace App\Models;
use CodeIgniter\Model;

class model_compras extends Model
{

    protected $table = 'tco_transaccion_compra';
    protected $primaryKey = 'tco_id';
    protected $protectFields = false;
    protected $allowFields = ['tco_cod_formulario', 'tco_version','tco_fecha_ingreso','tco_lugar','tco_numero','tco_unidad_admin','tco_formulario',
    'tco_dependencia','tco_programa','tco_proveedor','tco_numero_factura','tco_numero_serie','tco_cod_renglon','tco_folio_almacen','tco_nomen_cuenta',
    'tco_Fnombre_almacen','tco_Fnombre_depto','tco_Fnombre_inventario','tco_ob_inventario','tco_doc1','tco_doc2','tco_doc3','tco_idetr','tco_idper_registro,'];



    public function ActualizarCompra($comprasData, $tco_id){
        return $this->update($tco_id, $comprasData);
    }
    
    public function ActualizarCompraEstado($comprasData, $tco_id){
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

    public function ActualizarEstadotco($comprasData, $tco_id){
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

    public function ListadoEspera(){
        // Crea una instancia del Query Builder
        $builder = $this->builder();
        // Realiza un INNER JOIN con la tabla "Estado Transacción"
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        // Aplica un filtro where
        $builder->where('etr_estado_transaccion.etr_nombre', 'Espera');
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
    public function ListadoComprasPendientes(){
        // Crea una instancia del Query Builder
        $builder = $this->builder();
        // Realiza un INNER JOIN con la tabla "Estado Transacción"
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        // Aplica un filtro where
        $builder->where('etr_estado_transaccion.etr_nombre', 'Pendiente');
        // Ejecuta la consulta
        $result = $builder->get();
        // Obtiene los resultados
        return $result->getResult();
    }


    public function ListadotcotcaactiacRechazadas(){
        $builder = $this->builder();
        $builder->join('tca_transaccion_compra_activo', 'tco_transaccion_compra.tco_id = tca_transaccion_compra_activo.tca_idtco');
        $builder->join('act_activo', 'tca_transaccion_compra_activo.tca_idact = act_activo.act_id');
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        $builder->where('etr_estado_transaccion.etr_nombre', 'Rechazada');
        $result = $builder->get();
        return $result->getResult();
    }

    public function ListadotcotcaactiacAprobadas(){
        $builder = $this->builder();
        $builder->join('tca_transaccion_compra_activo', 'tco_transaccion_compra.tco_id = tca_transaccion_compra_activo.tca_idtco');
        $builder->join('act_activo', 'tca_transaccion_compra_activo.tca_idact = act_activo.act_id');
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        $builder->join('iac_inventario_activov2', 'iac_inventario_activov2.iac_idtca = tca_transaccion_compra_activo.tca_id');
        $builder->join('scu_sub_cuenta', 'iac_inventario_activov2.iac_idscu  = scu_sub_cuenta.scu_id');
        $builder->join('cue_cuenta', 'scu_sub_cuenta.scu_idcue   = cue_cuenta.cue_id');
        $builder->where('etr_estado_transaccion.etr_nombre', 'Aprobada');
        $result = $builder->get();
        return $result->getResult();
    }
   
    public function ListadotcotcaactiacPendientes(){
        $builder = $this->builder();
        $builder->join('tca_transaccion_compra_activo', 'tco_transaccion_compra.tco_id = tca_transaccion_compra_activo.tca_idtco');
        $builder->join('act_activo', 'tca_transaccion_compra_activo.tca_idact = act_activo.act_id');
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        $builder->where('etr_estado_transaccion.etr_nombre', 'Pendiente');
        $result = $builder->get();
        return $result->getResult();
    }

    public function ListadotcotcaactiacEspera(){
        $builder = $this->builder();
        $builder->join('tca_transaccion_compra_activo', 'tco_transaccion_compra.tco_id = tca_transaccion_compra_activo.tca_idtco');
        $builder->join('act_activo', 'tca_transaccion_compra_activo.tca_idact = act_activo.act_id');
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        $builder->where('etr_estado_transaccion.etr_nombre', 'Espera');
        $result = $builder->get();
        return $result->getResult();
    }


    public function tcopendientes(){
        $builder = $this->builder();
        $builder->select('COUNT(*) as total_pendientes');
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        $builder->where('etr_estado_transaccion.etr_nombre', 'Pendiente');
        $result = $builder->get();
        $row = $result->getRow();
        return $row->total_pendientes;
    }

    public function tcorechazadas(){
        $builder = $this->builder();
        $builder->select('COUNT(*) as total_rechazadas');
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        $builder->where('etr_estado_transaccion.etr_nombre', 'Rechazada');
        $result = $builder->get();
        $row = $result->getRow();
        return $row->total_rechazadas;
    }

    public function tcoaprobadas(){
        $builder = $this->builder();
        $builder->select('COUNT(*) as total_aprobadas');
        $builder->join('etr_estado_transaccion', 'etr_estado_transaccion.etr_id = tco_transaccion_compra.tco_idetr');
        $builder->where('etr_estado_transaccion.etr_nombre', 'Aprobada');
        $result = $builder->get();
        $row = $result->getRow();
        return $row->total_aprobadas;
    }



}

?>