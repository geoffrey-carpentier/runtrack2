<?php

// On commence par le premier des nombres premiers, c'est à dire 2, on initialise donc notre variable à 2

$nombre = 2;

// On utilise une boucle while pour tester la divisibilité par tous les nombres entre 2 et 1000

while ($nombre <= 1000) {

        // On déclare une variable de type booléenne qui renvoie "vraie" ("true") si le nombre est premier

    $Premier = true;


/*Méthode "optimisée": on cherche à savoir si un nombre n est premier, 
  en vérifiant s’il est divisible par un autre nombre i strictement inférieur à n. 
  Or si la racine carrée de n n'est pas un nombre premier, alors n ne l'est forcément pas non plus
  Ainsi, il n’est pas nécessaire de vérifier la divisibilité de n par tous les nombres i jusqu’à n-1, 
  mais seulement jusqu’à la racine carrée de n.
  Cela permet de réduire le nombre de tests effectués, ce qui améliore l'efficacité de l'algorithme 
  tout particulirement pour les grands nombres.
On préferera donc écrire: */

for ($i = 2; $i <= sqrt($nombre); $i++) {
        // Si le nombre est divisible par $i,  il n'est pas premier
        if ($nombre % $i == 0) {
            $estPremier = false; // si on trouve un diviseur, on met la variable à "faux" 
            break;               // et on sort de la boucle for 
        }
    } //