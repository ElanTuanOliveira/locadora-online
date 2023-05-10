<?php


	//Criamos uma função que recebe um texto como parâmetro.
function gravar( $texto){
	//Variável arquivo armazena o nome e extensão do arquivo.
	$arquivo = "meu_arquivo.txt";
	
	//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
	$fp = fopen($arquivo, "a+");

	//Escreve no arquivo aberto.
	fwrite($fp, print_r($texto, TRUE) );
	
	//Fecha o arquivo.
	fclose($fp);
}


if (!empty($_POST) )
{
	 
	gravar($_POST);
	echo "Cadastro foi realizado com sucesso";
}else{
	echo "Preencha os dados do cliente";
}
	
print_r($_POST);

?>

