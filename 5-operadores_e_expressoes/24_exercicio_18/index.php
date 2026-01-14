<?php
//Verifiqe as seguintes operações com OR:
// 12 < 5 OR "João" === "João"
// 1 > 5 OR 1
// 20 === "20" AND 51 >= 31


// 12 < 5 OR "João" === "João"  
if(12 < 5 || "João" === "João"){//Verdadeiro e Verdadeiro = Verdadeiro
    echo "Verdadeiro <br>";
} else {
    echo "Falso <br>";

}

// 1 > 5 OR 1
if(1 > 5 || 1){ //Falso e Verdadeiro = Verdadeiro
    echo "Verdadeiro <br>";
} else {
    echo "É falso <br>";
}

// 20 === "20" AND 51 >= 31
if(20 === "20" && 51 >= 31){ //Falso e Verdadeiro = Falso
    echo "Verdadeiro <br>";
} else {
    echo "É falso <br>";

}

?>