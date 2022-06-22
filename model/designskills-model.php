<?php
require "../config/conexion.php";

Class designskills
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar($skill, $percentage)
    {
        $sql = "INSERT INTO designskills (skill, percentage)
        VALUES ('$skill', '$percentage')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar($id_designskill, $skill, $percentage)
    {
        $sql = "UPDATE designskills SET skill = '$skill', percentage= '$percentage'
        WHERE id_designskill = '$id_designskill' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar($id_designskill)
    {
        $sql = "SELECT*FROM designskills WHERE id_designskill = '$id_designskill'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar()
    {
        $sql = "SELECT*FROM designskills";
        return ejecutarCOnsulta($sql);
    }
}

?>