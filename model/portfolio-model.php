<?php
require "../config/conexion.php";

Class portfolio
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar($class, $link, $imgroute, $name, $description)
    {
        $sql = "INSERT INTO portfolio (class, link, imgroute, name, description)
        VALUES ('$class', '$link', '$imgroute', '$name', '$description')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar($id_portfolio, $class, $link, $imgroute, $name, $description)
    {
        $sql = "UPDATE portfolio SET class = '$class', link= '$link, imgroute= '$imgroute', name = '$name', description = '$description'
        WHERE id_portfolio = '$id_portfolio' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar($id_portfolio)
    {
        $sql = "SELECT*FROM portfolio WHERE id_portfolio = '$id_portfolio'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar()
    {
        $sql = "SELECT*FROM portfolio";
        return ejecutarCOnsulta($sql);
    }
}

?>