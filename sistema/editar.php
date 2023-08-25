<?php include_once 'lock.php';
include_once '../database/musica.dao.php'; 

if (!isset($_GET['id_musica']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$result = achar_musica($_GET['id_musica']);
	if($result == null)
	{
		header('location:index.php?msg=idinvalido');
	}
	else
	{
		$musica = mysqli_fetch_assoc($result);
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Disco Hoow - Editar</title>
</head>
<body class= "container-fluid">
		<h1>Disco Hoow - Editar Musica!</h1>

	<p>
		<a href="index.php">Cancelar Edição!</a>

	</p>

	<h3> Editar informações da musica:</h3>
<div class="col-3">

	<form action="editado.php" method="post">

		<p>
			<label class="form-label">Título</label><br>
			<input type="text" name="titulo" required value="<?php echo $musica['titulo'] ?>" class="form-control">
		</p>

		<p>
			<label class="form-label">Álbum</label><br>
			<input type="text" name="album" required value="<?php echo $musica['album'] ?>" class="form-control">
		</p>

		<p>
			<label class="form-label">Cantor</label><br>
			<input type="text" name="cantor" required value="<?php echo $musica['cantor'] ?>" class="form-control" class="form-control">
		</p>

		<p>
			<label class="form-label">Compositor</label><br>
			<input type="text" name="compositor" required value="<?php echo $musica['compositor'] ?>" class="form-control">
		</p>

		<p>
			<label class="form-label">Gênero</label><br>
			<input type="text" name="genero" required value="<?php echo $musica['genero'] ?>" class="form-control">
		</p>
		
		<p>
			<label class="form-label">Ano</label><br>
			<input type="number" name="ano" required value="<?php echo $musica['ano'] ?>" class="form-control">
		</p>
		<p>
			<input type="hidden" name="id_musica" value="<?php echo $musica['id_musica'] ?>">
			<button type="submit" name="salvar"class="btn btn-outline-secondary">Alterar</button>
		</p>

		

	</form>
</div>
</body>
</html>