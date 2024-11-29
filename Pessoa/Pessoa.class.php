<?php

class Pessoa{
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $pdo;

    function getId(){
        return $this->id;
    }

    function getNome(){
        return $this->nome;
    }

    function getEmail(){
        return $this->email;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function __construct(){
        $dsn = "mysql:dbname=pessoa;host=localhost";
        $user = "root";
        $pass = "";

        try{
            $this->pdo = new PDO($dsn, $user, $pass);
        }catch (\Throwable $th) {
            echo"
            <script>alert('Banco de dados indisponível, tente mais tarde!! :( Errou foi mulek')</script>";
        }
           

    }

    function insertPessoa($nome, $email, $telefone){
        $sql = "INSERT INTO pessoas SET nome = :n, email = :e, telefone = :t";

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(":n",$nome);
        $sql->bindValue(":e",$email);
        $sql->bindValue(":t",$telefone);

        return $sql->execute();
    }

    /*function listPessoa($nome){
        $sql = "SELECT nome, id FROM pessoas WHERE nome = :n"
    }*/

    
}                          
