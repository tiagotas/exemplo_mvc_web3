<?php

class PessoaDAO
{
    private $conexao;

    function __construct() {
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }

    function insert(PessoaModel $model) {
        
        $sql = "INSERT INTO pessoa 
                (nome, rg, cpf, data_nascimento, email, telefone, endereco) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rg);
        $stmt->bindValue(3, $model->cpf);
        $stmt->bindValue(4, $model->data_nascimento);
        $stmt->bindValue(5, $model->email);
        $stmt->bindValue(6, $model->telefone);
        $stmt->bindValue(7, $model->endereco);
        $stmt->execute();      
    }
}