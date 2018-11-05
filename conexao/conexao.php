<?php 
	//atribuindo valores
	$server 	 = "localhost";
	$database    = "andes";
	$user  		 = "root";
	$password    = "";

	//criando conexao

	$conecta  = mysqli_connect($server , $user , $password , $database);

	//checando conexao
	if ( !$conecta ) {
		die("Falha ao Conectar com o banco de dados");
	}

 ?>