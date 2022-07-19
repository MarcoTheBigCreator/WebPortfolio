<?php
require "../config/conexion.php";

Class experience
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar5($date, $title, $namejob, $description, $language)
    {
        $sql = "INSERT INTO experience (date, title, namejob, description, language)
        VALUES ('$date', '$title', '$namejob', '$description', '$language')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar5($id_experience, $date, $title, $namejob, $description, $language)
    {
        $sql = "UPDATE experience SET date = '$date', title = '$title', namejob = '$namejob', description ='$description', language= '$language'
        WHERE id_experience = '$id_experience' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar5($id_experience)
    {
        $sql = "SELECT*FROM experience WHERE id_experience = '$id_experience'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar5()
    {
        $sql = "SELECT*FROM experience";
        return ejecutarCOnsulta($sql);
    }
    
    public function eliminar5($id_experience)
    {
        $sql = "DELETE FROM experience WHERE id_experience = '$id_experience'";
        return ejecutarConsulta($sql);
    }
}

?>