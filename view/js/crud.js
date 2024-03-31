function validateRe(e){
    e.preventDefault();
    formulario = document.getElementById('frmInvitados');
    nombre = document.getElementById('txtNombre');
    acompanantes = document.getElementById('intAcompanantes');
    mesa = document.getElementById('intMesa');
  
    lVali = true;
  //verifica que se hayan ingresado los datos de registro
    if (nombre.value == ""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (acompanantes.value == 0){
        acompanantes.style.borderColor="red";
        ohSnap('Ingresar el numero de acompañantes...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (mesa.value== 0){
        mesa.style.borderColor="red";
        ohSnap('Ingresar el numero de mesa...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }
  }