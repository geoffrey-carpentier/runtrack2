-- requête permettant de récupérer le nom des salles et le nom de leur étage.

SELECT salles.nom AS nom_salle, etage.nom AS nom_etage  -- SELECT: sélectionner les colonnes, renommer les résultats en "nom_salle" et "nom_etage"
FROM salles                                             -- FROM: de la table "salles"
JOIN etage ON salles.id_etage = etage.id                -- JOIN: lier la table "salles" à la table "etage" sur la colonne "id_etage"
                                                        -- ON: condition de jointure entre les deux tables (ici "salles.id_etage" = "etage.id")
