<!--Exercice 2.1 – Bonjour personnalisé
Consigne :
Créez une fonction direBonjour($prenom) qui prend un prénom en paramètre et
affiche :
Bonjour, [prénom] !
Appelez la fonction avec différents prénoms (au moins trois).-->



<?php



function direBonjour($prenom){
    echo "Bonjour, $prenom! <br>" ;
}

direBonjour("laura");
direBonjour("steph");
direBonjour("chloe");

?>