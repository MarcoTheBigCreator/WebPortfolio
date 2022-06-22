<?php
require "../config/conexion.php";

Class experience
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar($date, $title, $namejob, $description)
    {
        $sql = "INSERT INTO experience (date, title, namejob, description)
        VALUES ('$date', '$title', '$namejob', '$description')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar($id_experience, $date, $title, $namejob, $description)
    {
        $sql = "UPDATE experience SET date = '$date', title = '$title', namejob = '$namejob', description ='$description'
        WHERE id_experience = '$id_experience' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar($id_experience)
    {
        $sql = "SELECT*FROM experience WHERE id_experience = '$id_experience'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar()
    {
        $sql = "SELECT*FROM experience";
        return ejecutarCOnsulta($sql);
    }
}

?>