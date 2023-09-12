<?php

require('conexao.php');

if (!empty($_POST) )
{
	$filme = $_POST['filme'];
	$tipofilme = $_POST['tipo'];
	$datafilme = $_POST['data'];
	$sql = 'INSERT INTO filme (nome_filme, tipo_filme, data_filme) VALUES (?, ?, ?)';
	
	$saveUser=$mysqli->execute_query($sql, [$filme, $tipofilme, $datafilme]);
	if($saveUser){
		header('Location: http://localhost/locadora-online/listar-filme.php?sucesso=1');
	}else{
		header('Location: http://localhost/locadora-online/cadastro.php?sucesso=0');
	}

	
}else{
	echo "Preencha os dados do cliente";
}
	




/*
function gravarnome($nomeCliente){

	$arquivo ="nomeClientes.txt";
	$fp = fopen($arquivo, "a+");
	fwrite($fp, $nomeCliente . PHP_EOL );
	fclose($fp);
}
	//Criamos uma função que recebe um texto como parâmetro.
function gravar($armazenarDadosCliente){
	//Variável arquivo armazena o nome e extensão do arquivo.
	$arquivo = "cadastroclientes.txt";
	
	//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
	$fp = fopen($arquivo, "a+");

	//Escreve no arquivo aberto.
	fwrite($fp, print_r($armazenarDadosCliente, TRUE));
	
	//Fecha o arquivo.
	fclose($fp);
}


if (!empty($_POST) )
{
	gravarnome($_POST['nome']); 
	gravar($_POST);
	echo "Cadastro foi realizado com sucesso";
}else{
	echo "Preencha os dados do cliente";
}
	
echo "Cadastro realizado com sucesso";
*/
?>

