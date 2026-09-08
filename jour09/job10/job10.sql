-- Requete qui permet de calculer la superficie de l'ensemble des étages:
SELECT SUM(superficie) -- SUM: fonction qui calcule la somme des valeurs d'une colonne.
FROM etage;

-- Requete qui permet de calculer la superficie de l'ensemble des étages, et de l'afficher sous le nom "superficie_totale":

SELECT SUM(superficie) AS superficie_totale
FROM etage;
-- SUM: fonction qui calcule la somme des valeurs d'une colonne.
-- AS: permet de renommer le résultat de la requête SUM en "superficie_totale".
-- superficie: champ de la table "etages" représentant la superficie de chaque étage.   

-- Code PHP:   $sql = "SELECT SUM(superficie) AS superficie_totale FROM etages;"

