<!--Exercice 2.2 – Multiplication
Consigne :
Créez une fonction multiplier($a, $b) qui affiche le produit des deux nombres
passés en paramètre.
Exemple attendu : Le produit de 3 et 4 est : 12
Objectif : Utiliser plusieurs paramètres dans une fonction et faire un calcul-->

<?php

function multiplier($a, $b){
    return $a * $b;
}

echo multiplier(5, 2);
echo multiplier(2, 4);
?>