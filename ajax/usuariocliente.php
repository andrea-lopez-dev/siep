<?php 
session_start();

require_once "../modelos/Usuariocliente.php";

$cliente=new Cliente();

$idpersona=isset($_POST["idpersona"])? limpiarCadena($_POST["idpersona"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$password= isset($_POST["password"])? limpiarCadena($_POST["password"]):"";
$tipo_persona=isset($_POST["tipo_persona"])? limpiarCadena($_POST["tipo_persona"]):"";
$tipo_documento=isset($_POST["tipo_documento"])? limpiarCadena($_POST["tipo_documento"]):"";
$num_documento=isset($_POST["num_documento"])? limpiarCadena($_POST["num_documento"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
$login=isset($_POST["login"])? limpiarCadena($_POST["login"]):"";
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
	
		$passwordhash=hash("SHA256", $password);
	if (empty($idpersona)) {
		$rspta=$cliente->insertar($tipo_persona='Cliente',$nombre,$passwordhash,$tipo_documento,$num_documento,$direccion,$telefono,$email,$login,$imagen);
		echo $rspta ? "Datos registrados correctamente" : "No se pudo registrar todos los datos del usuario";
	?>
	  <script>
Swal.fire({
    title: "¡Te da la Bienvenida!",
    text: "<?$rspta;?>",
    icon: "success",
    allowEscapeKey:false,
    allowOutsideClick:false,
    allowEnterKey:true,
    stopKeydownPropagation:true,
    imageUrl: "http://localhost/mi_tienda/img/logo.png",
  imageHeight: 100,
  imageAlt: "fondo"
  });
	  </script>



	<?php
	header("Location: ../index.php");
	}else{
		$rspta=$cliente->editar($idpersona,$tipo_persona,$nombre,$passwordhash,$tipo_documento,$num_documento,$direccion,$telefono,$email,$login,$imagen);
		echo $rspta ? "Datos actualizados correctamente" : "No se pudo actualizar los datos";
	}
	break;

  case 'verificar':
	$nombre_usuario=$_POST['nombre_usuario'];
	$password=$_POST['password_usuario'];
 
	 
	

	//Hash SHA256 en la contraseña
	$passwordhash=hash("SHA256", $password);
	
	$rspta=$cliente->verificar($nombre_usuario, $passwordhash);

	$fetch=$rspta->fetch_object();
	if (isset($fetch)) {
		# Declaramos la variables de sesion
		$_SESSION['idpersona']=$fetch->idpersona;
		$_SESSION['nombre']=$fetch->nombre;
		$_SESSION['imagen']=$fetch->imagen;
		$_SESSION['login']=$fetch->login;
		$_SESSION['tipo_cliente']=$fetch->tipo_cliente;

	}
	echo json_encode($fetch);
	break;
	case 'salir':
	   //limpiamos la variables de la secion
	session_unset();

	  //destruimos la sesion
	session_destroy();
		  //redireccionamos al login
	header("Location: ../index.php");
	break;

	break;
	

	

   }
 ?>