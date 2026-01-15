<?php
//Faça as seguintes verificações utilizando o if
// 1- 5 é maior do que 2
// 2- Matheus é diferente de Pedro
// 3- 12 é menor ou igual a 11
// OBS: Deve ser inserido os valores em variáveis

// 1- 5 é maior do que 2
$valor1 = 5;
$valor2 = 2;

if ($valor1 > $valor2) {
    echo "$valor1 é maior do que $valor2<br>";
} else {
    echo "$valor1 não é maior do que $valor2<br>";
}

// 2- Matheus é diferente de Pedro
$nom1 = "Matheus";
$nom2 = "Pedro";

if($nom1 != $nom2) {
    echo "$nom1 é diferente de $nom2<br>";
} else {
    echo "$nom1 não é diferente de $nom2<br>";
}


// 3- 12 é menor ou igual a 11
$v1 = 12;
$v2 = 11;

if ($v1 <= $v2) {
    echo "$v1 é menor ou igual a $v2<br>";
} else {
    echo "$v1 não é menor ou igual a $v2<br>";
}


?>