<?php
// R: Un nombre est dit premier s'il est supérieur à 1 et n'a pas d'autres diviseurs que 1 et lui-même.

// On commence par le premier des nombres premiers, c'est à dire 2, on initialise donc notre variable à 2

$nombre = 2;



// On utilise une boucle while pour parcourir tous les nombres jusqu'à atteindre 1000

while ($nombre <= 1000) {

    // On déclare une variable de type booléenne qui renvoie "vraie" ("true") si le nombre est premier

    $Premier = true;  

   /* Une méthode "non optimisée" (cf. job05/index_optimal.php) consiste à tester la divisibilité de chaque
   valeur de $nombre (de 2 à 1000 donc) par toutes les valeurs inférieures à elle, (de 2 jusqu'à $nombre-1).
  
   Pour ce faire on va utiliser une boucle "for" imbriquée dans notre boucle while.
   On commence donc la boucle avec $i initialisé à 2, et on continue tant que $i est strictement inférieur à $nombre.
   A chaque itération, on incrémente $i de 1.
   */
    for ($i = 2; $i < $nombre; $i++) {   
        if ($nombre % $i == 0) {  // Si le nombre est divisible par $i,  il n'est pas premier
            $Premier = false;
            break;
        }
    }
    
    // Si le nombre est premier, on il sera affiché
    if ($Premier) {
        echo $nombre . "<br />";
    }

    // On incrémente $nombre de 1 à chaque itération de la boucle 
    $nombre++;
}
?>