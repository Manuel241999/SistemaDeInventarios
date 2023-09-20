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
}

?>