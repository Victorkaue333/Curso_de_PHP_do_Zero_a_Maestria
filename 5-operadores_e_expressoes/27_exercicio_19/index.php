<?php
//Converta os seguintes dados para int com o operador de cast
//"testando"
//12.9
//true
//[1, 2, 3]

// Testando para int
$test = (int) "testando";
echo $test . "<br>";

// 12.9 para int
$number = (int) 12.9;
echo $number ."<br>";

// true para int
$bool = (int) true;
echo $bool ."<br>";

// [1, 2, 3] para int
$array = (int) [1, 2, 3];
echo $array ."<br>";

?>