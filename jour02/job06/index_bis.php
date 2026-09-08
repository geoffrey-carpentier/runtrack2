<?php
$largeur = 20; // On définit la largeur du rectangle par le nombre de caractères horizontaux
$hauteur = 10; // On définit la hauteur du rectangle par le nombre de lignes

// Version sans utiliser de variables pour les caractères utilisés pour dessiner le rectangle

// On ouvre la balise <pre> pour conserver la mise en forme, sinon les espaces sont ignorés dans le HTML
echo "<pre>";

// On trace la ligne du haut, avec le symbole horizontal répété $largeur fois
echo str_repeat("——", $largeur) . "\n";

// Pour les lignes intermédiaires, on utilise une boucle pour répéter l'affichage
for ($i = 1; $i <= $hauteur ; $i++) {
    echo "|" . str_repeat(" ", 2 * $largeur - 2) . "|\n";
}  /* Chaque ligne commence et se termine par le |, avec des espaces à l'intérieur
    Le nombre d'espaces est calculé pour que le rectangle ait la bonne largeur
    Ici, chaque symbole horizontal compte pour 2 caractères, donc on multiplie $largeur par 2
    Ensuite, on enlève 2 pour les deux barres verticales aux extrémités */

// Ligne du bas est tracée de la même manière que la ligne du haut
echo str_repeat("——", $largeur) . "\n";

echo "</pre>";
?>

