<?php

$str = "OI";
$num = 12;

// Verifica se é uma string e tem uma string
if(is_string($str)){
    echo "É $str uma string";
    echo "<br>";
}else{
    echo "Não é uma string";
    echo "<br>";
}

// Verifica se é uma string, porém ele não é uma string
if(is_string($num)){
    echo "É uma string";
    echo "<br>";
}else{
    echo "O $num não é uma string";
    echo "<br>";
}

?>