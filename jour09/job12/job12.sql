--  requête permettant de sélectionner l’ensemble des salles en les triant par capacité décroissante:

SELECT *                   -- SELECT: sélectionner toutes les colonnes (ici "*"), lire des données
FROM salles                -- FROM: de la table "salles"
ORDER BY capacite DESC;    -- ORDER BY: trier les résultats par la colonne "capacite" en ordre décroissant

-- Code PHP:   $sql = "SELECT * FROM salles ORDER BY capacite DESC;"