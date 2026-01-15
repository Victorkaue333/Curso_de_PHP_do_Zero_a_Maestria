<?php
//Crie uma variável em que recebe uma velocidade de um carro.
//Depois crie uma estrutura if que verifique a velocidade.
//Se a velocidade for menor que 40, exiba uma mensagem dizendo que o motorista está na velocidade correta.
//Se a igual a 40, exiba uma mensagem dizendo que o motorista está no limite de velocidade.
//Se a velocidade for maior que 40, exiba uma mensagem de multa;


$velocidade = 45; // Velocidade do carro


if ($velocidade < 40) {
    echo "O motorista está na velocidade correta.";
} elseif ($velocidade == 40) {
    echo "O motorista está no limite de velocidade.";
} else {
    echo "Multa! O motorista está acima do limite de velocidade.";
}

?>