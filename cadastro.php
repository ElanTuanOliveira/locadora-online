
<?php


//Criamos uma função que recebe um texto como parâmetro.
function gravar($cliente){
	//Variável arquivo armazena o nome e extensão do arquivo.
	$arquivo = "meu_arquivo.txt";
	
	//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
	$fp = fopen($arquivo, "a+");

	//Escreve no arquivo aberto.
	fwrite($fp, $cliente);
	
	//Fecha o arquivo.
	fclose($fp);
}

if ($_POST != null){

$cliente[] = $_POST;
print_r($cliente);
gravar($cliente);

}
?>

