<?php
//Só entra no else if se a condição do if for falsa

// Exemplo de uso do else if em PHP
if(10 > 5){
    echo "Entrou no if <br>";
}else if(10 > 6){
    echo "Entrou no Else if  <br>";
}

//Outro exemplo em entra no else if
// Exemplo de uso do else if em PHP
if(10 > 11){
    echo "Entrou no if <br>";
}else if(10 > 6){
    echo "Entrou no Else if  <br>";
}


//Outro exemplo com mais condições

$idade = 20;
if($idade < 16){
    echo "Não vota  <br>";
}else if($idade >= 16 && $idade < 18){
    echo "Voto opcional  <br>";
}else if($idade >= 18 && $idade < 65){
    echo "Voto obrigatório  <br>";
}else{
    echo "Voto opcional  <br>";
}

?>