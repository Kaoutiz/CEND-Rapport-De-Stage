export function loading(){
    let loading = document.getElementById("loading")
    let opacity = 1;

    window.addEventListener('DOMContentLoaded', function() {
        loading.style.display = "block";
    });

    window.addEventListener("load", function() {

        // On fait un effet de FadeOut après 1 seconde
        setTimeout(() => {
            const animation = setInterval(animateOpacity, 10);
        }, 1000);

        // On met le display none
        setTimeout(() => {
            loading.style.display = "none";
          }, 2000);
    });

    // Fonction pour animer l'opacité
    function animateOpacity() {
        // Diminuer progressivement l'opacité
        opacity -= 0.01;
    
        // Appliquer la nouvelle opacité à l'élément
        loading.style.opacity = opacity;
    
        // Arrêter l'animation si l'opacité est inférieure ou égale à 0
        if (opacity <= 0) {
            clearInterval(animation);
        }
    }
}