<?php
$largeur = 20; // On définit la largeur du rectangle par le nombre de caractères horizontaux
$hauteur = 10; // On définit la hauteur du rectangle par le nombre de lignes

               /* On choisi d'utiliser des variables pour les symboles utilisés pour dessiner le rectangle
               Cela permet de modifier facilement les symboles utilisés sans avoir à changer tout le code */

$Shori = "——"; // Symbole pour les lignes horizontales, attention au nombre de tirets (pour proportions)
$Svert = "|"; // Symbole pour les lignes verticales
$Sinter = " "; // Symbole pour l'intérieur du rectangle

// On ouvre la balise <pre> pour conserver la mise en forme, sinon les espaces sont ignorés dans le HTML
echo "<pre>";

// On trace la ligne du haut, avec le symbole horizontal répété $largeur fois
echo str_repeat($Shori, $largeur) . "\n";

// Pour les lignes intermédiaires, on utilise une boucle pour répéter l'affichage 
for ($i = 1; $i <= $hauteur ; $i++) {  
    echo $Svert . str_repeat($Sinter, 2 * $largeur -2) . $Svert . "\n";
}  /* Chaque ligne commence et se termine par le |, avec des espaces à l'intérieur
    Le nombre d'espaces est calculé pour que le rectangle ait la bonne largeur
    Ici, chaque symbole horizontal compte pour 2 caractères, donc on multiplie $largeur par 2
    Ensuite, on enlève 2 pour les deux barres verticales aux extrémités */

// Ligne du bas est tracée de la même manière que la ligne du haut
echo str_repeat($Shori, $largeur) . "\n";

echo "</pre>";
?>