<?php 
require_once "../modelos/Articuloscliente.php";

$clienteproducto=new Clienteproducto();

switch ($_GET["op"]) {


    case 'mostrar':
		$rspta=$clienteproducto->mostrar($idarticulo);
		echo json_encode($rspta);
		break;

    case 'listar':
		$rspta=$clienteproducto->listar();
		$data=Array();

	
		$results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
		echo json_encode($results);
		break;

		case 'selectCategoria':
			require_once "../modelos/Categoria.php";
			$categoria=new Categoria();

			$rspta=$categoria->select();

			while ($reg=$rspta->fetch_object()) {
				echo '<option value=' . $reg->idcategoria.'>'.$reg->nombre.'</option>';
			}
			break;
}
 ?>