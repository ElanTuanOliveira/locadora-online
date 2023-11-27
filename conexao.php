<?php

Class Conexao {
    
    
    private $hostname = "localhost";
    private $bancodedados = "locadoraonline";
    private $usuario = "root";
    private $senha = "";
    
    public $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        if ($this->mysqli->connect_errno)
        {
            echo "falha ao conectar: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_errno;
        }  
    } 

}


    
    //echo "Conexão realizada com sucesso";