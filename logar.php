<?php
include "conexao.php" ;

$email = $_POST['email_app'];
$senha = $_POST['senha_app'];

$sql_login = "SELECT * FROM cadUsuarios WHERE emailUsuario = :EMAIL AND senhaUsuario = :SENHA";
$stmt = $PDO->prepare($sql_login);
$stmt->bindParam(':EMAIL', $email);
$stmt->bindParam(':SENHA', $senha);
$stmt->execute();

if($stmt->rowCount() > 0){
	$dados = $stmt->fetch(PDO::FETCH_OBJ);
$retornoapp = array("LOGIN"=>"SUCESSO", "NOME"=>$dados->nomeUsuario, "EMAIL"=>$dados->emailUsuario);
}else{
$retornoapp = array("LOGIN"=>"ERRO");	
}
echo json_encode($retornoapp);
?>