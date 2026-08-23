$("#frmAccesoCliente").on('submit', function(e)
{
	e.preventDefault();
	nombre_usuario=$("#nombre_usuario").val();
	password_usuario=$("#password_usuario").val();

	$.post("../ajax/usuariocliente.php?op=verificar",
        {"nombre_usuario":nombre_usuario, "password_usuario":password_usuario},
        function(data)
        {
           if (data!="null")
            {       
                $(location).attr("href","vistacliente.php");
            }else{
            	Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "¡Contraseña o Usuario Incorrectos!",
                        allowEscapeKey:false,
                        allowOutsideClick:false,
                        allowEnterKey:true,
                        stopKeydownPropagation:true,
                        imageUrl: "http://localhost/mi_tienda/img/logo.png",
                        imageHeight: 100,
                        imageAlt: "fondo"
    });
                }
            
        });
})