<?php
//crie um array associativo com 5 características de uma pessoa e faça um if checando se ele é maior ou menor de idade.

$arrayPessoa = ['nome' => 'João', 'idade' => 20, 'altura' => 1.75, 'cidade' => 'São Paulo', 'profissão' => 'Engenheiro'];

if($arrayPessoa['idade'] >= 18){
    echo $arrayPessoa['nome'] . " é maior de idade.";
} else {
    echo $arrayPessoa['nome'] . " é menor de idade.";

}


?>