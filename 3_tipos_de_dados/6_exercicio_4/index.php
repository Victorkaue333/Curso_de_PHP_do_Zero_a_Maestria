<?php

//Imprima 3 números float diferentes e utilize a função is_float() em um deles.

$float1 = 1.23;
echo $float1;
echo"<br>";

$float2 = 4.56;
echo $float2;
echo"<br>";

$float3 = 7.89;
echo $float3;
echo"<br>";

if(is_float($float1)) {
    echo "O $float1 é um float";
}else{
    echo "não é um float";
}

?>