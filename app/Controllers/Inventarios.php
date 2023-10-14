<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inventarios extends BaseController
{
    
    public function HomeInventario()
   {

    $modelCompras = model('model_compras');
    $tcopendientes = $modelCompras->tcopendientes();
    $tcorechazadas = $modelCompras->tcorechazadas();
    $tcoaprobadas = $modelCompras->tcoaprobadas();

    $modelgestiones = model('Model_Gestion');
    $gesbajas = $modelgestiones->gesbajas();
    $gesperdidas = $modelgestiones->gesperdidas();
    $gestrasladadas = $modelgestiones->gestrasladadas();
    $ListadoGestiones = $modelgestiones->ListadoGestiones();

    $data = ['tcopendientes' => $tcopendientes,
    'tcorechazadas' => $tcorechazadas,
    'tcoaprobadas' => $tcoaprobadas,
    'gesbajas' => $gesbajas,
    'gesperdidas' => $gesperdidas,
    'gestrasladadas' => $gestrasladadas,
    'ListadoGestiones' => $ListadoGestiones
];
        return view('Inventarios/HomeInventario', $data);    
   }

   public function MovimientodeBien(){
        return view('Inventarios/TrasladodeBienes');
   }


    public function ListarCompraInventario()
    {
        $estTransaccion = model('model_estadoTrans');
        $est_transaccion = $estTransaccion->findAll();

        $model = model('Model_Login');
        $usuarios = $model->findAll();

        $modelCompras = model('model_compras');

        $ListadotcotcaactiacRechazadas = $modelCompras->ListadotcotcaactiacRechazadas();
        $ListadotcotcaactiacAprobadas = $modelCompras->ListadotcotcaactiacAprobadas();
        $ListadotcotcaactiacPendientes = $modelCompras->ListadotcotcaactiacPendientes();

        $comprasrechazadas = $modelCompras->ListadoComprasRechazadas();
        $comprasaprobadas = $modelCompras->ListadoComprasAprobadas();
        $ListadoPendientes = $modelCompras->ListadoComprasPendientes();
        $ListadoEstados = $modelCompras->ListadoEstados();
        $listacompras = $modelCompras->findAll();

        $data = ['listacompras' => $listacompras,
                'comprasrechazadas' => $comprasrechazadas,
                'comprasaprobadas' => $comprasaprobadas,
                'usuarios' => $usuarios,
                'est_transaccion' => $est_transaccion,
                'ListadoEstados' => $ListadoEstados,
                'ListadoPendientes' => $ListadoPendientes,
                'ListadotcotcaactiacRechazadas' => $ListadotcotcaactiacRechazadas,
                'ListadotcotcaactiacAprobadas' => $ListadotcotcaactiacAprobadas,
                'ListadotcotcaactiacPendientes' => $ListadotcotcaactiacPendientes
    ];
    // {
    //     $estTransaccion = model('model_estadoTrans');
    //     $est_transaccion = $estTransaccion->findAll();

    //     $model = model('Model_Login');
    //     $usuarios = $model->findAll();
    //     $data = ['usuarios' => $usuarios,
    //     'est_transaccion' => $est_transaccion
    // ];
        return view('Inventarios/ListarCompra',$data);
    }

    public function IngresoTablaGeneral()
    {
         return view('Inventarios/TablaGeneral');    
    }

    public function ListadoTablaGeneral()
    {
        return view('Inventario/ReportesTablaGeneral');
    }



    public function actualizar_estadodescriptco()
    {
        $tco_id = $this->request->getPost('tco_id');
        // Inserta el usuario en la base de datos 
        $comprasModel = model('model_compras'); // Asegúrate de tener un modelo de usuarios
        $comprasData = [
            'tco_idetr' => $this->request->getPost('tco_idetr'),
            'tco_descripcion' => $this->request->getPost('tco_descripcion')
        ];
        $response = $comprasModel->ActualizarEstadotco($comprasData, $tco_id);

        if(!$response){
            return redirect()->route('ListarCompraInventario')->with('error', 'Transaccion no registrada, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListarCompraInventario')->with('msj', 'Transaccion Registrada con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }



    public function actualizarinventario_inventarioactivov2()
    {
        $iac_id = $this->request->getPost('iac_id');
        // Inserta el usuario en la base de datos 
        $inventarioactivoModel = model('Model_InventarioActivoV2'); // Asegúrate de tener un modelo de usuarios
        $inventarioactivoData = [
            'iac_idtca' => $this->request->getPost('iac_idtca'),
            'iac_idscu' => $this->request->getPost('iac_idscu'),
            'iac_idcsi' => $this->request->getPost('iac_idcsi'),
            'iac_idper_responsable' => $this->request->getPost('iac_idper_responsable'),
        ];
        $response = $inventarioactivoModel->actualizarinventarioactivov2($inventarioactivoData, $iac_id);

        if(!$response){
            return redirect()->route('ListarCompraInventario')->with('error', 'Activo no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        }else{
            return redirect()->route('ListarCompraInventario')->with('msj', 'Activo Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
        
    }

}