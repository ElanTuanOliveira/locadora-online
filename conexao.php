<?php


$hostname = "localhost";
$bancodedados = "locadoraonline";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli->connect_errno)
    {
        echo "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
    }
    
    //echo "Conexão realizada com sucesso";