<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/conexion.php";

Class geninfo
{
	//Implementamos nuestro constructor
    public function __construct()
    {
        
    }

	//Método para insertar registros
    public function insertar6($description, $location, $clocation, $age, $gender, $language)
    {
        $sql = "INSERT INTO geninfo (description, location, clocation, age, gender, language)
        VALUES ('$description', '$location', '$clocation', '$age', '$gender', '$language')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar6($id_geninfo, $description, $location, $clocation, $age, $gender,$language)
    {
        $sql = "UPDATE geninfo SET description= '$description', location= '$location', clocation= '$clocation', age = '$age', gender = '$gender', language = '$language' WHERE id_geninfo = '$id_geninfo' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar6($id_geninfo)
    {
        $sql = "SELECT*FROM geninfo WHERE id_geninfo = '$id_geninfo'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar6()
    {
        $sql = "SELECT*FROM geninfo";
        return ejecutarCOnsulta($sql);
    }
    
    public function eliminar6($id_geninfo)
    {
        $sql = "DELETE FROM geninfo WHERE id_geninfo = '$id_geninfo'";
        return ejecutarConsulta($sql);
    }
}

?>