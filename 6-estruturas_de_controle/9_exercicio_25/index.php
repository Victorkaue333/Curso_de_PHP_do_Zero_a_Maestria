<?php
//Crie variáveis com números e outra com String;
//Faça um if checando se é um número;
//Caso seja um número, atribua a multiplicação desse número por 2 a outra variável;
//E crie um outro if, que checa se o no número é maior que 100;
//Se sim, imprima "Maior que 100", senão imprima "Menor que 100"; 


$num1 = 52;
$num2 = 10;
$str = "Teste";
$numMult= 2;


if(is_int($num1) || is_float($str)){
    
    $resultado = $num1 * $numMult;
    
    if($resultado > 100){
        echo "O número é maior que 100 <br>";
    } else {
        echo "O número é menor que 100 <br>";
    }
}


?>