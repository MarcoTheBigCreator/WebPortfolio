<?php 
session_start();
require_once "../model/designskills-model.php";

$designskills = new designskills();

$id_designskill=isset($_POST["id_designskill"])? limpiarCadena($_POST["id_designskill"]):"";
$skill=isset($_POST["skill"])? limpiarCadena($_POST["skill"]):"";
$percentage=isset($_POST["percentage"])? limpiarCadena($_POST["percentage"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar3':

		if (empty($id_designskill)){
			$rspta = $designskills -> insertar3($skill, $percentage);
            echo $rspta ? "design skill registered" : "design skill not registered";
		}
		else {
            $rspta = $designskills -> editar3($id_designskill, $skill, $percentage);
            echo $rspta ? "design skill updated" : "design skill not updated";
		}

    break;

    case 'mostrar3':
		$rspta = $designskills->mostrar3($id_designskill);
 		//Codificar el resultado utilizando json
        echo json_encode($rspta);
        break;
	break;

	case 'listar3':
		$rspta=$designskills->listar3();
 		//Vamos a declarar un array
        $data= Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>'<button class="btn btn-warning" onclick="mostrar3('.$reg->id_designskill.')"><i class="fas fa-pencil-alt"></i></button>',
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