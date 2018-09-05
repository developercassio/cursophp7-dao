<?php

	require_once("config.php");

	//$sql = new Sql();

	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	//echo json_encode($usuarios);

/* //Carrega 1 usuario apenas pelo ID
	$cassio = new Usuario();

	$cassio->loadById(3);

	
	echo $cassio;
	//Código: Você cria com todo o cuidado, acompanha seu crescimento mas, chega uma hora que ele decide ter suas próprias vontades. #umavidabaseadaemdebug
*/

	//Carrega uma Lista de Usuários
	//$lista = Usuario::getList();

	//echo json_encode($lista);
	//Carrega um lista de usuários buscando pelo login
	//$search = Usuario::search("jo");

	//echo json_encode($search);


	//Carrega um usuário usando o login e senha
	//$usuario = new Usuario();

	//$usuario->login("teste", "dream123");

	//echo $usuario;

	//Inserir novo usuário

	/*$aluno = new Usuario();

	$aluno->setDeslogin("aluno6");
	$aluno->setDessenha("@lun06");		

	$aluno->insert();

	*/
	$usuario = new Usuario();

	$usuario->loadById(3);

	$usuario->update("professor","&534&");

	echo $usuario;

?>