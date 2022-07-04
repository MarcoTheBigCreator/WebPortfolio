<?php 
session_start();
require_once "../model/services-model.php";

$services = new services();

$id_service=isset($_POST["id_service"])? limpiarCadena($_POST["id_service"]):"";
$icon=isset($_POST["icon"])? limpiarCadena($_POST["icon"]):"";
$service=isset($_POST["service"])? limpiarCadena($_POST["service"]):"";
$description=isset($_POST["description"])? limpiarCadena($_POST["description"]):"";
$language=isset($_POST["language"])? limpiarCadena($_POST["language"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar8':

		if (empty($id_service)){
			$rspta = $services -> insertar8($icon, $service, $description, $language);
            echo $rspta ? "service registered" : "service not registered";
		}
		else {
            $rspta = $services -> editar8($id_service, $icon, $service, $description, $language);
            echo $rspta ? "service updated" : "service not updated";
		}

    break;

    case 'mostrar8':
		$rspta = $services->mostrar8($id_service);
 		//Codificar el resultado utilizando json
        echo json_encode($rspta);
        break;
	break;

	case 'listar8':
		$rspta=$services->listar8();
 		//Vamos a declarar un array
        $data= Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>'<button class="btn btn-warning" onclick="mostrar8('.$reg->id_service.')"><i class="fas fa-pencil-alt"></i></button>',
                "1"=>$reg->icon,
                "2"=>$reg->service,
                "3"=>$reg->description,
                "4"=>$reg->language
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