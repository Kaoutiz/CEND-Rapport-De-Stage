export function progressBar(){

    // Ondéfinit nos variables
    let titleChapter = document.getElementById("title-chapter");
    let sections = document.getElementsByClassName("timeline-step");
    let state = "step0";
    let chapter = 
    {
        "step1" : "Présentation de l'entreprise",
        "step2" : "CEND, qu'est-ce que c'est ?",
        "step3" : "Quels sont les prérequis ?",
        "step4" : "Mise en place de l'environnement NodeJS",
        "step5" : "Mise en place de l'environnement React Native",
        "step6" : "Création d'un système de connexion lié à une base de données SQL existante",
        "step7" : "Récupération de l'ID de l'utilisateur et transmission entre les différents écrans grâce aux 'props'",
        "step8" : "Création de la page de scan",
        "step9" : "Récupération du code en base64 du scan",
        "step10" : "Envoi d'une requête au serveur avec Ajax",
        "step11" : "Création d'une navigation dans l'application",
        "step12" : "Traitement de la requête côté serveur en PHP",
        "step13" : "Enregistrement des scans dans la base de données avec les bons paramètres en fonction du type de scan choisi",
        "step14" : "Récupération du résultat de la requête",
        "step15" : "Conclusion"
    };
    let previousChapter = document.getElementById("previous-chapter");
    let nextChapter = document.getElementById("next-chapter");
    let readChapter = [];

    // On verifie nos cookie pour voir si des sections ont déjà été lus

    // Fonction qui récupère la valeur d'un cookie par son nom
    function getCookie(name) {

        const cookies = document.cookie.split(';');
        
        for(let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i].trim();
            if(cookie.startsWith(name + '=')) {
                return cookie.substring(name.length + 1);
            }
        }
        
        return null;
    }
  
    // Utilisation de la fonction pour récupérer la valeur du cookie
    const monCookieValue = getCookie('step');

    // Si le cookie n'est pas vide
    if(monCookieValue != null){

        // On échappe les '"' de la chaine pour éviter les problèmes
        let monCookieValueReformat = monCookieValue.replace(/"/g, "");

        // On définit le tableau readChapter avec les sections stocké en cookies
        readChapter = monCookieValueReformat.substring(1, monCookieValueReformat.length - 1).split(",");

        for(let i= 0 ; i < readChapter.length; i++){
            document.querySelector('[data-step =' + readChapter[i] + ']').classList.add("active");
        }
    }

    for(let i = 0; i < sections.length; i++){

        // On affiche le titre des section au passage de la souris pour avoir un aperçus de ce qu'on va y trouver
        sections[i].addEventListener("mouseenter", function(){
            let stepSection = sections[i].getAttribute("data-step");
            titleChapter.textContent = chapter[stepSection];
        });

        // On vide l'affichage des titre lorsque la souris quitte la zone
        sections[i].addEventListener("mouseleave", function(){
            titleChapter.textContent = "";
        });

        // Si on clique sur une section
        sections[i].addEventListener("click", function(){

            // On cache tous les contenues des sections
            let stepSection = document.getElementsByClassName("stepSections");

            for(let j = 0; j < stepSection.length; j++){
                stepSection[j].classList.add("d-none")
            }

            // On définit le state actuelle sur la section cliqué
            state = sections[i].getAttribute("data-step");

            // On affiche le contenue de la section en cours
            let currentSection = document.getElementById(state);
            currentSection.classList.remove("d-none")

            // On cache tout les curseur de la progressebar
            let cursors = document.getElementsByClassName("cursor");

            for(let k = 0; k < cursors.length; k++){
                cursors[k].classList.add("d-none");
            }

            // On affiche le curseur en cours
            document.querySelector('[data-step=' + state + ']').children[0].classList.remove("d-none");
        });
    }

    // On définit ce qu'il va se passé au clique sur la première section "acceuil"
    let firstSection = document.getElementById("start-progressbar");

    firstSection.addEventListener("click", function(){

        // On définit le state sur la section actuelle
        state = "step0";

        // On cache tous les contenues des sections
        let stepSection = document.getElementsByClassName("stepSections");

        for(let i = 0; i < stepSection.length; i++){
            stepSection[i].classList.add("d-none")
        }

        // On affiche le contenue de la section en cours
        let currentSection = document.getElementById(state);
        currentSection.classList.remove("d-none")

        // On cache tout les curseur de la progressebar
        let cursors = document.getElementsByClassName("cursor");

        for(let j = 0; j < cursors.length; j++){
            cursors[j].classList.add("d-none");
        }

        // On cache le lien chapitre précédent
        previousChapter.classList.add("d-none");
    });

    // On définit ce qu'il va se passé au clique sur la dernière section "Fin"
    let lastSection = document.getElementById("end-progressbar");

    lastSection.addEventListener("click", function(){

        // On définit le state sur la section actuelle
        state = "step16";

        // On cache tous les contenues des sections
        let stepSection = document.getElementsByClassName("stepSections");

        for(let i = 0; i < stepSection.length; i++){
            stepSection[i].classList.add("d-none")
        }

        // On affiche le contenue de la section en cours
        let currentSection = document.getElementById(state);
        currentSection.classList.remove("d-none")

        // On cache tout les curseur de la progressebar
        let cursors = document.getElementsByClassName("cursor");

        for(let j = 0; j < cursors.length; j++){
            cursors[j].classList.add("d-none");
        }

        // On cache le lien chapitre suivant
        nextChapter.classList.add("d-none");
        
    });

    nextChapter.addEventListener("click", function(){
        
        // On récupère le numéro de l'étape
        let step = state.substring(4);
        let stepParse = parseInt(step);

        // On calcule l'étape suivante
        let nextStep = stepParse + 1;
        state = "step" + nextStep;
        

        // On détermine l'étape précédente
        let readStep = nextStep - 1;

        // On ajotue la section qui a été validé au tableau
        if (!readChapter.includes("step" + readStep)) {
            readChapter.push("step" + readStep);
        }
        // On vérifie les chapitre qui ont été validé et on applique un active dessus.
        for(let i = 0; i < nextStep; i++){

            if(i == 0){
                document.querySelector('[data-step=step0]').classList.add("active");
            }

            if(i >= 1){
                document.querySelector('[data-step=step' + readStep + ']').classList.add("active")
            }

            if(i >= 15){
                document.querySelector('[data-step=step16]').classList.add("active");

                // On ajoute manuellement la dernière étape car on aura pas de lien "Chapitre suivant" sur la dernière étape
                readChapter.push("step16")
            }
            
        }
    
        // On ajouté la section lus dans les cookies
        document.cookie = 'step=' + JSON.stringify(readChapter);
        
        // On cache tous les contenues des sections
        let stepSection = document.getElementsByClassName("stepSections");

        for(let i = 0; i < stepSection.length; i++){
            stepSection[i].classList.add("d-none")
        }

        // On affiche le contenue de la section en cours
        let currentSection = document.getElementById(state);
        currentSection.classList.remove("d-none")

        // On cache tout les curseur de la progressebar
        let cursors = document.getElementsByClassName("cursor");

        for(let j = 0; j < cursors.length; j++){
            cursors[j].classList.add("d-none");
        }

        // On vérifie si l'étape est supérieur à 0, si c'est le cas on affiche le liens vers le chapitre précédent
        if(state != "step0"){
            previousChapter.classList.remove("d-none");
        }else{
            previousChapter.classList.add("d-none");
        }

        // On vérifie qu'on est pas sur le premier ou le dernier chaptire
        if(state != "step16" || state != "step0"){
            // On affiche le curseur en cours
            document.querySelector('[data-step=' + state + ']').children[0].classList.remove("d-none");
        }

        // Si on est sur le premier chapitre
        if(state == "step0"){
            // On ajoute la propriété "active" sur la première section
            document.querySelector('[data-step=step0]').classList.add("active");
        }

        // Si on est sur le dernier chapitre
        if(state == "step16"){
            // On ajoute la propriété "active" sur la dernière section
            document.querySelector('[data-step = step16]').classList.add("active");

            // On cache le lien chapitre suivant
            nextChapter.classList.add("d-none");
        }
    });

    previousChapter.addEventListener("click", function(){
        
        // On récupère le numéro de l'étape
        let step = state.substring(4);
        let stepParse = parseInt(step);

        // On calcule l'étape suivante
        let previousStep = stepParse - 1;
        state = "step" + previousStep;
        
        // On cache tous les contenues des sections
        let stepSection = document.getElementsByClassName("stepSections");

        for(let i = 0; i < stepSection.length; i++){
            stepSection[i].classList.add("d-none")
        }

        // On affiche le contenue de la section en cours
        let currentSection = document.getElementById(state);
        currentSection.classList.remove("d-none")

        // On cache tout les curseur de la progressebar
        let cursors = document.getElementsByClassName("cursor");

        for(let j = 0; j < cursors.length; j++){
            cursors[j].classList.add("d-none");
        }

        // On vérifie si l'étape est supérieur à 0, si c'est le cas on affiche le liens vers le chapitre précédent
        if(state != "step0"){
            previousChapter.classList.remove("d-none");
        }else{
            previousChapter.classList.add("d-none");
        }

        // On vérifie qu'on est pas sur le premier ou le dernier chaptire
        if(state != "step0"){
            // On affiche le curseur en cours
            document.querySelector('[data-step=' + state + ']').children[0].classList.remove("d-none");
        }

        // Si on est sur le premier chapitre
        if(state == "step0"){
            // On ajoute la propriété "active" sur la première section
            document.querySelector('[data-step = step16]').classList.add("active");
        }

    });
}