<?php
//Operador de conversão 
// Eu consigo converter um valor de um tipo para outro utilizando o operador de cast

$b = (float) "10.5"; // Convertendo string para float
echo $b;
echo "<br>";

$soma = $b + 12;
echo "O resultado da soma é: " . $soma;

// eu consigo converter para os seguintes tipos:
// (int) , (float) , (string) , (array) , (object) , (bool)

//eu consigo comparar
if ($b == 10.5) {
    echo "<br>É igual";
} else {
    echo "<br>Não é igual";
}

?>