<?php

require('Filme.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if($id === false){
header('Location: http://localhost/locadora-online/index.php?sucesso=0');
    exit();
}

$nome = filter_input(INPUT_POST, 'nome_filme');
if ($nome === false) {
    header('http://localhost/locadora-online/index.php?sucesso=0');
    exit();
}
$tipo = filter_input(INPUT_POST, 'tipo_filme');
if ($tipo === false) {
    header('http://localhost/locadora-online/index.php?sucesso=0');
    exit();
}

$data = filter_input(INPUT_POST, 'data_filme');
if ($data === false) {
    header('http://localhost/locadora-online/index.php?sucesso=0');
    exit();
} 



if (!empty($_POST)){

    $alteraFilmeClasse = new Filme;
    $resultado_update = $alteraFilmeClasse->alterarFilme($_POST, $id);
    
    if($stmt){
        header('Location: http://localhost/locadora-online/src/filme/listar-filme.php?sucesso=1');
    }else{
        header('Location: http://localhost/locadora-online/src/filme/formulario-filme.php?sucesso=0');
    }
}


