<?php
// Déclaration des variables de types primitifs et affectation de valeurs
$booleanVar = true;  // Variable booléenne
$intVar = 777;  // Variable entière
$stringVar = "Vive le PHP! (sarcasme?)";  // Variable chaîne de caractères
$floatVar = 8.6;  // Variable nb à virgule flottante
/* On a créé 4 variables avec des types et valeurs différents en PHP
   On va faire un tableau HTML pour afficher le type, nom et valeur de chaque variable
   On va utiliser PHP pour remplier le tableau dynamiquement */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Jour 01 - Job 03</title>
    <style>
        /* Un style minimaliste pour le tableau html */
        table {
            width: 80%;
            border-collapse: collapse ; 
            margin: 25px auto; 
        }

        table, th, td {
            border: 2px solid black; 
        }

        th, td {
            padding: 15px; 
            text-align: center; 
        }

        th {
            background-color: #f2f2f2; 
        }
    </style>
</head>
<body>
    <h1>Tableau des variables PHP</h1> 

    <!-- Début du tableau HTML -->
    <table>
        <!-- Header avec les titres des 3 colonnes -->
        <thead>
            <tr>
                <th>Type</th> <!-- Colonne type de variable -->
                <th>Nom</th> <!-- Colonne nom de variable -->
                <th>Valeur</th> <!-- Colonne avec la valeur affectée -->
            </tr>
        </thead>

        <tbody>
            <!-- Ligne pour la variable booléenne -->
            <tr>
                <td><?php echo gettype($booleanVar); ?></td> <!-- Affiche le type de la variable -->
                <td>$booleanVar</td> <!-- Nom de la variable -->
                <td><?php var_dump($booleanVar); ?></td> <!-- Affiche le détail de la valeur de la variable, avec echo on a 1 donc confus -->
            </tr>

            <!-- Ligne pour la variable entière -->
            <tr>
                <td><?php echo gettype($intVar); ?></td> <!-- Affiche le type de la variable -->
                <td>$intVar</td> <!-- Nom de la variable -->
                <td><?php echo $intVar; ?></td> <!-- Affiche la valeur de la variable -->
            </tr>

            <!-- Ligne pour la variable chaîne de caractères -->
            <tr>
                <td><?php echo gettype($stringVar); ?></td> <!-- Affiche le type de la variable avec gettype -->
                <td>$stringVar</td> <!-- Nom de la variable -->
                <td><?php echo $stringVar; ?></td> <!-- Affiche la valeur de la variable -->
            </tr>

            <!-- Ligne pour la variable nb à virgule flottante -->
            <tr>
                <td><?php echo gettype($floatVar); ?></td> <!-- Affiche le type de la variable -->
                <td>$floatVar</td> <!-- Nom de la variable -->
                <td><?php echo $floatVar; ?></td> <!-- Affiche la valeur de la variable -->
            </tr>
        </tbody>
    </table>
    <!-- Merci au revoir -->

</body>
</html>
