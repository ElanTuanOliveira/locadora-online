<?php


//Criamos uma função que irá retornar o conteúdo do arquivo.
function ler(){

//Variável arquivo armazena o nome e extensão do arquivo.

$arquivo = "nomeClientes.txt";

//Variável $fp armazena a conexão com o arquivo e o tipo de ação.

$fp = fopen($arquivo, "r");

//Lê o conteúdo do arquivo aberto.

$conteudo = fread($fp, filesize($arquivo));

//Fecha o arquivo.

fclose($fp);

//retorna o conteúdo.

return $conteudo;
}

echo ler();






?>