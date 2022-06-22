<?php 
session_start();
require_once "../model/designskills-model.php";

$designskills = new designskills();

$id_designskill=isset($_POST["id_designskill"])? limpiarCadena($_POST["id_designskill"]):"";
$skill=isset($_POST["skill"])? limpiarCadena($_POST["skill"]):"";
$percentage=isset($_POST["percentage"])? limpiarCadena($_POST["percentage"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':

		if (empty($id_designskill)){
			$rspta = $designskills -> insertar($skill, $percentage);
            echo $rspta ? "design skill registered" : "design skill not registered";
		}
		else {
            $rspta = $designskills -> editar($id_designskill, $skill, $percentage);
            echo $rspta ? "design skill updated" : "design skill not updated";
		}

    break;

    case 'mostrar':
		$rspta = $designskills->mostrar($id_designskill);
 		//Codificar el resultado utilizando json
        echo json_encode($rspta);
        break;
	break;

	case 'listar':
		$rspta=$designskills->listar();
 		//Vamos a declarar un array
        $data= Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>$reg->id_designskill,
                "1"=>$reg->skill,
                "2"=>$reg->percentage
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