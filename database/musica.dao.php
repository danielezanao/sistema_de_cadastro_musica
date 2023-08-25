<?php 
include_once 'conn.php';

function salvar_musica($titulo, $album,	$cantor, $compositor, $genero, $ano)
{
	$conn = conectar();

	$sql = "INSERT INTO musica_tb (titulo, album, cantor, compositor, genero, ano)
	VALUES('$titulo', '$album', '$cantor', '$compositor', '$genero', $ano)";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

		return false;
}

function buscar_musica()
{
	$conn = conectar();

	$sql = "SELECT * FROM musica_tb";

	$result = mysqli_query($conn, $sql);
	
	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}


function exibir_musica()
{
	$result = buscar_musica();

	if ($result == null)
	{
		return '<h3>Não há musicas para exibir</h3>';
	}
	else 
	{
		$retorno = '<div class="col-7">';
		$retorno .= '<table class="table table-hover">';

		$retorno .= '<tr>';
		$retorno .= '<th>ID #</th>';
		$retorno .= '<th>Título</th>';
		$retorno .= '<th>Album</th>';
		$retorno .= '<th>Cantor</th>';
		$retorno .= '<th>Compositor</th>';
		$retorno .= '<th>Gênero</th>';
		$retorno .= '<th>Ano</th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';
		$retorno .= '</tr>';



		while ($musica = mysqli_fetch_assoc($result))
		{
			$retorno .= '<tr>';


			$retorno .= "<td> ". $musica['id_musica']  . "</td>";
			$retorno .= "<td> ". $musica['titulo']     . "</td>";
			$retorno .= "<td> ". $musica['album']      . "</td>";
			$retorno .= "<td> ". $musica['cantor']     . "</td>";
			$retorno .= "<td> ". $musica['compositor'] . "</td>";
			$retorno .= "<td> ". $musica['genero']     . "</td>";
			$retorno .= "<td> ". $musica['ano']        . "</td>";
			$retorno .= "<td> ". link_deletar($musica['id_musica']) . "</td>";
			$retorno .= "<td> ". link_editar($musica['id_musica']) . "</td>";

			$retorno .='</tr>';
		}	

		$retorno .= '</table>';
		$retorno .= '</div>';
	}


	return $retorno;
}

function link_deletar($id_musica)
{
	$link = '<a href="deletar.php?id_musica='.$id_musica.'"
	onclick="return confirm(\'Tem certeza que deseja excluir esta musica?\')" class= "btn btn-outline-danger" >Deletar</a>';

	return $link;
}

function link_editar($id_musica)
{
	$link = '<a href="editar.php?id_musica='. $id_musica.'"class="btn btn-outline-info">Editar</a>';
	return $link;
}

function deletar_musica($id_musica)
{
	$conn = conectar();

	$sql = "DELETE FROM musica_tb WHERE id_musica = $id_musica";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}
	return false;
}

function achar_musica($id_musica)
{
	$conn = conectar();

	$sql = "SELECT * FROM musica_tb WHERE id_musica = $id_musica";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}
	return null;
}
function editar_musica($id_musica, $titulo, $album, $cantor, $compositor, $genero, $ano)
{
	$conn = conectar();

	$sql = "UPDATE musica_tb SET titulo = '$titulo', album = '$album', cantor = '$cantor', compositor = '$compositor', genero = '$genero', ano = $ano
	WHERE id_musica = $id_musica";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}
	return false;
}

?>