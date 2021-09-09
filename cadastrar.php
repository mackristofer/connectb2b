<?php

include "conexao.php" ;

$nome = $_POST['nome_app'];
$email = $_POST['email_app'];
$senha = $_POST['senha_app'];

$sql_verifica = "SELECT * FROM cadUsuarios WHERE emailUsuario = :EMAIL";
$stmt = $PDO->prepare($sql_verifica);
$stmt->bindParam(':EMAIL', $email);
$stmt->execute();

if($stmt->rowCount() > 0){
$retornoapp = array("CADASTRO"=>"EMAIL_ERRO");
}else{

$sql_insert = "INSERT INTO cadUsuarios(nomeUsuario, emailUsuario, senhaUsuario) VALUES (?,?,?)";

$stmt = $PDO->prepare($sql_insert);

$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $senha);

if($stmt->execute()){
$retornoapp = array("CADASTRO"=>"SUCESSO");
}else{
$retornoapp = array("CADASTRO"=>"ERRO");
}

}

echo json_encode($retornoapp);

?>