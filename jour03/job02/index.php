<?php
// On crée la variable $str de type string et lui assigne le texte donné:
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

/* On crée la variable $textout qui sera utilisée pour stocker le résultat final, 
   c'est-à-dire la chaîne de caractères réduite d'un caractère sur deux */
$textout = "";

// On utilise une boucle 'for' qui parcourt tous les caractères de la chaîne $str depuis le premier
for ($i = 0; $i < strlen($str); $i += 2) {
    /*la boucle vérifie que l'indice $i est inférieur à la longueur (strlen) de la chaîne
       pour s'assurer que l'on ne dépasse pas la longueur de la chaîne.
       Les itérations se font par incréments de 2 afin de ne traiter qu'un caractère sur deux */

    $textout .= $str[$i]; /* On concatène le caractère d'indice $i à la variable $textout (vide initialement),
                             et grâce à l'incrémentation de 2, on va ignorer un caractère sur deux et concaténer
                             les autres jusqu'à atteindre la fin de la chaine $str */
} // On affiche le résultat final avec echo, soit la chaîne $str réduite de ses caractères d'indice impaire
echo $textout;
?>