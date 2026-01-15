<?php
//Crie uma varável que recebe um peso
//Caso seja maior que 80, imprima na tela "Você está acima do peso"
//Caso contrário, imprima "Você está dentro do peso"

$pesolimite = 80;
$pesousuario = 83.5;

if($pesousuario >= $pesolimite) {
    echo "Você está acima do peso <br>";
} else {
    echo "Você está dentro do peso <br>";
}

?>