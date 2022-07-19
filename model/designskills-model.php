<?php
require "../config/conexion.php";

Class designskills
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar3($skill, $percentage, $language)
    {
        $sql = "INSERT INTO designskills (skill, percentage, language)
        VALUES ('$skill', '$percentage', '$language')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar3($id_designskill, $skill, $percentage, $language)
    {
        $sql = "UPDATE designskills SET skill = '$skill', percentage= '$percentage', language= '$language'
        WHERE id_designskill = '$id_designskill' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar3($id_designskill)
    {
        $sql = "SELECT*FROM designskills WHERE id_designskill = '$id_designskill'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar3()
    {
        $sql = "SELECT*FROM designskills";
        return ejecutarCOnsulta($sql);
    }

    public function eliminar3($id_designskill)
    {
        $sql = "DELETE FROM designskills WHERE id_designskill = '$id_designskill'";
        return ejecutarConsulta("$sql");
    }
}

?>