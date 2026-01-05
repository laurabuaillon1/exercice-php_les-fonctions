<!--Créez une fonction estPair($nombre) qui retourne true si le nombre est pair, sinon
false .
Affichez ensuite le message approprié en fonction du résultat.-->


<?php

function estPair($nombre){

    if($nombre %2 === 0){
        echo "nombre pair";
    }else{
        echo "nombre impair";
    }
}

estPair(11);

?>