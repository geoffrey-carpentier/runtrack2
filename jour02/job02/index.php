<?php

$nombre = 0;  // On initialise la variable $nombre à 0


// On utilise une boucle while pour afficher tous les nombres de 0 à 1337
while ($nombre <= 1337) {
    // On vérifie si le nombre est dans la liste des nombres à exclure
    if ($nombre == 26 || $nombre == 37 || $nombre == 88 || $nombre == 1111 || $nombre == 3233) {
        // Si c'est le cas, on ne fait rien (on passe à l'itération suivante)
    } else {
        // Sinon, on affiche le nombre puis on fait un saut de ligne
        echo $nombre . "<br />";
    }

    // On incrémente le nombre de 1 à chaque itération
    $nombre++;
}
?>