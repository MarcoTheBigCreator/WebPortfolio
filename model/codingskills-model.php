<?php
require "../config/conexion.php";

Class codingskills
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar1($language, $percentage)
    {
        $sql = "INSERT INTO codingskills (language, percentage)
        VALUES ('$language', '$percentage')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar1($id_codingskill, $language, $percentage)
    {
        $sql = "UPDATE codingskills SET language = '$language', percentage= '$percentage'
        WHERE id_codingskill = '$id_codingskill' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar1($id_codingskill)
    {
        $sql = "SELECT*FROM codingskills WHERE id_codingskill = '$id_codingskill'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar1()
    {
        $sql = "SELECT*FROM codingskills";
        return ejecutarCOnsulta($sql);
    }
}

?>