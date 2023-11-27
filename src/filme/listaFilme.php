<?php

require('Filme.php');


$listarFilmesClasse = new Filme;
$filme_lista = $listarFilmesClasse->listarTodosFilmes();

if(!empty($_GET['id'])) {

    
    $removeFilmeClasse = new Filme;
    $resultado_delete = $removeFilmeClasse->removerFilme($_GET['id']);

    if($resultado_delete){
		header('Location: http://localhost/locadora-online/src/filme/listar-filme.php?sucesso=1');
	}else{
		echo "Registro não foi excluído.";
	}




}


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