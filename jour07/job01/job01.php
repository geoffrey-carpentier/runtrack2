<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <title>Jour 07 - Job 01</title>
</head>

<body>
    <h1>Jour 07 - Les Fonctions - Job 01</h1>
    <h2>&#10067 Rappel du sujet:</h2>
    <p>Créer une fonction <strong>"hello()"</strong> qui affiche <em>"Hello LaPlateforme!"</em>.<br>
        Cette fonction, une fois appelée, doit afficher sur la page :<i> “Hello LaPlateforme!”.</i>

    </p>

    <h3>&#9989<u>Résultat attendu:</u></h3>
    <p>
        <?php
        hello();
        ?>
    </p>
    <h3>&#9196<u> Résultat obtenu:</u></h3>
</body>

</html><hr>


<!--La Solution au job 01 - Partie Résultat (code PHP) située sous la ligne continue -->


<?php

// On veut créer une fonction "hello()" donc une fonction qui ne prend pas de paramètre () en entrée .
function hello()
{
    /** La fonction doit simplement afficher un message donné - une chaîne de caractères - lorsqu'on l'appelle
     *  elle n'a donc pas besoin de retourner une valeur (donc pas besoin de "return") *  
     *  elle ne contiendra donc que l'instruction d'afficher le message, donc on utilise echo "notre message" **/
    echo "<i>Hello LaPlateforme!</i>";
}

// La fontion est créée, il suffit donc de l'appeler pour quelle s'execute, donc qu'elle affiche le message:

hello();

?>
<hr>
