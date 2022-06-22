<?php
require "../config/conexion.php";

Class geninfo
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar($description, $location, $clocation, $age, $gender)
    {
        $sql = "INSERT INTO geninfo (description, location, clocation, age, gender)
        VALUES ('$description', '$location', '$clocation', '$age', '$gender')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar($id_geninfo, $description, $location, $clocation, $age, $gender)
    {
        $sql = "UPDATE geninfo SET description = '$description', location= '$location, clocation= '$clocation', age = '$age', gender = '$gender'
        WHERE id_geninfo = '$id_geninfo' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar($id_geninfo)
    {
        $sql = "SELECT*FROM geninfo WHERE id_geninfo = '$id_geninfo'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar()
    {
        $sql = "SELECT*FROM geninfo";
        return ejecutarCOnsulta($sql);
    }
}

?>