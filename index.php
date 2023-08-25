<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Disco Hoow - Home</title>
</head>
<body class= "container-fluid">

	<h1> Projeto final de cadastro de musicas no Disco Hoow </h1> 

	<h2> Acesse o formulario abaixo para entrar no sistema</h2>
<div class="col-3">

	<form action="validar.php" method="post">

		<p>
			<label class="form-label">Usuário: </label><br>
			<input type="text" name="usuario" required class="form-control">

		</p>

		<p>
			<label class="form-label">Senha:</label><br>
			<input type="password" name="senha"required class="form-control">

		</p>

		<p>
			<button type="submit" name="entrar" class="btn btn-outline-secondary">Acessar</button>

		</p>
		

	</form>
</div>
</body>
</html>