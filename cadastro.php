<?php

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
	
print_r($_POST);

?>

