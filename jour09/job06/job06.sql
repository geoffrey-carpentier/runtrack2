-- Sélectionner l’ensemble des champs de la table etudiants dont le prénom commence par la lettre "T":

SELECT *                 -- Sélection de tous les champs
FROM etudiants           -- De la table "etudiants"
WHERE prenom LIKE 'T%';  -- Le prénom commence par 'T' (% représente n'importe quelle suite de caractères)
                         -- LIKE: utilisé pour les correspondances partielles (dans les chaînes de caractères).

-- Code PHP:   $sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%';"