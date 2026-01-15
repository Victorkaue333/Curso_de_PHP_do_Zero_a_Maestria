<?php
//Crie variáveis com tipos de dados diferentes: string, integer e boolean.
//Cheque se a varável é um inteiro
//Caso sim, apresenta uma mensagem confirmando o tipo de dado.
//caso não, apresenta uma mensagem informando que a variável não é um inteiro.

$nome = "João";
$id = 25;
$estudante = true;

//com nome - string
if(is_int($nome)) {
    echo "A variável " . $nome . " é um inteiro. <br>";
} else {
    echo "A variável " . $nome . " não é um inteiro. <br>";
}

// com id - integer
if(is_int($id)) {
    echo "A variável " . $id . " é um inteiro. <br>";
}

// com estudante - boolean
if(is_int($estudante)) {
    echo "A variável " . $estudante . " é um inteiro. <br>";
} else {
    echo "A variável " . $estudante . " não é um inteiro. <br>";
}

?>