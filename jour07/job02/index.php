
<?php
/** Créez une fonction nommée “bonjour($jour)”.
 *Cette fonction prend en paramètre un booléen nommé “$jour”.
 * ● Si le paramètre “$jour” vaut true, la fonction doit afficher : “Bonjour”,
 * ● Si le paramètre “$jour” vaut false, la fonction doit afficher : “Bonsoir”.**/


// On définie la fonction "bonjour" en lui attribuant 1 paramètre $jour, de type booléen 
function bonjour(bool $jour) // ici, bool n'est pas indispensable car déduit (if else), mais c'est mieux de le préciser
{
    /** La variable $jour est de type booléen ==> on a donc une condition à tester pour 2 cas possibles : true ou false
     * on va donc utiliser une condition de type if (si $jour est vrai) ... else (sinon, s'il est faux)*/

    if ($jour) {
        echo "Bonjour"; //- 1er cas: si $jour est vrai, on affiche "Bonjour" avec la fonction echo          
    } 
      else {
        echo "Bonsoir"; //- 2ème cas: sinon $jour est donc faux, et alors on affiche "Bonsoir"
    }
}
// La fonction est définie, on peut maintenant la tester en l'appelant avec les 2 valeurs possibles de $jour
echo "<br>";
bonjour(true); // on appelle la fonction avec la condition où $jour est vrai, "Bonjour" s'affiche sur la page
echo "<br><br>";
bonjour(false); // on appelle la fonction avec la condition où $jour est faux, "Bonsoir" s'affiche sur la page
?>              
