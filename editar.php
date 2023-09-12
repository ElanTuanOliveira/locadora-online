<?php

require('conexao.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if($id === false){
header('Location: http://localhost/locadora-online/index.php?sucesso=0');
    exit();
}

$nome = filter_input(INPUT_POST, 'nome');
if ($nome === false) {
    header('http://localhost/locadora-online/index.php?sucesso=0');
    exit();
}
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if ($nome === false) {
    header('http://localhost/locadora-online/index.php?sucesso=0');
    exit();
}

$data = filter_input(INPUT_POST, 'data');
if ($data === false) {
    header('http://localhost/locadora-online/index.php?sucesso=0');
    exit();
} 

$sql = "UPDATE cliente SET nome = '$nome', email = '$email', data_nascimento = '$data' WHERE id = $id;";
$stmt = $mysqli->prepare($sql);
$stmt = $mysqli->execute_query($sql);


if($stmt){
    header('Location: http://localhost/locadora-online/lista-cliente.php?sucesso=1');
}else{
    header('Location: http://localhost/locadora-online/formulario.php?sucesso=0');
}