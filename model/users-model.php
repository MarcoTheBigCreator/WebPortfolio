<?php
require "../config/conexion.php";

Class users
{
	//Implementamos nuestro constructor
    public function __construct()
    {
    }

	//Método para insertar registros
    public function insertar9($user_name, $user_nick, $password, $user_type)
    {
        $sql = "INSERT INTO users (user_name, user_nick, password, user_type)
        VALUES ('$user_name', '$user_nick', '$password', '$user_type')";
        return ejecutarConsulta($sql);
    }

	//Método para editar registros
    public function editar9($id_user, $user_name, $user_nick, $password, $user_type)
    {
        $sql = "UPDATE users SET user_name = '$user_name', user_nick = '$user_nick', password = '$password', user_type = '$user_type'
        WHERE id_user = '$id_user' ";
        return ejecutarConsulta($sql);
    }
	
	//Método para mostrar registros
    public function mostrar9($id_user)
    {
        $sql = "SELECT*FROM users WHERE id_user = '$id_user'";
        return ejecutarConsultaSimpleFila($sql);
    }

	//Método para listar registros
    public function listar9()
    {
        $sql = "SELECT*FROM users";
        return ejecutarCOnsulta($sql);
    }

    public function eliminar9($id_user)
    {
        $sql = "DELETE FROM users WHERE id_user = '$id_user'";
        return ejecutarConsulta($sql);
    }

    public function verificar($user_name,$user_key)
	{
		$sql="SELECT * FROM users WHERE user_name='$user_name' AND password ='$user_key'";
		
		return ejecutarConsulta($sql);		
	}
}

?>