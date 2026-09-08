<?php
// On définit la variable qui va déterminer la hauteur du triangle, c'est à dire la taille des côtés
$hauteur = 5;

// On ouvre la balise <pre> pour conserver la mise en forme, sinon les espaces sont ignorés dans le HTML
echo "<pre>";

// On trace la ligne du haut (le sommet du triangle)
echo str_repeat(" ", $hauteur-1) . "/\\" . "\n";  // le \ doit être échappé avec un autre \ pour être affiché

// Pour les lignes intermédiaires, on utilise une boucle
for ($i = 1; $i < $hauteur; $i++) {
    // On affiche les espaces avant les barres obliques
    echo str_repeat(" ", $hauteur - $i - 1);
    
    // On affiche la barre oblique gauche
    echo "/";
    
    // On affiche les espaces entre les barres obliques
    echo str_repeat(" ", 2 * $i );  
    
    // On affiche la barre oblique droite
    echo "\\" . "\n";
}

// On trace la ligne du bas (la base du triangle)
echo str_repeat("¯¯", $hauteur ) . "\n";

echo "</pre>";
?>