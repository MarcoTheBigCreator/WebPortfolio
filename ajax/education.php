<?php 
session_start();
require_once "../model/education-model.php";

$education = new education();

$id_education=isset($_POST["id_education"])? limpiarCadena($_POST["id_education"]):"";
$date=isset($_POST["date"])? limpiarCadena($_POST["date"]):"";
$title=isset($_POST["title"])? limpiarCadena($_POST["title"]):"";
$nameschool=isset($_POST["nameschool"])? limpiarCadena($_POST["nameschool"]):"";
$description=isset($_POST["description"])? limpiarCadena($_POST["description"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':

		if (empty($id_education)){
			$rspta = $education -> insertar($date, $title, $nameschool, $description);
            echo $rspta ? "education registered" : "education not registered";
		}
		else {
            $rspta = $education -> editar($id_education, $date, $title, $nameschool, $description);
            echo $rspta ? "education updated" : "education not updated";
		}

    break;

    case 'mostrar':
		$rspta = $education->mostrar($id_education);
 		//Codificar el resultado utilizando json
        echo json_encode($rspta);
        break;
	break;

	case 'listar':
		$rspta=$education->listar();
 		//Vamos a declarar un array
        $data= Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>$reg->id_education,
                "1"=>$reg->date,
                "2"=>$reg->title,
                "3"=>$reg->nameschool,
                "4"=>$reg->description
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