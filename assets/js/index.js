import { cookieAcceptation } from "./cookieAcceptation.js";
import { loading } from "./loading.js";
import { progressBar } from "./progressbar.js";
import { nav } from "./nav.js";

document.addEventListener("DOMContentLoaded", function() {

    nav();
    loading();
    cookieAcceptation();

    // On affiche le footer après un petit délais
    setTimeout(() => {
        document.getElementsByTagName("footer")[0].style.display = "block";
    }, "100")

    // On véirfie si la page est l'index comme ça on lance les fonctions lié à cette page uniquement sur celle-ci
    let url = window.location.href;

    // On execture les scripts lié à la pages rapport-final uniquement
    if (url.indexOf("rapport-final.php") !== -1) {
        progressBar();
    } 

});
  