<?php
// On initialise la variable $nombre à 1
$nombre = 1;

// On utilise une boucle while pour afficher tous les nombres de 1 à 100
while ($nombre <= 100) {
    // On va vérifier plusieurs conditions pour chaque nombre, pour afficher le résultat approprié:
    // - si le nombre est divisible (%) à la fois (&&) par 3 et par 5
    if ($nombre % 3 == 0 && $nombre % 5 == 0) {
        echo "FizzBuzz<br />";    //Si c'est le cas, on affiche "FizzBuzz" à la place du nombre
    } 
    // - si le nombre est divisible par 3
    elseif ($nombre % 3 == 0) {
        echo "Fizz<br />";    //Si c'est le cas, on affiche "Fizz" à la place du nombre
    } 
    // - si le nombre est divisible par 5
    elseif ($nombre % 5 == 0) {
        echo "Buzz<br />";    //Si c'est le cas, on affiche "Buzz" à la place du nombre
    } 
    // Si aucune des conditions (if) précédentes n'est remplie, (else-->"sinon") c'est le nombre qui est affiché
    else {
        echo $nombre . "<br />";
    }

    // On incrémente le nombre de 1 à chaque itération
    $nombre++;
}
?>