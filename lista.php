<?php

require('conexao.php');

$clienteLista = $mysqli->execute_query('SELECT * FROM cliente')->fetch_all(MYSQLI_ASSOC)




/*//Criamos uma função que irá retornar o conteúdo do arquivo.
/**
 * Função que vai ler aqrquivo com o nome de clientes
 * @return array 
 
function ler(): array{

//Variável arquivo armazena o nome e extensão do arquivo.

$arquivo = "nomeClientes.txt";

return file($arquivo);
*/



?>