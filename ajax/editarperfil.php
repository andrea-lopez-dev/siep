<?php 
session_start();

require_once "../modelos/EditarPerfil.php";

$cliente=new Cliente();

$idpersona=isset($_POST["idpersona"])? limpiarCadena($_POST["idpersona"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";


switch ($_GET["op"]) {
	case 'guardaryeditar':
		if (!file_exists($_FILES['imagen']['tmp_name'])|| !is_uploaded_file($_FILES['imagen']['tmp_name'])) {
			$imagen=$_POST["imagenactual"];
		}else{
			$ext=explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg" || $_FILES['imagen']['type']=="image/png") {
				$imagen=round(microtime(true)).'.'. end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/clientes/".$imagen);
			}
		}

	
	header("Location: ../index.php");
	if (empty($idpersona)) {
		$rspta=$cliente->editar($idpersona,$imagen);
		echo $rspta ? "Datos actualizados correctamente" : "No se pudo actualizar los datos";
	}
	break;


   }
 ?>