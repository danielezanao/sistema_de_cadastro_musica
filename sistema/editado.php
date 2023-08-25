<?php include_once 'lock.php';


if(!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['album']) || empty($_POST['cantor']) || empty($_POST['compositor']) || empty($_POST['genero']) || empty($_POST['ano'])) 
{
	header('location:index.php?msg=editarembranco');
}
else
{
	$id_musica  = $_POST['id_musica'];
	$titulo     = $_POST['titulo'];
	$album      = $_POST['album'];
	$cantor     = $_POST['cantor'];
	$compositor = $_POST['compositor'];
	$genero     = $_POST['genero'];
	$ano        = $_POST['ano'];

	include_once '../database/musica.dao.php';

	$result = editar_musica($id_musica, $titulo, $album, $cantor, $compositor, $genero, $ano);

	if ($result)
	{
		header('location:index.php?msg=editado!');
	}
	else 
	{
		header('location:index.php?msg=erronaedição');
	}


}


 ?>