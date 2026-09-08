<?php
//! On commence par démarrer la session, 
// Bien que nous utilisions des cookies, il est toujours bon d'initialiser la session.

session_start();

// //! Gestion du bouton de réinitialisation
/** On vérifie si le formulaire a bien été soumis avec isset() et la méthode POST,
 *si on clique sur le bouton, la valeur "nbvisites" du cookie est réinitialisée à 0. 
 */
//? On le place en amont de l'incrémentation, sinon on aura +1 ajouté (au clic sur le bouton) avant la réinitialisation
if (isset($_POST['reset'])) {
    // Réinitialise le cookie "nbvisites" à 0.
    // setcookie() est utilisé pour supprimer un cookie en définissant sa date d'expiration dans le passé.
    setcookie('nbvisites', 0, time() - 3600, '/');
    echo "<p>Compteur réinitialisé.</p>"; // Affiche un message de confirmation.
}

// //! Vérification de l'existence du cookie "nbvisites"
// Si le cookie n'existe pas (!isset), cela signifie que c'est la première visite.
if (!isset($_COOKIE['nbvisites'])) {
    /**  On définit un cookie avec setcookie():
    * Le premier argument est le nom du cookie.
    * Le deuxième argument est sa valeur.
    * Le troisième argument correspond à sa durée de vie, ensuite il expire (3600 sec soit 1heure).
    * Le quatrième argument est le chemin sur le serveur où le cookie est valide (ici, "/"la racine du site).*/
    setcookie('nbvisites', '0', time() + 3600, '/');
}

// On incrémente la valeur du cookie de 1.
// On récupère la valeur actuelle du cookie, on y ajoute 1, et on la réécrit la nouvelle valeur dans le cookie.
$nbVisites = $_COOKIE['nbvisites'] + 1;
setcookie('nbvisites', $nbVisites, time() + 3600, '/');

// //! Affichage du nombre de visites
// Affiche la valeur actuelle du cookie "nbvisites" dans le navigateur.
echo "Vous êtes passés par ici " . $_COOKIE['nbvisites'] . " fois.";


// //! Structure HTML pour l'affichage et le formulaire
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites (Cookies)</title>
</head>
<body>

    <form method="post">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>

</body>
</html>