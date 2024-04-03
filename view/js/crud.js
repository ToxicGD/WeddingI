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

  function ClearForm() {
    document.getElementById("frmInvitados").reset();
}

function erase(obj) {

    let id = obj.children[0].innerHTML;
    console.log(id)
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "No se podra revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, borralo!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            let id = obj.children[0].innerHTML;
            //aquí se le agrega el id a borrar a la ruta en la cual se eliminan
            window.location = "index.php?route=erase&id="+id
        } else if (
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'No se ha borrado :)',
                'error'
            )
        }
    })
}

function edit(obj) {
    let id = obj.children[0].innerHTML;
    let nombre = obj.children[1].innerHTML;
    let acompanantes = obj.children[2].innerHTML;
    let mesa = obj.children[3].innerHTML;
    let codigo = obj.children[4].innerHTML;

    document.getElementById("txtNombreM").value = nombre;
    document.getElementById("intAcomM").value = acompanantes;
    document.getElementById("intMesaM").value = mesa;
    document.getElementById("txtInvitM").value = codigo;
    document.getElementById("txtIdM").value = id;
}

function validateMI(e){
    e.preventDefault();
    formulario = document.getElementById('frmUserModify');
    nombre = document.getElementById("txtNombreM");
    acompanantes = document.getElementById("intAcomM");
    mesa = document.getElementById("intMesaM");
    codigo = document.getElementById("txtInvitM");
    
    lVali = true;
    
    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (acompanantes.value==""){
        acompanantes.style.borderColor="red";
        ohSnap('Ingresar el numero de acompañantes...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (mesa.value==""){
        mesa.style.borderColor="red";
        ohSnap('Ingresar el numero de mesa...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (codigo.value==""){
        codigo.style.borderColor="red";
        ohSnap('Ingresar el codigo...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }

}