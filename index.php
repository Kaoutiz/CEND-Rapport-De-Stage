<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gast Bryan - Rapport de stage</title>
    <link rel="icon" href="assets/img/favicon.svg" />

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
    <?php include("templates/cookie.php"); ?>
    <div id="cookie-cover">

        <!-- BEGIN: HEADER -->
        <header>
            <div id="left-element">
                <a href="index.php">
                    <div id="logo"></div>
                </a>
            </div>
            
            <div id="right-element"></div>
        </header>
        <!-- END: HEADER -->

        <!-- BEGIN: NAV -->
        <nav>
            <ul>
                <a href="index.php"><li class="active">Accueil</li></a>
                <a href="pages/rapport-lancement.php"><li class="non-active">Rapport de lancement</li></a>
                <a href="pages/rapport-final.php"><li class="non-active">Rapport final</li></a>
            </ul>
        </nav>
        <!-- END: NAV -->

        <!-- BEGIN: CONTENT -->
        <section>
            <h1>Rapport de stage - 2023 Gast Bryan</h1>
            <h3>Informations</h3>  
            <ul id="information-stage">
                <li class="d-flex"><span class="d-flex align-items-center"><i class='bx bx-map icon-infos' ></i> Lieu de stage:</span><span class="info-stage name-entreprise">Angels Digital</span></li>
                <li class="d-flex"><span class="d-flex align-items-center"><i class='bx bx-user icon-infos' ></i> Maître de stage:</span><span class="info-stage">Karim MOUFEKKIR</span></li>
                <li class="d-flex"><span class="d-flex align-items-center"><i class='bx bx-buildings icon-infos' ></i> Adresse:</span><span class="info-stage">8T Boulevard Bonrepos, 31000 TOULOUSE</span></li>
            </ul>
        </section>
        <section class="mt-2">
            <h2>Présentation de l'entreprise</h2>
            <p>L'entreprise dans laquelle j'effectue mon alternance se nomme Angels Digital. Elle est située à Toulouse et nous travaillons dans les locaux de l'entreprise d'audit Action Plus, qui appartient au même employeur mais ne se consacre pas du tout à la même activité. En effet, Audit Action Plus est un cabinet comptable tandis qu'Angels Digital est une entreprise de conception de logiciels et de conseil pour les entreprises souhaitant se digitaliser. La société est dirigée par M. Moufekkir en tant que président général et M. Smara en tant que président, et compte 2 alternants, dont moi. À ma connaissance, il n'y a pas d'employé sous contrat. L'entreprise a été créée le 1er décembre 2014.</p>
        </section>
        <section class="mt-2">
            <h2>Sujet du stage</h2>
            <p>Le projet de ce stage est la continuation du projet du stage de l'année dernière. J'expliquerai en détail le projet de l'année dernière et celui-ci dans le rapport final pour bien comprendre de quoi il s'agit. En résumé, il s'agit d'une application mobile de numérisation de documents comptables. Cette application permet aux utilisateurs d'un compte CoqPix de numériser des documents et de les envoyer directement dans le cloud de leur compte CoqPix personnel. Cette fonctionnalité simplifie encore plus l'utilisation de la plateforme en ligne et permet également d'envoyer des documents au comptable de manière plus rapide. Pour comprendre ce qu'est CoqPix ainsi que son cloud, j'ai détaillé tout cela sur la première page du rapport de lancement, accessible <a href="pages/rapport-lancement.php">ici</a>. Ce projet s'est étalé sur plusieurs mois et j'ai travaillé en collaboration avec un graphiste de l'entreprise qui a réalisé les visuels que j'ai ensuite adaptés pour l'application.</p>   
        </section>
        <section class="mt-2">
            <h3>Mes liens:</h3>
            <p class="social-link-p"><a href="https://www.bryangast.fr" target="_blank" class="d-flex align-items-center"><i class='bx bx-link icon-social'></i><span class="link-social">https://www.bryangast.fr</span></a></p>
            <p class="social-link-p"><a href="https://www.instagram.com/kaoutiz.dev/" target="_blank" class="d-flex align-items-center"><i class='bx bxl-instagram-alt icon-social'></i><span class="link-social">Kaoutiz.dev</span></a></p>
        </section>
        <!-- END: CONTENT -->
    </div>
    
    <!-- BEGIN: Footer -->
    <?php include("templates/footer.php"); ?>
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