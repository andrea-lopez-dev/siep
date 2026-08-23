<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Cliente{


	//implementamos nuestro constructor
public function __construct(){

}

public function editar($idpersona,$imagen){
	$sql="UPDATE persona SET imagen='$imagen' 
	WHERE idpersona='$idpersona'";
	 ejecutarConsulta($sql);
	 }
}

 ?>
