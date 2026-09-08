-- --requête permettant de sélectionner le prenom, lenom et la date de naissance des étudiants qui sont nés entre 1998 et 2018:
-- --BETWEEN: opérateur qui permet de sélectionner des valeurs dans une plage (ici entre '1998-01-01' et '2018-12-31').

SELECT prenom, nom, naissance
FROM etudiants
WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31';  

-- Code PHP:   $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31';"
