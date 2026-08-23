var tabla;

function init(){
   $("#formulario").on("submit",function(e){
   	guardaryeditar(e);
   });
 }


 function limpiar(){

	$("#imagen").val("");
	
	
}

 function guardaryeditar(e){
     e.preventDefault();//no se activara la accion predeterminada 
     $("#btnGuardar").prop("disabled",true);
     var formData=new FormData($("#formulario")[0]);

    $.ajax({
        url: "../ajax/editarperfil.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        

    });

}



init();
