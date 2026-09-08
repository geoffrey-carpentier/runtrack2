-- Requête permettant de compter le nombre d'etudiants:

SELECT COUNT(*)    -- COUNT: compter le nombre total(*) d'occurrences
FROM etudiants;    -- FROM: de la table "etudiants"


-- Requête permettant de compter le nombre d'etudiants en renommant le résultat de la requête COUNT en "nombre_etudiants":

SELECT COUNT(*)       -- COUNT: compter le nombre d'occurrences
AS nombre_etudiants   -- AS: renommer le résultat de la requête COUNT en "nombre_etudiants"
FROM etudiants;       -- FROM: de la table "etudiants"

