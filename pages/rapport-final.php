<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gast Bryan - Rapport de stage</title>
    <link rel="icon" href="../assets/img/favicon.svg" />

    <!-- BEGIN: Librairies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- END: Librairies -->

    <!-- BEGIN: Styles -->
    <link rel="stylesheet" href="../assets/css/styles.css">    
    <!-- END: Styles -->
</head>
    <body>
    <div id="loading">
        <div id="loading-icon"></div>
    </div>
    <!-- BEGIN: JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END: JQuery -->
    <?php include("../templates/cookie.php"); ?>
    <div id="cookie-cover">

        <!-- BEGIN: HEADER -->
        <?php include("../templates/header.php"); ?>
        <!-- END: HEADER -->

        <!-- BEGIN: NAV -->
        <nav>
            <ul>
                <a href="../index.php"><li class="non-active">Accueil</li></a>
                <a href="rapport-lancement.php"><li class="non-active">Rapport de lancement</li></a>
                <a href="rapport-final.php"><li class="active">Rapport final</li></a>
            </ul>
        </nav>
        <!-- END: NAV -->

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
            <p class="text-center">Terminé: <span id="pourcent-read">0</span>%</p>
        </section>
        
        <!-- BEGIN: Step0 -->
        <section id="step0" class="stepSections">
            <p class="text-left d-flex align-items-baseline"><span>Difficulté:</span><i class='bx bx-signal-3' id="difficulty-state" title="Modéré"></i></p>
            <h1><i class='bx bx-book-content icon-title'></i><span>Rapport de stage final</span></h1>
            <p>Bienvenue sur mon rapport de stage de l'année 2023. Je vais vous présenter ici le projet que j'ai réalisé lors de mon alternance dans l'entreprise Angels Digital. Pour rapel je suis en alternance dans cette entreprise depuis le 02 septembre 2022 suite au stage de l'année dernière. Le stage vais débuter le 04 avril 2022 et c'est étendue jusqu'au 31 août 2022. Il devait duré initialement 1 mois.</p>
        </section>
        <!-- END: Step0 -->
        <!-- BEGIN: Step1 -->
        <section id="step1" class="stepSections d-none">
            <h2>Présentation de l'entreprise</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step1 -->
        <!-- BEGIN: Step2 -->
        <section id="step2" class="stepSections d-none">
            <h2>CEND, qu'est-ce que c'est ?</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step2 -->
        <!-- BEGIN: Step3 -->
        <section id="step3" class="stepSections d-none">
            <h2>Mise en place de l'environnement de développement</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step3 -->
        <!-- BEGIN: Step4 -->
        <section id="step4" class="stepSections d-none">
            <h2>Installation de Node.JS</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step4 -->
        <!-- BEGIN: Step5 -->
        <section id="step5" class="stepSections d-none">
            <h2>Initialisé un projet React-Native</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step5 -->
        <!-- BEGIN: Step6 -->
        <section id="step6" class="stepSections d-none">
            <h2>Création d'une navigation dans l'application</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step6 -->
        <!-- BEGIN: Step7 -->
        <section id="step7" class="stepSections d-none">
            <h2>Création d'un système de connexion</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step7 -->
        <!-- BEGIN: Step8 -->
        <section id="step8" class="stepSections d-none">
            <h2>Récupération de l'ID de l'utilisateur et transmission grâce aux 'props'</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step8 -->
        <!-- BEGIN: Step9 -->
        <section id="step9" class="stepSections d-none">
            <h2>Création de la page de scan</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step9 -->
        <!-- BEGIN: Step10 -->
        <section id="step10" class="stepSections d-none">
            <h2>Récupération du code en base64 du scan</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step10 -->
        <!-- BEGIN: Step11 -->
        <section id="step11" class="stepSections d-none">
            <h2>Envoi d'une requête au serveur avec Ajax</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step11 -->
        <!-- BEGIN: Step12 -->
        <section id="step12" class="stepSections d-none">
            <h2>Traitement de la requête côté serveur en PHP</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step12 -->
        <!-- BEGIN: Step13 -->
        <section id="step13" class="stepSections d-none">
            <h2>Enregistrement des scans dans la base de données</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step13 -->
        <!-- BEGIN: Step14 -->
        <section id="step14" class="stepSections d-none">
            <h2>Récupération du résultat de la requête</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step14 -->
        <!-- BEGIN: Step15 -->
        <section id="step15" class="stepSections d-none">
            <h2>Conclusion</h2>
            <p>Contenue</p>
        </section>
        <!-- END: Step15 -->
        <!-- BEGIN: Step16 -->
        <section id="step16" class="stepSections d-none">
            <h2>Fin</h2>
            <p>Terminé</p>
        </section>
        <!-- END: Step16 -->
        <section id="nav-chapter">
            <div id="previous-chapter-zone"><div id="previous-chapter" class="d-none"><i class='bx bx-chevron-left' ></i><span>Chapitre précédent</span></div></div>
            <div id="next-chapter-zone"><div id="next-chapter"><span>Terminer ce chapitre</span><i class='bx bx-chevron-right' ></i></div></div>
        </section>
    </div>
    
    <!-- BEGIN: Footer -->
    <?php include("../templates/footer.php"); ?>
    <!-- END: Footer -->

    <!-- BEGIN: Librairies -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- END: Librairies -->

    <!-- BEGIN: Scripts -->
    <script type="module" src="../assets/js/index.js"></script>
    <!-- END: Scripts -->
    </body>
</html>