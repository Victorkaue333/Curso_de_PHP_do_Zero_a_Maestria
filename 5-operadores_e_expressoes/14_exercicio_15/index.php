<?php
//crie uma operação que reterne falso com igualdade e verdadeiro, ou seja, crie duas

//falso
$a = 10;
$b = 8;

echo"Operador de igualdade (==) compara apenas o valor das variáveis falsas<br>";
if($a == $b){
    echo "$a e $b são iguaisc <br>";
    echo "É verdadeiro pois os valores são iguais <br>";
} else {
    echo "$a e $b são diferentes <br>";
    echo "É falso pois os valores são diferentes <br>";
    
}

//verdadeiro

$a = 10;
$b = 10;
echo"Operador de igualdade (==) compara apenas o valor das variáveis verdadeiras<br>";
if($a == $b){
    echo "$a e $b são iguaisc <br>";
    echo "É verdadeiro pois os valores são iguais <br>";
} else {
    echo "$a e $b são diferentes <br>";
    echo "É falso pois os valores são diferentes <br>";
    
}

?>