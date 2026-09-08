-- --requête permettant de sélectionner l’ensemble des informations des étudiants qui ont plus de 18 ans.

SELECT *
FROM etudiants
WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) > 18;
-- -- TIMESTAMPDIFF: fonction qui calcule la différence entre deux dates.
-- YEAR: unité de temps (année) pour le calcul de la différence.   
-- naissance: champ de la table "etudiants" représentant la date de naissance.
-- CURDATE(): fonction qui renvoie la date actuelle.
-- > 18: condition pour sélectionner les étudiants de plus de 18 ans.

-- Code PHP:   $sql = "SELECT * FROM etudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) > 18;"
