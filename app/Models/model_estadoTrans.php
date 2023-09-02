<?php

namespace App\Models;
use CodeIgniter\Model;

class mode_estadoTrans extends Model{

    protected $table = 'etr_estado_transaccion';
    protected $primaryKey = 'etr_id';
    protected $allowFields = ['etr_nombre', 'etr_descripcion']
}

?>