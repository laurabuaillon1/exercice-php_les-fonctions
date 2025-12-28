<!--Exercice 3.1 – Calcul du carré
Consigne :
Créez une fonction carre($nombre) qui retourne le carré du nombre passé en
paramètre.
Stockez le résultat dans une variable et affichez-le avec echo .-->



<?php

$nombre = 3;

function carre($nombre){
    return $nombre*$nombre;
}

$resultat = carre(3);
echo $resultat;


?>