<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gast Bryan - Rapport de stage</title>

    <!-- BEGIN: Librairies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- END: Librairies -->

    <!-- BEGIN: Styles -->
    <link rel="stylesheet" href="assets/css/styles.css">    
    <!-- END: Styles -->
</head>
    <body>
    <!-- BEGIN: JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END: JQuery -->
    <header>
        <img src="assets/img/logo.svg" alt="Logo" width="200">
        <div id="right-element"></div>
    </header>

    <!-- faire un calcule de progression global a affiché en % (section * 100 / 15) -->

    <section id="progression">
        <p id="title-chapter"></p>
        <div id="progressbar">
            <div id="start-progressbar" data-step="step0">
                <i class='bx bx-home icon-progressbar'></i>
            </div>
            <div class="timeline-steps">
                <div class="timeline-step" data-step="step1">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step2">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step3">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step4">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step end-part" data-step="step5">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step6">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step7">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step8">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step9">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step end-part" data-step="step10">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step11">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step12">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step13">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step14">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
                <div class="timeline-step" data-step="step15">
                    <div class="cursor d-none"><i class='bx bxs-up-arrow'></i></div>
                </div>
            </div>
            <div id="end-progressbar" data-step="step16">
                <i class='bx bxs-flag-alt icon-progressbar'></i>
            </div>
        </div>
    </section>

    <!-- BEGIN: Step0 -->
    <section id="step0" class="stepSections">
        <h1>Rapport de stage 2023 - Gast Bryan</h1>
        <p>Bienvenue sur mon rapport de stage de l'année 2023. Je vais vous présenter ici le projet que j'ai réalisé lors de mon alternance dans l'entreprise Angels Digital. Pour rapel je suis en alternance dans cette entreprise depuis le 02 septembre 2022 suite au stage de l'année dernière. Le stage vais débuter le 04 avril 2022 et c'est étendue jusqu'au 31 août 2022. Il devait duré initialement 1 mois.</p>
    </section>
    <!-- END: Step0 -->
    <!-- BEGIN: Step1 -->
    <section id="step1" class="stepSections d-none">
        <h1>Présentation de l'entreprise</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step1 -->
    <!-- BEGIN: Step2 -->
    <section id="step2" class="stepSections d-none">
        <h1>CEND, qu'est-ce que c'est ?</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step2 -->
    <!-- BEGIN: Step3 -->
    <section id="step3" class="stepSections d-none">
        <h1>Quels sont les prérequis ?</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step3 -->
    <!-- BEGIN: Step4 -->
    <section id="step4" class="stepSections d-none">
        <h1>Mise en place de l'environnement NodeJS</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step4 -->
    <!-- BEGIN: Step5 -->
    <section id="step5" class="stepSections d-none">
        <h1>Mise en place de l'environnement React Native</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step5 -->
    <!-- BEGIN: Step6 -->
    <section id="step6" class="stepSections d-none">
        <h1>Création d'un système de connexion lié à une base de données SQL existante</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step6 -->
    <!-- BEGIN: Step7 -->
    <section id="step7" class="stepSections d-none">
        <h1>Récupération de l'ID de l'utilisateur et transmission entre les différents écrans grâce aux 'props'</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step7 -->
    <!-- BEGIN: Step8 -->
    <section id="step8" class="stepSections d-none">
        <h1>Création de la page de scan</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step8 -->
    <!-- BEGIN: Step9 -->
    <section id="step9" class="stepSections d-none">
        <h1>Récupération du code en base64 du scan</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step9 -->
    <!-- BEGIN: Step10 -->
    <section id="step10" class="stepSections d-none">
        <h1>Envoi d'une requête au serveur avec Ajax</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step10 -->
    <!-- BEGIN: Step11 -->
    <section id="step11" class="stepSections d-none">
        <h1>Création d'une navigation dans l'application</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step11 -->
    <!-- BEGIN: Step12 -->
    <section id="step12" class="stepSections d-none">
        <h1>Traitement de la requête côté serveur en PHP</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step12 -->
    <!-- BEGIN: Step13 -->
    <section id="step13" class="stepSections d-none">
        <h1>Enregistrement des scans dans la base de données avec les bons paramètres en fonction du type de scan choisi</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step13 -->
    <!-- BEGIN: Step14 -->
    <section id="step14" class="stepSections d-none">
        <h1>Récupération du résultat de la requête</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step14 -->
    <!-- BEGIN: Step15 -->
    <section id="step15" class="stepSections d-none">
        <h1>Conclusion</h1>
        <p>Contenue</p>
    </section>
    <!-- END: Step15 -->
    <!-- BEGIN: Step16 -->
    <section id="step16" class="stepSections d-none">
        <h1>Fin</h1>
        <p>Terminé</p>
    </section>
    <!-- END: Step16 -->
    <section id="nav-chapter">
        <div id="previous-chapter-zone"><div id="previous-chapter" class="d-none"><i class='bx bx-chevron-left' ></i><span>Chapitre précédent</span></div></div>
        <div id="next-chapter-zone"><div id="next-chapter"><span>Chapitre suivant</span><i class='bx bx-chevron-right' ></i></div></div>
    </section>
    
    <!-- BEGIN: Footer -->
    <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#553189" fill-opacity="1" d="M0,96L20,128C40,160,80,224,120,224C160,224,200,160,240,128C280,96,320,96,360,96C400,96,440,96,480,122.7C520,149,560,203,600,234.7C640,267,680,277,720,261.3C760,245,800,203,840,176C880,149,920,139,960,138.7C1000,139,1040,149,1080,181.3C1120,213,1160,267,1200,250.7C1240,235,1280,149,1320,101.3C1360,53,1400,43,1420,37.3L1440,32L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
        </svg>
        <p>Gast Bryan - DEUST Webmaster 2ème année - Rapport de stage 2023</p>
    </footer>
    <!-- END: Footer -->

    <!-- BEGIN: Librairies -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- END: Librairies -->

    <!-- BEGIN: Scripts -->
    <script type="module" src="assets/js/index.js"></script>
    <!-- END: Scripts -->
    </body>
</html>