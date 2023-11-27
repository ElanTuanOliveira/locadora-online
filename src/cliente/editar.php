<?php

require('Cliente.php');

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

if (!empty($_POST))

{
    $alterarClienteClasse = new Cliente;
	$resultado_update = $alterarClienteClasse->alterarCliente($_POST, $id); 
    
    if($resultado_update === true) {
        header('Location: http://localhost/locadora-online/src/cliente/lista-cliente.php?sucesso=1');
    }else{
        header('Location: http://localhost/locadora-online/src/cliente/formulario.php?sucesso=0');
    }

}else{
    echo "Preencha os dados do cliente";
}    

