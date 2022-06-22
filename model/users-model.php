<?php
require "../config/conexion.php";

Class users
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar($name, $nickname, $pass, $type)
    {
        $sql = "INSERT INTO users (name, nickname, pass, type)
        VALUES ('$name', '$nickname', '$pass', '$type')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar($id_user, $name, $nickname, $pass, $type)
    {
        $sql = "UPDATE users SET name = '$name', nickname = '$nickname', pass = '$pass', type = '$type'
        WHERE id_user = '$id_user' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar($id_user)
    {
        $sql = "SELECT*FROM users WHERE id_user = '$id_user'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar()
    {
        $sql = "SELECT*FROM users";
        return ejecutarCOnsulta($sql);
    }
}

?>