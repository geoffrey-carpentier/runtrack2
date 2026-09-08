<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <title>Jour 08 - Session / Cookies</title>
</head>

<body>
    <h1>Jour 08 - Session / Cookies - Job 01</h1>
    <h2>&#10067 Rappel du sujet:</h2>
    <p>Créez une variable de session nommée <strong>“nbvisites”</strong>. A chaque fois que la page est
visitée, ajoutez <strong>1</strong>. Afficher le contenu de cette variable.
Ajoutez un bouton nommé <strong>“reset”</strong> qui permet de réinitialiser ce compteur .

    </p>

</body>

</html><hr>
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
    // On doit initialiser la variable "nbvisites" à 0 pour commencer le décompte des visites.
    $_SESSION['nbvisites'] = 0;
}
// On veut ajouter 1 au "compteur" à chaque visite de la page, avec une incrémentation de 1 de la variable (+=1 ou ++)
$_SESSION['nbvisites']++;

//! On va afficher le contenu de la variable "nbvisites" qui nous indique donc le nombre de visites pour cette session
// avec echo on va afficher le contenu de la variable, le nombre de visites cumulées
// On peut concaténer un texte (chaînes de caractères) pour expliquer le contexte, ce à quoi correspond le nombre affiché
echo "Vous avez visité cette page " . $_SESSION['nbvisites'] . " fois.";
?>
<form method="post">
        <!-- //! Formulaire pour réinitialiser le compteur -->
        <!-- //! La méthode 'post' est utilisée pour envoyer les données du formulaire. -->
        <input type="submit" name="reset" value="Réinitialiser">
        <!-- //! Bouton de réinitialisation -->
        <!-- //! Le nom 'reset' est utilisé pour identifier le bouton dans le code PHP. -->
</form>






