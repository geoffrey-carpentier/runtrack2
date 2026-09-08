<?php
// On crée un tableau contenant nos nombres: 
$nombres = [200, 204, 173, 98, 171, 404, 459];

// On parcourt les nombres du tableau (la liste) avec une boucle 'foreach'
foreach ($nombres as $nb) { 
    
    if ($nb % 2 == 0) { // On verifie si le nombre est pair càd si le reste de la division par 2 est égal à 0 (modulo)
        echo $nb . " est paire<br />";  // si oui, on l'affiche 
    } else {
        echo $nb . " est impaire<br />"; //sinon on affiche qu'il est impair
    }
}
?>