<?php
require "../config/conexion.php";

Class datafilter
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar2($class, $filter)
    {
        $sql = "INSERT INTO datafilter (class, filter)
        VALUES ('$class', '$filter')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar2($id_datafilter, $class, $filter)
    {
        $sql = "UPDATE datafilter SET class = '$class', filter= '$filter'
        WHERE id_datafilter = '$id_datafilter' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar2($id_datafilter)
    {
        $sql = "SELECT*FROM datafilter WHERE id_datafilter = '$id_datafilter'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar2()
    {
        $sql = "SELECT*FROM datafilter";
        return ejecutarCOnsulta($sql);
    }
}

?>