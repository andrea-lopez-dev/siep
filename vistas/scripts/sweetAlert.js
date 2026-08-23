function fntRegistarUsuario(id){
Swal.fire({
    title: "¡Te da la Bienvenida!",
    text: "Su Usuario ha cido Registrado Correctamente...",
    icon: "success",
    allowEscapeKey:false,
    allowOutsideClick:false,
    allowEnterKey:true,
    stopKeydownPropagation:true,
    imageUrl: "http://localhost/mi_tienda/img/logo.png",
  imageHeight: 100,
  imageAlt: "fondo"
  });
}

function EndSessionClient(id){
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger"
    },
    buttonsStyling: false
  });
  swalWithBootstrapButtons.fire({
    title: "¡Su Sesión sera Finalizada!",
    text: "¿Desea Continuar?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Si, Continuar!",
    cancelButtonText: "No, Cancelar!",
    reverseButtons: true,
    allowEscapeKey:false,
    allowOutsideClick:false,
    allowEnterKey:true,
    stopKeydownPropagation:true
  }).then((result) => {
    if (result.isConfirmed) {
      swalWithBootstrapButtons.fire({
        title: "¡Sesión Finalizada!",
        text: "Gracias por Visitarnos...",
        icon: "success"
      });
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire({
        title: "Cancelado",
        text: "Su Sesión sigue activa:)",
        icon: "error"
      });
    }
  });
  }

