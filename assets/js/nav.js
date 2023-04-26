export function nav(){

    const navOpenButton = document.getElementById("icon-nav-mobile-open");
    const navCloseButton = document.getElementById("icon-nav-mobile-close");
    const navContent = document.getElementById("nav-mobile-content");

    // Lorsqu'on clique sur le bouton pour ouvrir la nav mobile
    navOpenButton.addEventListener("click", function(){

        // On affiche le bouton pour fermer le nav et cache celui d'ouverture
        navOpenButton.classList.add("d-none");
        navCloseButton.classList.remove("d-none");

        // On affiche le contenue de la nav-mobile
        navContent.classList.remove("d-none");
    });

    // Lorsqu'on clique sur le bouton pour fermer la nav mobile
    navCloseButton.addEventListener("click", function(){

        // On affiche le bouton pour ouvrir le nav et cache celui de fermeture
        navOpenButton.classList.remove("d-none");
        navCloseButton.classList.add("d-none");

        // On cache le contenue de la nav-mobile
        navContent.classList.add("d-none");
    });
}