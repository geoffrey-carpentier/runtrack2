<?php

/** On crée la fonction getHello(), qui devra retourner une chaîne de caractères ("Hello LaPlateforme!").
* Elle ne prend pas de paramètre en entrée () 
* On déclare explicitement un type string, ainsi la fonction retournera toujours une chaîne de caractères.*/
 
function getHello(): string {
    // Lorsqu'on l'appelle, cette fonction doit donc retourner (return) la "chaîne de caractères" (string)
    return "Hello LaPlateforme!";
}

// On stocke la valeur de retour dans la variable "$message"
$message = getHello();

// Affiche le contenu de la variable "$message" à l'écran, donc la chaîne de caractères retournée par la fonction
echo $message;

//? On a ajouté une étape qui consiste à stocker la valeur de retour dans une variable avant de l'afficher.
//? Plus "logique" que la version ./index_3.php, mais moins optimisé que la première version(./index.php).
//? Cela peut être utile si on veut réutiliser la valeur ailleurs dans le code, mais ce n'est pas le cas ici
//? On préferera donc se contenter d'afficher directement la valeur de retour de la fonction (Cf. ./index.php)
?>
