<?php 
session_start();
require_once "../model/users-model.php";

$users = new users();

$id_user=isset($_POST["id_user"])? limpiarCadena($_POST["id_user"]):"";
$name=isset($_POST["name"])? limpiarCadena($_POST["name"]):"";
$nickname=isset($_POST["nickname"])? limpiarCadena($_POST["nickname"]):"";
$pass=isset($_POST["pass"])? limpiarCadena($_POST["pass"]):"";
$type=isset($_POST["type"])? limpiarCadena($_POST["type"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar9':

		if (empty($id_user)){
			$rspta = $users -> insertar9($name, $nickname, $pass, $type);
            echo $rspta ? "users registered" : "users not registered";
		}
		else {
            $rspta = $users -> editar9($id_user, $name, $nickname, $pass, $type);
            echo $rspta ? "users updated" : "users not updated";
		}

    break;

    case 'mostrar9':
		$rspta = $users->mostrar9($id_user);
 		//Codificar el resultado utilizando json
        echo json_encode($rspta);
        break;
	break;

	case 'listar9':
		$rspta=$users->listar9();
 		//Vamos a declarar un array
        $data= Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>'<button class="btn btn-warning" onclick="mostrar9('.$reg->id_user.')"><i class="fas fa-pencil-alt"></i></button>',
                "1"=>$reg->name,
                "2"=>$reg->nickname,
                "3"=>$reg->pass,
                "4"=>$reg->type
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