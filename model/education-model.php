<?php
require "../config/conexion.php";

Class education
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar4($date, $title, $nameschool, $description, $language)
    {
        $sql = "INSERT INTO education (date, title, nameschool, description, language)
        VALUES ('$date', '$title', '$nameschool', '$description', '$language')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar4($id_education, $date, $title, $nameschool, $description, $language)
    {
        $sql = "UPDATE education SET date = '$date', title = '$title', nameschool = '$nameschool', description = '$description', language= '$language'
        WHERE id_education = '$id_education' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar4($id_education)
    {
        $sql = "SELECT*FROM education WHERE id_education = '$id_education'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar4()
    {
        $sql = "SELECT*FROM education";
        return ejecutarCOnsulta($sql);
    }

    public function eliminar4($id_education)
    {
        $sql = "DELETE FROM education WHERE id_education = '$id_education'";
        return ejecutarConsulta("$sql");
    }
}

?>