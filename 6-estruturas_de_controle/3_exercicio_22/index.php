<?php
//Crie variáveis que recebem idades;
//Cheque se as idades são maiores ou iguais a 18;
//Se sim, imprima uma mensagem que a pessoa é maior de idade;


$idade1 = 17;
$idade2 = 20;

$maiordeidade = 18;

//com a pessoa menor idade
if($idade1 >= $maiordeidade){
    echo "A pessoa é maior de idade.";
} else{
    echo "A pessoa é menor de idade.";
}

//com a pessoa maior idade
if($idade2 >= $maiordeidade){
    echo "<br>A pessoa é maior de idade.";
} else{
    echo "<br>A pessoa é menor de idade.";
}

?>