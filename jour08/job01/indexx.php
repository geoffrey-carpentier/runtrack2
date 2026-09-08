<?php
// On utilise (on l'appelle) la fonction session_start(), indispensable pour démarrer (ou reprendre) une session

session_start();

//! Gestion du bouton de réinitialisation //!! --> à placer avant l'incrémentation sinon ajoute 1 avant de réinitialiser
/**  On utilise isset() et la méthode POST pour vérifier l'état du formulaire, si le bouton est cliqué, 
* on réinitialise la variable "nbvisites" (le compteur) à 0 */
if (isset($_POST['reset'])) {
    // Réinitialise la variable 'nbvisites' à 0.
    // Ceci efface le compteur de visites.
    $_SESSION['nbvisites'] = 0;
    echo "<p>Compteur réinitialisé.</p>"; // Affiche un message de confirmation.
}

//! On vérifie si la variable de session ($_SESSION) "nbvisites" existe, càd si la page a déja été visitée
// Si elle n'existe pas, c'est donc que la page est visitée pour la première fois
if (!isset($_SESSION['nbvisites'])) {
    // On initialise donc notre variable à 1 pour la première visite.
    $_SESSION['nbvisites'] = 1;
} else {
// Si ce n'est pas la première visite, alors incrémentation de 1 pour ajouter la visite courante
    $_SESSION['nbvisites']++;
}
 
//! On va afficher le contenu de la variable "nbvisites", qui indique donc le nombre de visites pour cette session
// avec echo affiche le contenu de la variable, le nombre de visites cumulées
// On peut concaténer un texte (chaînes de caractères) pour expliquer le contexte, ce à quoi correspond le nombre affiché
echo "Vous avez visité cette page " . $_SESSION['nbvisites'] . " fois.";

//! On peut structurer la page en HTML pour l'affichage et le formulaire
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>

    <form method="post">
        <!-- //! Formulaire pour réinitialiser le compteur -->
        <!-- //! La méthode 'post' est utilisée pour envoyer les données du formulaire. -->
        <input type="submit" name="reset" value="Réinitialiser">
        <!-- //! Bouton de réinitialisation -->
        <!-- //! Le nom 'reset' est utilisé pour identifier le bouton dans le code PHP. -->
    </form>

</body>
</html>