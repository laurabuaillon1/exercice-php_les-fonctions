<!--Créez une fonction estMajeur($age) qui retourne true si l'âge est supérieur ou égal
à 18, sinon false .
Dans le script principal, utilisez cette fonction avec une condition if pour
afficher :
Vous êtes majeur. ou Vous êtes mineur.-->


<?php


function estMajeur($age){
if ($age >= 18){
    echo "vous etes majeur";
}else{
   echo "vous etes mineur";
}
}

estMajeur(17);
?>