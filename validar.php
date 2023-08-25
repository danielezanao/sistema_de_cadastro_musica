<?php 


if(!isset($_POST['entrar']) || empty($_POST['usuario']) || empty($_POST['senha']))

{
	header('location:index.php?msg=invalido');
}

else
{
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];


		include_once 'database/usuario.dao.php';

		$result = achar_usuario($usuario, $senha);


		if ($result)
		{
			session_start();
			$_SESSION['usuario'] = $usuario;
			$_POST['senha'] = $senha;

			header('location:sistema/index.php');

		}
		else
		{
			header('location:index.php?msg=invalido!');
		}
}









?>