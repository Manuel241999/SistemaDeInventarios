const Formulario = document.querySelector('#miFormulario')

eventListeners()
function eventListeners(){
    Formulario.addEventListener('submit',validarFormulario)
  }



function validarFormulario() {
    console.log("XDXDXDXDXDXD");
    const tco_id = document.querySelector("#tco_cod_formulario").value;
    const tco_version = document.querySelector("#tco_version").value;
    const tco_fecha_ingreso = document.querySelector("#tco_fecha_ingreso").value;
    const tco_lugar = document.querySelector("#tco_lugar").value;

    if (tco_id === '' || tco_version === '' || tco_fecha_ingreso === '' || tco_lugar === '') {
        imprimirAlerta('Los campos no pueden ir vacios', 'error')
        return
    }
    return
}

function imprimirAlerta(msg,tipo){
    const divMensaje = document.createElement('div')
    divMensaje.classList.add('text-center','alert')  
    if(tipo === 'error'){
     divMensaje.classList.add('alert-danger')
    }else{
     divMensaje.classList.add('alert-success')
    }
    divMensaje.textContent = msg
    document.querySelector('#primario').insertBefore(divMensaje,formulario)

    setTimeout(() =>{
     divMensaje.remove()
    },3000)
 }