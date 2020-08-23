
//Con posicionamiento - por defecto es centrada
//Posibles valores: 'top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', or 'bottom-end'.

$("#btnAgregar").click(function(){
    Swal.fire({
      position: 'top-center', //permite "top-end"
      type: 'success',
      title: 'El Registro se Ingresó con Exito !!!',
      showConfirmButton: false,
      timer: 5000 //el tiempo que dura el mensaje en ms
    });    
});


 
