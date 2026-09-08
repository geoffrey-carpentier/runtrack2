<?php


// On crée un tableau associatif appelé $variables
// Chaque élément du tableau représente une variable avec son nom comme clé (ex: 'myBool')
// et sa valeur comme contenu (ex: true)
$variables = [
    'myBool' => true,           // Un booléen : peut être vrai (true) ou faux (false)
    'myInt' => 18,              // Un entier : un nombre sans virgule
    'myString' => "Hello World", // Une chaîne de caractères : du texte
    'myFloat' => 61.8           // Un nombre flottant : avec une virgule
];

// On commence à afficher du HTML en utilisant PHP
// Chaque ligne ici utilise echo pour envoyer du texte HTML au navigateur

echo "<!DOCTYPE html>"; // Indique que le document est une page web en HTML5
echo "<html lang='fr'>"; // Début du document HTML, avec la langue définie sur français

// On ouvre la section <head> qui contient les réglages de la page
echo "<head>
        <meta charset='UTF-8'> 
        <title>Tableau des variables PHP</title> 
        <!-- Un peu de CSS pour style minimal du tableau -->
        <style>
            table {
                border-collapse: collapse; 
                width: 50%;                
                margin: 30px auto;         
            }
            th, td {
                border: 2px solid #333;    
                padding: 10px;             
                text-align: center;       
            }
            th {
                background-color: #f0f0f0; 
            }
        </style>
      </head>"; // Fin de la section <head>

// On ouvre le body de la page
echo "<body>";

// On affiche un titre 
echo "<h2 style='text-align:center;'>Les Variables Primitives en PHP</h2>";

// On commence le tableau HTML
echo "<table>
        <thead> <!-- Partie haute du tableau avec les titres des colonnes -->
            <tr> <!-- Une ligne contenant trois colonnes -->
                <th>Type</th>   <!-- Colonne pour le type de la variable -->
                <th>Nom</th>    <!-- Colonne pour le nom de la variable -->
                <th>Valeur</th> <!-- Colonne pour la valeur contenue dans la variable -->
            </tr>
        </thead>
        <tbody>"; // Début du corps du tableau, où seront affichées les données

// On parcourt chaque variable du tableau $variables
foreach ($variables as $nom => $valeur) {
    // $nom contient le nom de la variable (ex: 'myInt')
    // $valeur contient la valeur associée (ex: 18)

    // On récupère le type de la variable avec la fonction gettype()
    // Cela renvoie une chaîne comme "boolean", "integer", "string", etc.
    $type = gettype($valeur);

    // On prépare la valeur à afficher dans le tableau
    // Si c'est un booléen, on affiche "true" ou "false" (plus lisible que 1 ou rien)
    // Sinon, on affiche la valeur telle quelle
    $valAffichee = is_bool($valeur) ? ($valeur ? 'true' : 'false') : $valeur;

    // On affiche une ligne du tableau avec les trois informations :
    // - le type
    // - le nom (avec un $ devant pour montrer que c’est une variable PHP)
    // - la valeur formatée
    echo "<tr>
            <td>$type</td>
            <td>\$$nom</td>
            <td>$valAffichee</td>
          </tr>";
}

// Fin de la boucle : toutes les variables ont été affichées

// On ferme le corps du tableau et le tableau lui-même
echo "</tbody></table>";

// On ferme la section visible de la page
echo "</body></html>";

?>