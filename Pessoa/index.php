<?php

require 'Pessoa.class.php';

$pessoa = new Pessoa();
$pess = $pessoa->insertPessoa("Beatriz Withorya da Silva", "biaewikosilva@gmail.com", "947443344");

if($pess){
    echo"
    <script>
    alert('Pessoa inserida com sucesso! Foi karai')
    </script>";
}else{
    echo"
        <script>
        alert('Erro ao tentar inserir! Errou ai mulek')
        </script>";
}