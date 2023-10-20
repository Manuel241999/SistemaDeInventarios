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

        $data = [
            'tcopendientes' => $tcopendientes,
            'tcorechazadas' => $tcorechazadas,
            'tcoaprobadas' => $tcoaprobadas,
            'gesbajas' => $gesbajas,
            'gesperdidas' => $gesperdidas,
            'gestrasladadas' => $gestrasladadas,
            'ListadoGestiones' => $ListadoGestiones
        ];
        return view('Inventarios/HomeInventario', $data);
    }

    public function MovimientodeBien()
    {
        return view('Inventarios/TrasladodeBienes');
    }


    public function ListarCompraInventario()
    {
        // Inserta el id en la base de datos 
        $tcaModel = model('Model_TransaccionCompraActivo');

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

        $data = [
            'listacompras' => $listacompras,
            'comprasrechazadas' => $comprasrechazadas,
            'comprasaprobadas' => $comprasaprobadas,
            'usuarios' => $usuarios,
            'est_transaccion' => $est_transaccion,
            'ListadoEstados' => $ListadoEstados,
            'ListadoPendientes' => $ListadoPendientes,
            'ListadotcotcaactiacRechazadas' => $ListadotcotcaactiacRechazadas,
            'ListadotcotcaactiacAprobadas' => $ListadotcotcaactiacAprobadas,
            'ListadotcotcaactiacPendientes' => $ListadotcotcaactiacPendientes,
        ];
        return view('Inventarios/ListarCompra', $data);
    }

    //ListadotcotcaactiacAprobadas

    public function IngresoTablaGeneral()
    {
        $tcaModel = model('Model_TransaccionCompraActivo');

        $tco_id = $this->request->getPost('tco_id');
        $listtca = $tcaModel->Listadotcabytco_id($tco_id);

        $estTransaccion = model('model_estadoTrans');
        $est_transaccion = $estTransaccion->findAll();

        $model = model('Model_Login');
        $usuarios = $model->findAll();

        $modelCompras = model('model_compras');

        $ListadotcotcaactiacAprobadas = $modelCompras->ListadotcotcaactiacAprobadas();

        $varidfactura = $this->request->getpost('tco_id');

        $data = [
            'varidfactura' => $varidfactura,
            'usuarios' => $usuarios,
            'ListadotcotcaactiacAprobadas' => $ListadotcotcaactiacAprobadas,
            'listtca' => $listtca,
        ];
        return view('Inventarios/TablaGeneral', $data);
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

        if (!$response) {
            return redirect()->route('ListarCompraInventario')->with('error', 'Transaccion no registrada, valide los datos.'); // Redirige al inicio de sesión después del registro
        } else {
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

        if (!$response) {
            return redirect()->route('ListarCompraInventario')->with('error', 'Activo no registrado, valide los datos.'); // Redirige al inicio de sesión después del registro
        } else {
            return redirect()->route('ListarCompraInventario')->with('msj', 'Activo Registrado con éxito.'); // Redirige al inicio de sesión después del registro
        }
    }



    public function actualizarMasivoInventario_Inventarioactivov2()
    {
        $inventarioactivoModel = model('Model_InventarioActivoV2');
        $tca_id = $this->request->getPost('tca_id');
        $noInventario = $this->request->getPost('iac_numero_inventario');
        $subCuenta = $this->request->getPost('iac_idscu');
        $cuentaSicoin = $this->request->getPost('iac_codigo_sicoin');
        $subCuentaSicoin = $this->request->getPost('iac_idccs');
        $NoTarjeta = $this->request->getPost('iac_numero_tarjeta');
        $personalResponsable = $this->request->getPost('iac_idper_responsable');
        $fechaIngresoResponsable = $this->request->getPost('per_fecha_creacion');
        $statusActivo = $this->request->getPost('iac_ideac');
        $subRegion = $this->request->getPost('iac_subreg');
        $fechaIngresoAlmacen = $this->request->getPost('iac_fecha_ingreso');
        $donaciones = $this->request->getPost('iac_donaciones');
        $folio = $this->request->getPost('iac_folio');
        $libro = $this->request->getPost('iac_libro');
        $observacion = $this->request->getPost('iac_observacion');

        $listaInvetarioActivo = $inventarioactivoModel->findAll();

        foreach ($listaInvetarioActivo as $listaInvetarioActivoV) {

            if ($listaInvetarioActivoV['iac_idtca'] == $tca_id) {
                $varIdiac[] = $listaInvetarioActivoV['iac_id'];
            }
        }
        $longitud = count($varIdiac);
        $insercionesExitosas = 0;
        for ($i = 0; $i < $longitud; $i++) {


            $inventarioactivodata = [
                'iac_idtca' => $tca_id,
                'iac_numero_inventario' => $noInventario,
                'iac_idscu' => $subCuenta[$i],
                'iac_codigo_sicoin' => $cuentaSicoin[$i],
                'iac_idccs' => $subCuentaSicoin[$i],

                'iac_numero_tarjeta' => $NoTarjeta[$i],
                'iac_idper_responsable' => $personalResponsable[$i],

                'per_fecha_creacion' => $fechaIngresoResponsable[$i],
                'iac_ideac' => $statusActivo[$i],
                'iac_subreg' => $subRegion[$i],
                'iac_fecha_ingreso' => $fechaIngresoAlmacen[$i],
                'iac_donaciones' => $donaciones[$i],
                'iac_folio' => $folio[$i],
                'iac_libro' => $libro[$i],
                'iac_observacion' => $observacion[$i],
            ];
            if ($inventarioactivoModel->actualizarinventarioactivov2($inventarioactivodata, $varIdiac[$i])) {
                $insercionesExitosas++;
            }
        }
    }
}
