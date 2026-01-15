<?php
//Complemente o exercicio 22
// Insira um else com uma mensagem para as pessoas que são menores de idade.

$idade1 = 17;
$idade2 = 20;

$maiordeidade = 18;

//com a pessoa menor idade
if($idade1 >= $maiordeidade){
    echo "A pessoa é maior de idade. <br>";
} else{
    echo "A pessoa é menor de idade.<br>";
}

//com a pessoa maior idade
if($idade2 >= $maiordeidade){
    echo "A pessoa é maior de idade.<br>";
} else{
    echo "A pessoa é menor de idade.<br>";
}


?>