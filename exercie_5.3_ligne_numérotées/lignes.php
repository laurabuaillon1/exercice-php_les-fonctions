<!--Créez une fonction afficherLignes($n) qui affiche $n lignes numérotées.
Exemple pour $n = 3 :
Ligne 1
Ligne 2
Ligne 3 -->

<?php 

function afficherLignes($n){

    for ($i = 1;$i <= $n; $i++){
    echo "ligne $i <br>";
    }
    
}

echo afficherLignes(5);

?>