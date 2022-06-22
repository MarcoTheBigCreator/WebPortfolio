<?php 
session_start();
require_once "../model/datafilter-model.php";

$datafilter = new datafilter();

$id_datafilter=isset($_POST["id_datafilter"])? limpiarCadena($_POST["id_datafilter"]):"";
$class=isset($_POST["class"])? limpiarCadena($_POST["class"]):"";
$filter=isset($_POST["filter"])? limpiarCadena($_POST["filter"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':

		if (empty($id_datafilter)){
			$rspta = $datafilter -> insertar($class, $filter);
            echo $rspta ? "data filter registered" : "data filter not registered";
		}
		else {
            $rspta = $datafilter -> editar($id_datafilter, $class, $filter);
            echo $rspta ? "data filter updated" : "data filter not updated";
		}

    break;

    case 'mostrar':
		$rspta = $datafilter->mostrar($id_datafilter);
 		//Codificar el resultado utilizando json
        echo json_encode($rspta);
        break;
	break;

	case 'listar':
		$rspta=$datafilter->listar();
 		//Vamos a declarar un array
        $data= Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>$reg->id_datafilter,
                "1"=>$reg->class,
                "2"=>$reg->filter
                );
        }
        $results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
            "aaData"=>$data);
        echo json_encode($results);

	break;
}
?>