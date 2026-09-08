<?php
// Création d'une variable str et affectation à la valeur "LaPlateforme"

$str = "LaPlateforme";

//Affichage de la valeur de la variable str avec des balises HTML pour mise en page

echo "<h1>$str</h1>";  

// Déclaration des variables str2 et str3 avec leur valeur respectives
$str2 = "Vive";
$str3 = "!";

//Affichage de la concaténation des variables avec . et des espaces entre chacune

echo $str2." ".$str." ".$str3;

// on aerer un peu //
echo "<br><br>";

// Affichage de la même chaîne en utilisantles guillemets et les espaces inclus
echo "$str2 $str $str3<br><br>";

// On aurait aussi pu créer une variable str0 qui contiendrait les espaces
$str0 = " ";
echo $str2.$str0.$str.$str0.$str3;

echo "<hr>";

//Création de la variable val et affectation à la valeur 6 puis on l'affiche
$val = 6;
echo $val;

//On ajoute 4 à la variable val , avec $val+=n qui équivaut à $val=$val+n
$val+=4;
echo "<br>".$val;

// On crée une variable myBool et lui affecte la valeur true, puis on affiche son contenu
$myBool = true;
echo "<br>".$myBool;

//On lui affecte la valeur false avec =false ou on inverse la valeur de myBool avec l'opérateur ! puis on affiche le contenu
$myBool = false;
echo "<br>".$myBool;
// la valeur false s'affiche comme une chaîne vide
//On inverse à nouveau la valeur de myBool qui est maintenant false avec l'opérateur ! pour obtenir true et montrer que cela fonctionne
echo "<br>";
$myBool = !$myBool;
echo $myBool;
// La valeur s'affiche comme 1 donc true, c'est bon
?>




