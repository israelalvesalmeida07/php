<?php

session_start();

require_once('conexao_bd.php');

$var_situacao 			= $_POST['situacao']; //*
$var_setor 			= $_POST['setor']; //*
$var_responsavel_setor 		= $_POST['resp_setor']; //*
$var_telefone1 			= $_POST['telefone1'];
$var_telefone2 			= $_POST['telefone2'];
$var_logradouro 		= $_POST['logradouro'];
$var_numero 			= $_POST['numero'];
$var_cep 			= $_POST['cep'];
$var_bairro 			= $_POST['bairro'];
$var_cidade 			= $_POST['cidade']; //*
$var_estado 			= $_POST['estado']; //*
$var_apelido			= $_POST['apelido'];
$var_dirigente1 		= $_POST['nome_dirigente1']; //*
$var_esposa_dirigente1 		= $_POST['esposa_dirigente1'];
$var_dirigente2 		= $_POST['nome_dirigente2'];
$var_esposa_dirigente2 		= $_POST['esposa_dirigente2'];
$var_secretario1 		= $_POST['secretario1'];
$var_secretario2 		= $_POST['secretario2'];
$var_tesoureiro1 		= $_POST['tesoureiro1'];
$var_tesoureiro2 		= $_POST['tesoureiro2'];



//**********************************************************************
if(empty($_POST['situacao'])){ // SITUAÇÃO
	$_SESSION['vazio_situacao'] = "<div class='alert alert-danger' role='alert'> Campo Obrigatório </div>";
	$url = 'http://localhost/iemf/cad_igreja.php';
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL = $url'>";
} else {
	$_SESSION['value_situacao'] = $_POST['situacao'];
}
//**********************************************************************
if(empty($_POST['setor'])){ // SETOR
	$_SESSION['vazio_setor'] = "<div class='alert alert-danger' role='alert'> Campo Obrigatório </div>";
	$url = 'http://localhost/iemf/cad_igreja.php';
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL = $url'>";
} else {
	$_SESSION['value_setor'] = $_POST['setor'];
}
//**********************************************************************
if(empty($_POST['resp_setor'])){ //RESPONSAVEL PELO SETOR
	$_SESSION['vazio_resp_setor'] = "<div class='alert alert-danger' role='alert'> Campo Obrigatório </div>";
	$url = 'http://localhost/iemf/cad_igreja.php';
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL = $url'>";
} else {
	$_SESSION['value_resp_setor'] = $_POST['resp_setor'];
}
//**********************************************************************
if(empty($_POST['cidade'])){ // CIDADE
	$_SESSION['vazio_cidade'] = "<div class='alert alert-danger' role='alert'> Campo Obrigatório </div>";
	$url = 'http://localhost/iemf/cad_igreja.php';
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL = $url'>";
} else {
	$_SESSION['value_cidade'] = $_POST['cidade'];
}
//**********************************************************************
if(empty($_POST['nome_estado'])){ // ESTADO
	$_SESSION['vazio_estado'] = "<div class='alert alert-danger' role='alert'> Campo Obrigatório </div>";
	$url = 'http://localhost/iemf/cad_igreja.php';
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL = $url'>";
} else {
	$_SESSION['value_estado'] = $_POST['estado'];
}
//**********************************************************************
if(empty($_POST['nome_dirigente1'])){ // PRIMEIRO DIRIGENTE
	$_SESSION['vazio_dirigente1'] = "<div class='alert alert-danger' role='alert'> Campo Obrigatório </div>";
	$url = 'http://localhost/iemf/cad_igreja.php';
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL = $url'>";
} else {
	$_SESSION['value_dirigente1'] = $_POST['nome_dirigente1'];
}
//**********************************************************************

$sql  = " INSERT INTO igrejas (situacao, setor, resp_setor, telefone1, telefone2, logradouro, numero, cep, bairro, cidade, estado, ";
$sql .=	" apelido, dirigente1, esposa_dirigente1, dirigente2, esposa_dirigente2, secretario1, secretario2, tesoureiro1, tesoureiro2 ) ";
$sql .= " VALUES ('$var_situacao', '$var_setor', '$var_responsavel_setor', '$var_telefone1', '$var_telefone2', '$var_logradouro', '$var_numero',";
$sql .= " '$var_cep', '$var_bairro' ,'$var_cidade', '$var_estado', '$var_apelido', '$var_dirigente1', '$var_esposa_dirigente1', '$var_dirigente2',";
$sql .= " '$var_esposa_dirigente2','$var_secretario1','$var_secretario2','$var_tesoureiro1','$var_tesoureiro2' ) "; 

$con = new conexao();
$link = $con->conecta_mysql();

if(mysqli_query($link, $sql)){
	$_SESSION['msg_cad'] = "<div class='alert alert-success' role='alert'> Cadastro Realizado com Sucesso. </div>";
	header('Location: cad_igreja.php');
} else {
	$_SESSION['msg_cad'] = "<div class='alert alert-warning' role='alert'> Cadastro não pode ser Realizado. </div>";
}


?>