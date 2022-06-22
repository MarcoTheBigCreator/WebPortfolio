<?php 
session_start();
require_once "../model/portfolio-model.php";

$portfolio = new portfolio();

$id_portfolio=isset($_POST["id_portfolio"])? limpiarCadena($_POST["id_portfolio"]):"";
$class=isset($_POST["class"])? limpiarCadena($_POST["class"]):"";
$link=isset($_POST["link"])? limpiarCadena($_POST["link"]):"";
$imgroute=isset($_POST["imgroute"])? limpiarCadena($_POST["imgroute"]):"";
$name=isset($_POST["name"])? limpiarCadena($_POST["name"]):"";
$description=isset($_POST["description"])? limpiarCadena($_POST["description"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':

		if (empty($id_portfolio)){
			$rspta = $portfolio -> insertar($class, $link, $imgroute, $name, $description);
            echo $rspta ? "portfolio registered" : "portfolio not registered";
		}
		else {
            $rspta = $portfolio -> editar($id_portfolio, $class, $link, $imgroute, $name, $description);
            echo $rspta ? "portfolio updated" : "portfolio not updated";
		}

    break;

    case 'mostrar':
		$rspta = $portfolio->mostrar($id_portfolio);
 		//Codificar el resultado utilizando json
        echo json_encode($rspta);
        break;
	break;

	case 'listar':
		$rspta=$portfolio->listar();
 		//Vamos a declarar un array
        $data= Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>$reg->id_portfolio,
                "1"=>$reg->class,
                "2"=>$reg->link,
                "3"=>$reg->imgroute,
                "4"=>$reg->name,
                "5"=>$reg->description
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