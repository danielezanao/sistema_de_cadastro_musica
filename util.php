<?php 

function validar_msg($msg)
{
	switch ($msg){
		case 'invalido':
			$retorno = '<h3> Preencha todos os dados para efetuar o login!<h3/>';
			break;

			case 'invalido!':
			$retorno = '<h3> Preencha todos os dados para efetuar o login!<h3/>';
			break;

			case 'cadastroembranco':
			$retorno = '<h3> Preencha todos os dados da musica para cadastrar!<h3/>';
			break;

			case 'editarembranco':
			$retorno = '<h3> Preencha todos os dados da musica!<h3/>';
			break;

			case 'cadastrado!':
			$retorno = '<h3>Musica cadastrada com sucesso!<h3/>';
			break;


			case 'erronocadastro!':
			$retorno = '<h3>Erro em cadastrar!<h3/>';
			break;
			

			case 'idinvalido!':
			$retorno = '<h3>Atenção musica invalida, repita a informção<h3/>';
			break;
			
			case 'musicadeletada!':
			$retorno = '<h3>Musica excluida com sucesso<h3/>';
			break;

			case 'erroemdeletar':
			$retorno = '<h3>Erro ao excluir musica tente novamente<h3/>';
			break;

			case 'editado!':
			$retorno = '<h3>Editado com sucesso <h3/>';
			break;


			case 'erronaedição':
			$retorno = '<h3>Erro ao editar musica tente novamente<h3/>';
			break;

			default:
				$retorno = '';
				break;
	}
	return $retorno;
	
}

 ?>