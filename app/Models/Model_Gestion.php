<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_Gestion extends Model
{
    
    protected $table = 'ges_gestion'; 
    protected $primaryKey = 'ges_id '; 

    protected $allowedFields = ['ges_codigo', 'ges_version', 'ges_fecha_implementacion', 'ges_fecha_gestion', 'ges_correlativo_interno', 'ges_motivo', 'ges_seccion', 'ges_unidad', 'ges_documento', 'ges_idtge', 'ges_idare', 'ges_idreg', 'ges_idsre', 'ges_iddep', 'ges_idper_registro']; 


    public function gesbajas(){
        $builder = $this->builder();
        $builder->select('COUNT(*) as total_bajas');
        $builder->join('tge_tipo_gestion', 'tge_tipo_gestion.tge_id = ges_gestion.ges_idtge');
        $builder->where('tge_tipo_gestion.tge_nombre', 'Baja');
        $result = $builder->get();
        $row = $result->getRow();
        return $row->total_bajas;
    }

    public function gesperdidas(){
        $builder = $this->builder();
        $builder->select('COUNT(*) as total_perdidas');
        $builder->join('tge_tipo_gestion', 'tge_tipo_gestion.tge_id = ges_gestion.ges_idtge');
        $builder->where('tge_tipo_gestion.tge_nombre', 'Perdido');
        $result = $builder->get();
        $row = $result->getRow();
        return $row->total_perdidas;
    }

    public function gestrasladadas(){
        $builder = $this->builder();
        $builder->select('COUNT(*) as total_trasladadas');
        $builder->join('tge_tipo_gestion', 'tge_tipo_gestion.tge_id = ges_gestion.ges_idtge');
        $builder->where('tge_tipo_gestion.tge_nombre', 'Traslado');
        $result = $builder->get();
        $row = $result->getRow();
        return $row->total_trasladadas;
    }


    public function ListadoGestiones(){
        $builder = $this->builder();
        $builder->join('tge_tipo_gestion', 'tge_tipo_gestion.tge_id = ges_gestion.ges_idtge');
        $result = $builder->get();
        return $result->getResult();
    }

    
}
