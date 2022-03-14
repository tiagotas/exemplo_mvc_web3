<?php

class PessoaModel
{
    public $id, $nome, $rg, $cpf;
    public $data_nascimento, $email;
    public $telefone, $endereco;

    public function save()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        if($this->id == null) {
            $dao->insert($this);
        } else {
            // update
        }
    }
}