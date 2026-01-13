<?php

class Pessoa{
   public $nome;
   
   function falar(){
        echo "Olá pessoal!";
   } 
}

$matheus = new Pessoa();

$matheus->nome = 'Matheus';
echo $matheus->nome;

?>