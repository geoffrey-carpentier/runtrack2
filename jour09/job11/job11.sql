-- Requete permettant de selectionner la somme des capacités des salles:
SELECT SUM(capacite) AS capacite_totale
FROM salles;

-- SUM: la fonction qui calcule la somme des valeurs d'une colonne (ici "capacite") de la table "salles".
-- AS: permet de renommer le résultat de la requête SUM en "capacite_totale".


-- Code PHP:   $sql = "SELECT SUM(capacite) AS capacite_totale FROM salles;"