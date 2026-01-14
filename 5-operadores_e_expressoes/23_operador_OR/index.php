<?php
// Operador OR (||) 
// Para que a condição seja verdadeira, basta que uma das expressões seja verdadeira.
// Para que a condição seja falsa, ambas as expressões devem ser falsas.

//condição com 1 lado verdadeiro
if(5 > 2 || 3 < 1){// Verdadero || Falso = Verdadero
    echo "A condição é verdadeira pois 5 é maior que 2. <br>";
} else {
    echo "A condição é falsa <br>.";

}

if(5 > 6 || 3 < 1){// Falso || Falso = Falso
    echo "A condição é verdadeira <br>";
} else {
    echo "A condição é falsa pois 5 não é maior que 6 e 3 não é menor que 1 <br>.";

}







?>