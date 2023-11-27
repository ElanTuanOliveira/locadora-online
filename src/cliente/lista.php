<?php


require('Cliente.php');

$classe_cliente = new Cliente();
$cliente_lista = $classe_cliente->listarTodosCliente();

if(!empty($_GET['id'])){
    
    $clienteClasse = new Cliente;
    $clienteClasse->removerCliente($_GET['id']);

    if($resultado_delete){
        header('Location: http://localhost/locadora-online/src/cliente/lista-cliente.php?sucesso=1');
    }else{
        echo "Registro não foi excluído.";
    }


}


?>