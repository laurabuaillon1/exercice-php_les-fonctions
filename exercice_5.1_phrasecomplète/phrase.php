<!--Générateur de phrase complète
Consigne :
Créez une fonction presentation($prenom, $nom, $age) qui retourne une phrase du type
:
Je m'appelle Alain Dupont et j'ai 32 ans.
Affichez le résultat avec echo .-->

<?php 

function presentation($prenom, $nom, $age){
    echo "je m'appelle " . $prenom . " " . $nom . " et j'ai " . $age . " ans. ";
}

presentation("Alain", "Dupont" , 32);
?>