$("#frmAcceso").on('submit', function(e)
{
	e.preventDefault();
	logina=$("#logina").val();
	clavea=$("#clavea").val();

	$.post("../ajax/usuario.php?op=verificar",
        {"logina":logina, "clavea":clavea},
        function(data)
        {
           if (data!="null")
            {
            	$(location).attr("href","escritorio.php");
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