<?php

require('Cliente.php');


 if (!empty($_POST))
    {
		$cadastroClienteClasse = new Cliente;
		$resultado_cadastro = $cadastroClienteClasse->cadastroCliente($_POST);
        
		if($resultado_cadastro){
			header('Location: http://localhost/locadora-online/src/cliente/lista-cliente.php?sucesso=1');
		}else{
			header('Location: http://localhost/locadora-online/src/cliente/cadastro.php?sucesso=0');
		}

    }else{
        echo "Preencha os dados do cliente";
    }

	
	

	
	

	






?>

