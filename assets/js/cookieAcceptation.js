export function cookieAcceptation(){

    // Définition des variables
    let btnAllowCookie = document.getElementById("accept-cookie");
    let btnDenyCookie = document.getElementById("deny-cookie");

 
    // Si on sait aps encore si l'utilisateur souhaite ou non enregistrer ses cookies
    if (!sessionStorage.getItem('cookiesAccepted')) {

        // On demande à l'utilisateur si il souhaite accepter ou non les cookies
        showAskCookie();
        
        // Si il accepte
        btnAllowCookie.addEventListener("click", function(){
            hideAskCookie();
            sessionStorage.cookiesAccepted = "true";
        });

        // Si il refuse
        btnDenyCookie.addEventListener("click", function(){
            hideAskCookie();
            sessionStorage.cookiesAccepted = "false";
        });
        
    }else{
        // Si on connais déjà le choix de l'utilisateur
        hideAskCookie();
    }

    function showAskCookie(){
        document.getElementById("cookie-overlay").classList.remove("d-none");
        document.getElementById("cookie-cover").style.filter = "blur(5px)";
        document.getElementById("cookie-cover").style.position = "fixed";
    }

    function hideAskCookie(){
        document.getElementById("cookie-overlay").classList.add("d-none");
        document.getElementById("cookie-cover").style.filter = "blur(0px)";
        document.getElementById("cookie-cover").style.position = "relative";
    }
  
    // Vérifie si le lien cliqué est interne
    function isInternalLink(link) {
        return link.href.indexOf(window.location.origin) === 0;
    }

    // Supprime la clé `cookiesAccepted` uniquement lorsque l'utilisateur quitte le site
    window.addEventListener('beforeunload', function(event) {
        // Vérifie si le lien cliqué est interne
        if (!isInternalLink(event.target)) {
            // Supprime la clé `cookiesAccepted`
            sessionStorage.removeItem('cookiesAccepted');
        }
    });
    
}