var tabla;

//funcion que se ejecuta al inicio
function init(){
   $("#register-form").on("submit",function(e){
   	guardaryeditar(e);
   });
 }
 function limpiar(){

	$("#nombre").val("");
	$("#num_documento").val("");
	$("#direccion").val("");
	$("#telefono").val("");
	$("#email").val("");
	$("#password").val("");
	$("#login").val("");
	$("#imagen").val("");
	$("#idpersona").val("");
	
	
}

//funcion para guardaryeditar
function guardaryeditar(e){
     e.preventDefault();//no se activara la accion predeterminada 
     $("#registrarse").prop("disabled",true);
     var formData=new FormData($("#register-form")[0]);

     $.ajax({
     	url: "../ajax/usuariocliente.php?op=guardaryeditar",
     	type: "POST",
     	data: formData,
     	contentType: false,
     	processData: false,
		 
     
     });
	 limpiar();

}




init();