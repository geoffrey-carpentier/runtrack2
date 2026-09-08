<?php
// On crée la variable de type string ($str), on lui affecte le texte demandé:
$str = "I'm sorry Dave I'm afraid I can't do that";

// Puis la variable $voystr qui contiendra au final les voyelles extraites de la chaîne $str
$voystr = "";  // On l'initialise pour partir d'une chaîne vide

// Parcours de la chaîne de caractères $str, en affichant uniquement les voyelles
$i = 0;
while ($str[$i] != null) {
    // On vérifie si le caractère actuel est une voyelle manuellement
    $caractere = $str[$i];
    if ($caractere == 'a' || $caractere == 'e' || $caractere == 'i' || $caractere == 'o' || $caractere == 'u' || $caractere == 'y' ||
        $caractere == 'A' || $caractere == 'E' || $caractere == 'I' || $caractere == 'O' || $caractere == 'U' || $caractere == 'Y') {
        // Si c'est une voyelle, on la concatène à la variable $result
        $result .= $caractere;
    }
    $i++;
}

// Affichage du résultat
echo $result;
?>