<?php

//checa se o número é inteiro
if(is_int(5) ){ // true
    echo "É inteiro 1 <br>";
}

if(is_int("Não é inteiro") ){ // false
    echo "É inteiro 2 <br>";
}

$a = 10;
if(is_int($a) ){ // true
    echo "É inteiro 3 <br>";
}