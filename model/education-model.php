<?php
require "../config/conexion.php";

Class education
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar($date, $title, $nameschool, $description)
    {
        $sql = "INSERT INTO education (date, title, nameschool, description)
        VALUES ('$date', '$title', '$nameschool', '$description')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar($id_education, $date, $title, $nameschool, $description)
    {
        $sql = "UPDATE education SET date = '$date', title = '$title', nameschool = '$nameschool', description = '$description'
        WHERE id_education = '$id_education' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar($id_education)
    {
        $sql = "SELECT*FROM education WHERE id_education = '$id_education'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar()
    {
        $sql = "SELECT*FROM education";
        return ejecutarCOnsulta($sql);
    }
}

?>