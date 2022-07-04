<?php
require "../config/conexion.php";

Class portfolio
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar7($class, $link, $imgroute, $name, $description, $language)
    {
        $sql = "INSERT INTO portfolio (class, link, imgroute, name, description, language)
        VALUES ('$class', '$link', '$imgroute', '$name', '$description', '$language')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar7($id_portfolio, $class, $link, $imgroute, $name, $description, $language)
    {
        $sql = "UPDATE portfolio SET class = '$class', link= '$link', imgroute= '$imgroute', name = '$name', description = '$description', language= '$language'
        WHERE id_portfolio = '$id_portfolio' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar7($id_portfolio)
    {
        $sql = "SELECT*FROM portfolio WHERE id_portfolio = '$id_portfolio'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar7()
    {
        $sql = "SELECT*FROM portfolio";
        return ejecutarCOnsulta($sql);
    }
}

?>