<?php

	require_once("config.php");

	//$sql = new Sql();

	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	//echo json_encode($usuarios);

/* //Carrega 1 usuario apenas pelo ID
	$cassio = new Usuario();

	$cassio->loadById(3);

	
	echo $cassio;
*/

	//Carrega uma Lista de Usuários
	//$lista = Usuario::getList();

	//echo json_encode($lista);
	//Carrega um lista de usuários buscando pelo login
	//$search = Usuario::search("jo");

	//echo json_encode($search);


	//Carrega um usuário usando o login e senha
	$usuario = new Usuario();

	$usuario->login("teste", "dream123");

	echo $usuario;

?>