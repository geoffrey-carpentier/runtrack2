<?php

/** On crée la fonction getHello(), qui devra retourner une chaîne de caractères ("Hello LaPlateforme!").
 * Elle ne prend pas de paramètre en entrée () 
 * On déclare explicitement un type string, ainsi la fonction retournera toujours une chaîne de caractères*/

function getHello(): string
{    //? Par comodité (discutable, Cf. critiques), on stocke le message dans une variable $message ()*/
    $message = "Hello LaPlateforme!";
    // Lorsqu'on l'appelle, cette fonction doit donc retourner (return) la "chaîne de caractères" (string) sockée dans notre variable $message
    return $message;
}

// Appel de la fonction "getHello()" et stockage de la valeur de retour dans la variable "$message"
echo getHello();

//! Critiques:
//? Solution fonctionnelle, moins "logique", pas optimisée. On crée une variable $message à l’intérieur de la fonction,
//? pour la retourner immédiatement => autant retourner directement la chaîne de caractères sans passer par cette variable .
//? Pas conventionel, pas idéal ici. Créer une variable à l’intérieur d’une fonction juste pour la retourner peut créer de la confusion.
//?- Si la variable est réutilisé ailleurs dans le code, cela peut entraîner des bugs. Sinon, elle est redondante, superflue.
//?- Si la fonction est appelée plusieurs fois, la variable pourrait être réassignée à chaque fois, ce qui n’est pas souhaitable.
//? - On lui préfèrera donc la version initiale (./index.php), plus claire, plus propre.
?> 
