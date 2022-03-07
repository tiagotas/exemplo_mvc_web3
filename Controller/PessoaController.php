<?php

class PessoaController {

    public static function index() {
        include 'View/modules/Pessoa/ListaPessoas.php';
    }

    public static function save() {

        include 'Model/PessoaModel.php';

        $pessoa = new PessoaModel();
        $pessoa->nome = $_POST['nome'];

        echo 'vai salvar no banco de dados';
    }
}