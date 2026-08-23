<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Cliente{


	//implementamos nuestro constructor
public function __construct(){

}

//metodo insertar regiustro
public function insertar($tipo_persona,$nombre,$password,$tipo_documento,$num_documento,$direccion,$telefono,$email,$login,$imagen){
	$sql="INSERT INTO persona (tipo_persona,nombre,password,tipo_documento,num_documento,direccion,telefono,email,login,imagen) VALUES ('$tipo_persona','$nombre','$password','$tipo_documento','$num_documento','$direccion','$telefono','$email','$login','$imagen')";
	return ejecutarConsulta($sql);
}
public function editar($idpersona,$tipo_persona,$nombre,$password,$tipo_documento,$num_documento,$direccion,$telefono,$email,$login,$imagen){
	$sql="UPDATE persona SET tipo_persona='$tipo_persona',nombre='$nombre',tipo_documento='$tipo_documento',num_documento='$num_documento',direccion='$direccion',telefono='$telefono',email='$email',login='$login',password='$password',imagen='$imagen' 
	WHERE idpersona='$idpersona'";
	 ejecutarConsulta($sql);
	 }

public function verificar($login,$password){

	$sql="SELECT idpersona,nombre,tipo_documento,num_documento,telefono,email,direccion,login,imagen FROM persona WHERE login='$login' AND password='$password'";
	 return ejecutarConsulta($sql);

}
}

 ?>
