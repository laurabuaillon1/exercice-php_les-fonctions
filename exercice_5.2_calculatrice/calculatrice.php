<!--Calculatrice simple
Consigne :
Créez une fonction calculer($a, $b, $operation) où $operation est une chaîne ( + , - , * ,
/ ).
La fonction doit retourner le résultat de l’opération, ou un message d’erreur si
l’opération est inconnue.
Exemple : calculer(5, 3, '+') retourne 8 .-->


<?php 

function calculer($a, $b , $operation){
    $operation = $a + $b;
    $resultat = $operation;
    return $resultat;
    
}

echo calculer(5, 5, "+");


?>