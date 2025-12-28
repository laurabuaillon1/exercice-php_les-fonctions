<!--Exercice 3.2 – Année de naissance
Consigne :
Créez une fonction anneeNaissance($age) qui retourne l’année de naissance estimée
en fonction de l’âge et de l’année actuelle (exemple : 2025).
Affichez :
Si vous avez 30 ans, vous êtes né en 1995 -->


<?php



function anneeNaissance($age)
{ 
    $année = 2025;
    $anneeNaissanceEstimee =  $année - $age;
    return $anneeNaissanceEstimee;
    
}

$age = 29;
$anneeNaissance= anneeNaissance($age);


echo "Si vous avez " . $age . " ans, vous êtes né en " . $anneeNaissance;




?>