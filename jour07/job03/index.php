<?php

/** On crée la fonction getHello(), qui devra retourner une chaîne de caractères ("Hello LaPlateforme!").
* Elle ne prend pas de paramètre en entrée () 
* On déclare explicitement un type string, ainsi la fonction retournera toujours une chaîne de caractères.*/
 
function getHello(): string {
    // Lorsqu'on l'appelle, cette fonction doit donc retourner (return) la "chaîne de caractères" (string)
    return "Hello LaPlateforme!";
}

// L'instruction echo permet d'afficher la valeur retournée par la fonction qui est appelée, càd afficher notre message. 
echo getHello();

//? Version la plus concise et directe possible, sans étape intermédiaire. A privilégier donc pour job03.
?>
