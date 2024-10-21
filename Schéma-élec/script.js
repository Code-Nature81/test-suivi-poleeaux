// script.js
$(document).ready(function() {
    // Afficher l'icône de chargement
    function showLoader() {
        $(".loader-container").fadeIn();
    }

    // Cacher l'icône de chargement
    function hideLoader() {
        $(".loader-container").fadeOut();
    }

    // Exemple d'utilisation (simuler une attente de 3 secondes)
    showLoader();

    setTimeout(function() {
        hideLoader();
    }, 10000);
});

