<?php

use function PHPSTORM_META\exitPoint;

require('../../Conexao.php');

class Cliente 
{



    private $db;
    
    

    
    public function __construct()
    {
        $conexao = new Conexao();
        $this->db = $conexao->mysqli;
    } 
    

    /**
    * Função para exibir a lista de cliente
    * @return array
    */
    function listarTodosCliente(): array
    {
       return $this->db->execute_query('SELECT * FROM cliente')->fetch_all(MYSQLI_ASSOC);
        
    }
    
    /**
     * Função para trazer os dados para realizar a edição de clinte no formulário
     * @param mixed $id
     * @return array
     */
    function listarAlteracaoCliente($id): array
    {
        $sql = "SELECT * FROM cliente WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt = $this->db->execute_query($sql, [$id]);
        return $stmt->fetch_array(MYSQLI_ASSOC);
        
    }

    function removerCliente($id)
    {
        $sql = "DELETE FROM CLIENTE WHERE ID = ?";
        $stmt = $this->db->prepare($sql);
        $stmt = $this->db->execute_query($sql, [$id]);
        return $stmt;
        
       
    }

    /**
     * Função para cadastra
     * @param mixed $nome
     * @param mixed $email
     * @param mixed $data
     * @return void
     */
    function cadastroCliente($dados_cliente): bool
    {
        
    list($nome, $email, $data) = $dados_cliente;

    $sql = 'INSERT INTO cliente (nome, email, data_nascimento) VALUES (?, ?, ?)';
	
	return $this->db->execute_query($sql, [$nome, $email, $data]);
	
     
    }

    function alterarCliente($dados, $id): bool
    {

      

    list('nome'=>$nome, 'email'=>$email, 'data'=>$data) = $dados;

    //var_dump($nome, $email, $data);
   // exit();
      

    $sql = "UPDATE cliente SET nome = ?, email = ?, data_nascimento = ? WHERE id = $id";
    $stmt = $this->db->prepare($sql);
    $stmt = $this->db->execute_query($sql, [$nome, $email, $data]); 
    return $stmt;
       

        
    }
   

}