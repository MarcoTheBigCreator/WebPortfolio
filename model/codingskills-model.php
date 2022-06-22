<?php
require "../config/conexion.php";

Class codingskills
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar($language, $percentage)
    {
        $sql = "INSERT INTO categoria (language, percentage)
        VALUES ('$language', '$percentage')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar($id_codingskill, $language, $percentage)
    {
        $sql = "UPDATE categoria SET language = '$language', percentage= '$percentage'
        WHERE id_codingskill = '$id_codingskill' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar($id_codingskill)
    {
        $sql = "SELECT*FROM categoria WHERE id_codingskill = '$id_codingskill'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar()
    {
        $sql = "SELECT*FROM codingskills";
        return ejecutarCOnsulta($sql);
    }
}

?>