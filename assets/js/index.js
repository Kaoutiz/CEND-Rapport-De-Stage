import { cookieAcceptation } from "./cookieAcceptation.js";
import { loading } from "./loading.js";
import { progressBar } from "./progressbar.js";

document.addEventListener("DOMContentLoaded", function() {

    loading();
    cookieAcceptation();

    // On véirfie si la page est l'index comme ça on lance les fonctions lié à cette page uniquement sur celle-ci
    let url = window.location.href;

    if (url.indexOf("index.php") !== -1 || url.indexOf("") !== -1) {
        // On execture les scripts lié à cette pages uniquement
    }

    // On execture les scripts lié à la pages rapport-final uniquement
    if (url.indexOf("rapport-final.php") !== -1) {
        progressBar();
    }

    

});
  