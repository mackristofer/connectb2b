<?php

    $dsn = "mysql:host=host4.hospedameusite.com.br;dbname=mtechcom_connectb2b;charset=utf8";
	$usuario = "mtechcom_m3tech";
	$senha = "sqlM3tech";
	
	try{
		
		$PDO = new PDO($dsn, $usuario, $senha);
		//echo "Conectado com sucesso";
		
	}catch (PDOException $erro){
		//echo "Erro: " . $erro->getMessage();
		echo "conexao_erro";
		exit;
	
	
	}
	
	//Criar a conexÃ£o
	//$conn = new mysqli($servidor, $usuario, $senha, $dbname);

?>