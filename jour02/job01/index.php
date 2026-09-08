<?php
// On commence par déclarer une variable $nombre que l'on initialise à 0
$nombre = 0;

// On va utiliser une boucle while pour afficher tous les nombres de 0 à 1337
while ($nombre <= 1337) {  // Condition: elle continue tant que $nombre est inférieur ou égal à 1337 (jusque 1337 inclus).

// On vérifier systématiquement la valeur de $nombre pour savoir si elle est égale à 42

    if ($nombre == 42) {    
        echo "<b><u>" . $nombre . "</u></b><br />"; // Si c'est le cas, 42 est affiché en gras-souligné (puis saut de ligne)
    } else {
        echo $nombre . "<br />"; // Sinon -pour tous les autres nombres- ils sont affichés, normalement (puis saut de ligne)
    }
    $nombre++; // Après chaque itération, on incrémente $nombre de 1 (on teste le nombre suivant)
}
?>