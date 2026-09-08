-- -- requête permettant de sélectionner la capacité moyenne des salles:

SELECT AVG(capacite) AS capacite_moyenne
FROM salles;

-- AVG: fonction qui calcule la moyenne des valeurs d'une colonne (ici "capacite") de la table "salles".
-- AS: permet de renommer le résultat de la requête AVG en "capacite_moyenne".
-- capacite: champ de la table "salles" représentant la capacité de chaque salle.

-- Code PHP:   $sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles;"

SELECT prenom, nom, naissance
FROM etudiants
WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31';
