<?php
// On initialise la variable nombre à 0
$nombre = 0;

// On utilise une boucle while pour afficher tous les nombres de 0 à 100
while ($nombre <= 100) {
    // Si le nombre est égal à 42, c'est "La Plateforme_" qui sera affiché
    if ($nombre == 42) {
        echo "La Plateforme_<br />";
    } 
    // Si le nombre est compris entre 0 et 20 inclus, on l'affiche en italique
    elseif ($nombre >= 0 && $nombre <= 20) {
        echo "<i>" . $nombre . "</i><br />";
    } 
    // Si il est compris entre 25 et 50 inclus, on l'affiche en souligné
    elseif ($nombre >= 25 && $nombre <= 50) {
        echo "<u>" . $nombre . "</u><br />";
    } 
    // Si il ne remplit pas les conditions précédentes, on affiche le nombre normalement
    else {
        echo $nombre . "<br />";
    }

    // On incrémente le nombre de 1 à chaque itération 
    $nombre++;
}
?>