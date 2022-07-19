<?php
require "../config/conexion.php";

Class services
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar8($icon, $service, $description, $language)
    {
        $sql = "INSERT INTO services (icon, service, description, language)
        VALUES ('$icon', '$service', '$description', '$language')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar8($id_service, $icon, $service, $description, $language)
    {
        $sql = "UPDATE services SET icon = '$icon', service = '$service', description ='$description', language= '$language'
        WHERE id_service = '$id_service' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar8($id_service)
    {
        $sql = "SELECT*FROM services WHERE id_service = '$id_service'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar8()
    {
        $sql = "SELECT*FROM services";
        return ejecutarCOnsulta($sql);
    }

    public function eliminar8($id_service)
    {
        $sql = "DELETE FROM services WHERE id_service = '$id_service'";
        return ejecutarConsulta($sql);
    }
}

?>