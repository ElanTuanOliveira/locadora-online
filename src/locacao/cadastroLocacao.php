
<?php

require('conexao.php');

var_dump($_POST);

if (!empty($_POST) )
{
	$cliente = $_POST['cliente'];
    $filme = $_POST['filme'];
	$datalocacao = $_POST['datalocacao'];
	$datadevolucao = $_POST['datadevolucao'];
	$sql = 'INSERT INTO locacao (cliente_id, filme_id, data_locacao, data_devolucao) VALUES (?, ?, ?, ?)';
	
	$saveUser=$mysqli->execute_query($sql, [$cliente, $filme, $datalocacao, $datadevolucao]);
	if($saveUser){
		header('Location: http://localhost/locadora-online/listar-filme.php?sucesso=1');
	}else{
		header('Location: http://localhost/locadora-online/cadastro.php?sucesso=0');
	}

	
}else{
	echo "Preencha os dados do Filme";
}