<?php

namespace App\Models;
use CodeIgniter\Model;

class model_compras extends Model{

    protected $table = 'tco_transaccion_compra';
    protected $primaryKey = 'tco_id';
    protected $allowFields = ['tco_cantidad','tco_descripcion',
                    'tco_valor','tco_serie_factura','tco_numero_factura',
                    'tco_fecha_ingreso','tco_doc1','tco_doc2','tco_doc3',
                    'tco_doc4','tco_idetr','tco_idper_registro'];
}

?>