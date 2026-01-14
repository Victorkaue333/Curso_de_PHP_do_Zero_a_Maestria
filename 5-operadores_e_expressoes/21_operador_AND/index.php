<?php

// O operador AND (&&) só funciona se todas as condições forem verdadeiras

//Essa condição é falsa
if(5>10 && 10>2){//false e true = false
    echo "É verdadeiro<br>";
}else {
    echo "É falso<br>";
}


//Essa condição é verdadeira
if(10>5 && 10>2){//true e true = true
    echo "É verdadeiro<br>";
}else {
    echo "É falso<br>";
}


?>