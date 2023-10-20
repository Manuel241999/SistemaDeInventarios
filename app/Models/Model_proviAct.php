<?php

namespace App\Models;
use CodeIgniter\Model;

class Model_proviAct extends Model
{

    protected $table = 'act_activo';
    protected $primaryKey = 'act_id';
    protected $protectFields = false;
    protected $allowFields = ['act_nombre','act_descripcion','act_fecha'];

}

?>