-- requête permettant de récupérer le nom de l'étage ayant la salle avec la plus grande capacité
-- (et afficher aussi le nom de cette salle ainsi que sa capacité).
-- Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room”,

SELECT 
    etage.nom AS Biggest_Room, 
    salles.nom AS nom_salle, 
    salles.capacite AS capacite
FROM 
    salles
JOIN 
    etage ON salles.id_etage = etage.id
WHERE salles.capacite = (SELECT MAX(capacite) FROM salles);


-- Méthode alternative :

SELECT
    etage.nom AS Etage,
    salles.nom AS BiggestRoom,
    salles.capacite AS Capacite
FROM
    etage 
JOIN
    salles ON etage.id = salles.id_etage
ORDER BY
    salles.capacite DESC
LIMIT 1;