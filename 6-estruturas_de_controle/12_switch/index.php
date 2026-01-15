<?php
// Exemplo de uso do switch em PHP
// O switch é usado para executar diferentes partes do código com base no valor de uma variável

$x = 2;

switch ($x) {
    case 0:
        echo" X é igual a 0";
        break;
    case 1:
    echo "X é igual a 1";
        break;
    case 2:
        echo "X é igual a 2";
        break;

    default:
        echo "X não é igual a 0, 1 ou 2";
        break;
}

?>