<?php 
session_start();
require_once "../model/experience-model.php";

$experience = new experience();

$id_experience=isset($_POST["id_experience"])? limpiarCadena($_POST["id_experience"]):"";
$date=isset($_POST["date"])? limpiarCadena($_POST["date"]):"";
$title=isset($_POST["title"])? limpiarCadena($_POST["title"]):"";
$namejob=isset($_POST["namejob"])? limpiarCadena($_POST["namejob"]):"";
$description=isset($_POST["description"])? limpiarCadena($_POST["description"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':

		if (empty($id_experience)){
			$rspta = $experience -> insertar($date, $title, $namejob, $description);
            echo $rspta ? "experience registered" : "experience not registered";
		}
		else {
            $rspta = $experience -> editar($id_experience, $date, $title, $namejob, $description);
            echo $rspta ? "experience updated" : "experience not updated";
		}

    break;

    case 'mostrar':
		$rspta = $experience->mostrar($id_experience);
 		//Codificar el resultado utilizando json
        echo json_encode($rspta);
        break;
	break;

	case 'listar':
		$rspta=$experience->listar();
 		//Vamos a declarar un array
        $data= Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>$reg->id_experience,
                "1"=>$reg->date,
                "2"=>$reg->title,
                "3"=>$reg->namejob,
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