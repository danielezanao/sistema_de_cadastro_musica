<?php include_once 'lock.php';

if (!isset($_GET['id_musica']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$id_musica = $_GET['id_musica'];

	include_once '../database/musica.dao.php';

	$result = deletar_musica($id_musica);

	if ($result)
	{
		header('location:index.php?msg=musicadeletada');
	}
	else 
	{
		header('location:index.php?msg=erroemdeletar');
	}
}









?>