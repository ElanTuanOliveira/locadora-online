<?php

require('conexao.php');


    $id = $_GET['id'];
    $sql = "DELETE FROM FILME WHERE ID = ?";
    
    $stmt = $mysqli->prepare($sql);
    $stmt = $mysqli->execute_query($sql, [$id]);
    
    
    
    if($stmt){
		header('Location: http://localhost/locadora-online/listar-filme.php?sucesso=1');
	}else{
		echo "Registro não foi excluído.";
	}

