<?php
//Verifique as seguintes operações com AND:
// 1 - 15 > 5 AND "João" === "João"
// 2 - Teste > 5 AND 1
// 3 - 2 == 3 AND 5 >= 3


// 1 - 15 > 5 AND "João" === "João"
if(15 > 5 && "João" === "João") { //true e true = true
    echo "É verdadeiro<br>";
} else {
    echo "É falso<br>";
}


// 2 - Teste > 5 AND 1

if("Teste" > 5 && 1) { //false e true = false
    echo "É verdadeiro<br>";
} else {
    echo "É falso<br>";
}

// 3 - 2 == 3 AND 5 >= 3
if(2 == 3 && 5 >= 3) { //false e true = false
    echo "É verdadeiro<br>";
} else {
    echo "É falso<br>";

}

?>