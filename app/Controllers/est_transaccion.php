<?php

public function InicioAdmin(){
    return vieww ('.Home\Main');
}

#region Metodo: Insertar
public function RegistroestTransaccion(){
    $etr_nombre = $this->request->getPost('etr_nombre');
    $etr_descripcion = $this->request->getPost('etr_descripcion');


    $modelestTransaccion = model('model_estadoTrans');
    $estTransData = [
        'etr_nombre' => $etr_nombre,
        'etr_descripcion' => $etr_descripcion
    ];

    $response = $modelestTransaccion ->insert($estTransData);

    if(!response){
        return redirect()->route('#')->With('error','Hubo un problema al ingresar un estado!')
    }else{
        return redirect()->route('#')->With('msj','Estado de transaccion registrado!')
    }
}
#endregion 

#region Metodo: Listar
public function ListarEstTransaccion(){
    $modeloestTransaccion = model('model_estadoTrans');
    $estTransaccion = $modelestTransaccion->findAll();
}
#endregion

#region Metodo: Actualizar / Modificar
public function ActualziarestTransaccion(){
    $etr_id = $this->request->getPost('etr_id');
    $etr_nombre = $this->request->getPost('etr_nombre');
    $etr_descripcion = $this->request->getPost('etr_descripcion');

    $modelestTransaccion = model('model_estadoTrans');
    $modelestData = [
        'etr_nombre' => $etr_nombre,
        'etr_descipcion' => $etr_descripcion
    ]

    $response = $modelestTransaccion->ActualziarestTransaccion($modelestData, $etr_id);

    
    if(!response){
        return redirect()->route('#')->with('error', 'estado de transaccion no actualizada, valide los datos');
    }else{
        return redirect()->route('#')->with('msj','estado de transaccion actualizada exitosamente.');
    }
}

#endregion
?>