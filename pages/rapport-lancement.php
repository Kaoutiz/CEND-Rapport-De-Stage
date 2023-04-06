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
                <a href="rapport-lancement.php"><li class="active">Rapport de lancement</li></a>
                <a href="rapport-final.php"><li class="non-active">Rapport final</li></a>
            </ul>
        </nav>
        <!-- END: NAV -->

        <!-- BEGIN: CONTENT -->
        <section id="rapport-lancement">
            <h1>Rapport de lancement</h1>
            <h2>Présentation détaillée du projet :</h2>
            <p>Comme mentionné sur la page d’accueil, le projet de ce stage est la continuation du projet de stage de l’année dernière. Pour comprendre concrètement de quoi il s’agit, il est nécessaire de comprendre le projet précédent. Ce projet nommé <span class="crucial">CloudPix</span> est l’un des nombreux modules que j’ai développés sur le site internet de <span class="crucial">CoqPix</span>. Avant de rentrer dans les détails, <span class="crucial">CoqPix</span> est un site multifonction qui permet aux entrepreneurs de gérer leur entreprise grâce à divers outils (planification de tâches, édition de factures ou de devis, envoi de documents au comptable, gestion d’équipe, etc.). <span class="crucial">CloudPix</span> permet de stocker des factures de ventes, d’achats, des notes de frais, des avoirs et des relevés bancaires. Ces documents peuvent être envoyés au comptable en un seul clic. Le comptable dispose également d’un compte <span class="crucial">CoqPix</span> mais dispose d’un portail différent avec une version du site différente également. Il dispose également d’un <span class="crucial">CloudPix</span> pour chacun des clients et il peut y trouver les documents envoyés par ses clients afin qu'il puisse les saisir. Le projet de cette année est d'ajouter une fonctionnalité à ce projet, qui permet de scanner des documents, en l'occurrence des factures d'achat et des notes de frais, pour les envoyer directement sur le <span class="crucial">CloudPix</span> du client, dans la section adéquate. Ainsi, il n'aura plus qu'à cliquer sur le bouton pour l’envoyer au comptable. Je vous invite à me rejoindre sur le rapport final afin de voir la conception dans son ensemble du projet <span class="crucial">CEND</span>.</p>
            <h2>Détail des missions au sein de ce projet :</h2>
            <p>Mes missions au sein de ce projet sont :</p>
            <ul class="rocket-list">
                <li>Faire une <span class="crucial">veille</span> technologique.</li>
                <li>La réalisation complète de l'application côté <span class="crucial">front-end</span>.</li>
                <li>La réalisation complète de l'application côté <span class="crucial">back-end</span>.</li>
            </ul>
            <p>La veille est planifiée sur une semaine et elle va me permettre de déterminer la bonne technologie à utiliser, mais également les librairies qui seront utiles pour le projet. Nous en parlerons plus dans le point suivant. La conception du <span class="crucial">front-end</span> se fera également sur une semaine, car le design est assez sobre, même s'il y a quelques complications à prendre en compte. Dans la conclusion du rapport final, nous parlerons des complications auxquelles j'ai dû faire face durant le projet. La conception du <span class="crucial">back-end</span> se fera sur deux semaines car il faut traiter plusieurs aspects complexes liés à la technologie choisie (la connexion à une base de données <span class="crucial">SQL</span> existante, l'envoi d'images au serveur, le traitement de celles-ci, l'enregistrement dans la base de données).</p>
            <h2>Analyse des besoins pour le projet :</h2>
            <ul class="rocket-list">
                <li>L'application doit être cross-plateforme pour des futures mises à jour, il faut donc le prévoir dès le départ.</li>
                <li>La connexion de l'application doit se faire via une base de données <span class="crucial">SQL</span> existante.</li>
                <li>L'application doit être fluide et rapide.</li>
            </ul>
            <h2>Veille technologique :</h2>
            <p>En faisant la veille technologique, plusieurs technologies auraient pu être choisies, voici quelques exemples :</p>
            <ul class="rocket-list">
                <li>Java</li>
                <li>Kotlin</li>
                <li>Flutter</li>
                <li>React-Native</li>
            </ul>
            <p><span class="crucial">Java</span> est le langage de programmation natif pour Android, et c'est un excellent choix. Cependant, <span class="crucial">Kotlin</span> est également une bonne alternative car il est devenu le langage officiel pour les applications Android. De plus, <span class="crucial">Kotlin</span> peut être traduit en <span class="crucial">Java</span> par le compilateur, ce qui signifie qu'il s'agit essentiellement de <span class="crucial">Java</span> mais avec une syntaxe plus simple. Par ailleurs, j'ai de bonnes bases en <span class="crucial">Kotlin</span>.</p>
            <p><span class="crucial">Flutter</span> est un Framework open-source développé par <span class="crucial">Google</span>qui permet de créer des applications cross-plateform (Android / IOS). Il utilise le langage de programmation Dart, également créé par Google. En revanche, <span class="crucial">React-Native</span> est un Framework <span class="crucial">JavaScript</span> utilisant la bibliothèque React développée par <span class="crucial">Facebook</span>, qui permet également le développement d'applications cross-plateform (Android / IOS).</p>
            <p>Pour les besoins du projet, nous pouvons déjà éliminer <span class="crucial">Java</span> et <span class="crucial">Kotlin</span> car ils nécessiteront de coder l'application deux fois dans le futur pour la rendre également disponible sur IOS. Le choix se dirige donc entre <span class="crucial">Flutter</span> et <span class="crucial">React-Native</span>. De plus en plus utilisé, <span class="crucial">React-Native</span> dispose de nombreuses bibliothèques, dont une qui répond exactement à nos besoins, à savoir la numérisation de documents <span class="crucial">(React-Native-document-scanner-plugin)</span>. <span class="crucial">React-Native</span> utilise <span class="crucial">JavaScript</span>, ce qui signifie qu'il n'est pas nécessaire d'apprendre un nouveau langage. De plus, il permet une plateforme croisée sur les applications web en plus d'Android et IOS grâce à la bibliothèque <span class="crucial">React</span>. Nous choisirons donc cette technologie.</p>
            <p>Il convient de noter que <span class="crucial">React-Native</span> ne gère pas nativement les <span class="crucial">SVG</span>, mais nous savons déjà que nous en aurons besoin car le graphiste de l'équipe m'a envoyé des maquettes et des assets qui sont au format <span class="crucial">SVG</span>. Ce format est très important car il permet d'éviter la pixélisation lors de l'affichage des éléments. Heureusement, il existe une bibliothèque <span class="crucial">(React-Native-svg)</span> qui me permettra de gérer les <span class="crucial">SVG</span> dans l'application <span class="crucial">React-Native</span>. En ce qui concerne les besoins de fluidité, la bibliothèque <span class="crucial">React-Native</span>-screen améliorera la fluidité de navigation.</p>
            <h2>Conclusion :</h2>
            <p>En conclusion, le projet <span class="crucial">CEND</span> est une évolution du projet <span class="crucial">CloudPix</span> développé l'année dernière. Le but de ce projet est d'ajouter une fonctionnalité permettant de scanner des documents tels que des factures d'achat et des notes de frais pour les envoyer directement sur le <span class="crucial">CloudPix</span> du client dans la section adéquate.</p>
            <p>Mes missions dans ce projet sont de réaliser une veille technologique, de concevoir l'application côté <span class="crucial">front-end</span> et côté <span class="crucial">back-end</span>. La veille technologique a permis de choisir la technologie <span class="crucial">React-Native</span>, qui est une alternative intéressante pour le développement d'applications cross-plateformes.</p>
            <p>La conception du <span class="crucial">front-end</span> prendra une semaine, tandis que la conception du <span class="crucial">back-end</span> nécessitera deux semaines pour prendre en compte les aspects complexes liés à la technologie choisie.</p>
            <p>Les principaux besoins pour ce projet sont que l'application doit être cross-plateform, être connectée à une base de données <span class="crucial">SQL</span> existante et être fluide et rapide.</p>
            <p>En somme, le projet <span class="crucial">CEND</span> est un projet ambitieux qui permettra de fournir aux clients de <span class="crucial">CoqPix</span> une nouvelle fonctionnalité très pratique. Je suis impatient de mettre mes compétences au service de ce projet et de le mener à bien.</p>
        </section>
        <!-- END: CONTENT -->
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