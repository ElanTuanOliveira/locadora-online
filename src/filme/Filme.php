<?php

require ('../../Conexao.php');

class Filme
{



    private $db;
    
    public function __construct(){

    $conexao = new Conexao();
    $this->db = $conexao->mysqli;

    }
    
    
    public function listarTodosFilmes()
    {

    return $this->db->execute_query('SELECT * FROM filme')->fetch_all(MYSQLI_ASSOC);

    }
    public function CadastrarFilme($dados_filme){

    list($nome_filme, $tipo_filme, $data_filme) = $dados_filme;     

    $sql = 'INSERT INTO filme (nome_filme, tipo_filme, data_filme) VALUES (?, ?, ?)';	
    return $this->db->execute_query($sql, [$nome_filme, $tipo_filme, $data_filme]);  


    }

    public function removerFilme($id){

       
    $sql = "DELETE FROM FILME WHERE ID = ?";
        
    $stmt = $this->db->prepare($sql);
    $stmt = $this->db->execute_query($sql, [$id]);
    return $stmt;
    
    }

    public function alterarFilme($dados_filme, $id): bool
    {
     
    list('nome_filme'=>$nome, 'tipo_filme'=>$tipo, 'data_filme'=>$data) = $dados_filme;    

    $sql = "UPDATE filme SET nome_filme = ?, tipo_filme = ?, data_filme = ? WHERE id = $id;";
    
    $stmt = $this->db->prepare($sql);
    $stmt = $this->db->execute_query($sql, [$nome, $tipo, $data]);   
    return $stmt;

    }

    public function listarAlteracaoFilme($id): array
    {
        
    $sql = "SELECT * FROM filme WHERE id = ?";
    
    $stmt = $this->db->prepare($sql);
    $stmt = $this->db->execute_query($sql, [$id]);
    return $stmt->fetch_array(MYSQLI_ASSOC);  

    }
    
        





}