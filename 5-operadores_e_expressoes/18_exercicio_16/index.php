<?php
//Insira o valor 5 em uma variável, e o valor 3 em outra;
//Teste os operadores de igualdade(==) diferença(!=), idêntico(===) e não idêntico(!==);


$valor1 = 5;
$valor2 = 3;

//Operador de igualdade
if ($valor1 == $valor2) {
    echo "$valor1 é igual a $valor2 <br>";
} else {
    echo "$valor1 não é igual a $valor2<br>";
}

//Operador de diferença
if ($valor1 != $valor2) {
    echo "$valor1 é diferente de $valor2<br>";
} else {
    echo "$valor1 não é diferente de $valor2<br>";
}

//Operador idêntico
if ($valor1 === $valor2) {
    echo "$valor1 é idêntico a $valor2<br>";
} else {
    echo "$valor1 não é idêntico a $valor2<br>";
}

//Operador não idêntico
if ($valor1 !== $valor2) {
    echo "$valor1 não é idêntico a $valor2<br>";
} else {
    echo "$valor1 é idêntico a $valor2<br>";
}

?>