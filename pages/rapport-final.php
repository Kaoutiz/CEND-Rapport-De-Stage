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
    <link rel="stylesheet" href="../lib/prism.css">
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
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

        <nav id="nav-mobile">
            <i class='bx bx-menu' id="icon-nav-mobile-open"></i>
            <i class='bx bx-x d-none' id="icon-nav-mobile-close"></i>

            <ul id="nav-mobile-content" class="d-none">
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
            <p>Bienvenue sur mon rapport de stage de l'année 2023. Je vais vous présenter le projet que j'ai réalisé lors de mon alternance dans l'entreprise Angels Digital. Pour rappel, j'effectue mon alternance dans cette entreprise depuis le 02 septembre 2022, suite à mon stage de l'année dernière. Le stage avait débuté le 04 avril 2022 et s'est terminé le 31 août 2022, avec une durée initiale prévue d'un mois. Pour faciliter la compréhension de ma mission actuelle, je vais brièvement vous décrire ce que j'ai accompli lors de mon stage de l'année dernière, car ma mission actuelle en est la suite directe.</p>
            <h2>Projet: CoqPix</h2>            
            <a href="../assets/img/coqpix-projet.jpg" target="_blank"><img src="../assets/img/coqpix-projet.jpg" alt="Projet CoqPix" width="960"></a>
            <p>Coqpix est un site polyvalent qui permet aux entrepreneurs de gérer leur entreprise, quelle que soit sa taille. Le site comprend un système de cloud dont nous parlerons dans le paragraphe suivant, un système de création de factures et de devis, de gestion de l'inventaire, ainsi que des outils de veille et de gestion d'équipe avec un système de planification de tâches. J'ai travaillé sur de nombreux modules de ce site, mais le module le plus important pour le projet de cette année est CloudPix, car mon stage consiste à poursuivre et développer ce module.</p>
            <h2>Projet: CloudPix</h2>
            <a href="../assets/img/cloudpix-projet.jpg" target="_blank"><img src="../assets/img/cloudpix-projet.jpg" alt="Projet CloudPix" width="960"></a>
            <p>CloudPix est un service de stockage en ligne que j'ai développé durant mon stage de l'année dernière. Il permet de stocker différents types de documents tels que des factures d'achat, des factures de vente, des notes de frais, des avoirs, des relevés bancaires et des relevés de caisse. Les utilisateurs peuvent stocker jusqu'à 1 Go de données sur leur compte CloudPix, au-delà de quoi une formule payante est nécessaire. Le cloud ne sert pas seulement à stocker des fichiers, mais également à les transmettre au comptable en un clic. Les utilisateurs peuvent également consulter l'historique de leurs envois au comptable.</p>
            <div class="alert alert-info" role="alert"><span class="bold"><i class='bx bx-info-circle'></i>Note:</span> <span>Il est important de noter que l'envoi de documents est irréversible, même si l'utilisateur supprime le document de son cloud, le comptable dispose toujours d'une copie.</span></div>
            <a href="../assets/img/cloudpix-file.jpg" target="_blank"><img src="../assets/img/cloudpix-file.jpg" alt="Fichier CloudPix" width="300" class="img-litte-size"></a>
            <p>Le comptable dispose également d'un compte sur CoqPix, mais avec une interface différente de celle de ses clients. Il a également accès à un CloudPix, qui regroupe tous ses clients. Si un nouveau document non saisi est présenté, une pastille de couleur s'affiche sur le client concerné dans l'espace du comptable pour l'alerter qu'un nouveau document est disponible. Si plus de 5 documents sont à saisir, la pastille passe de orange à rouge pour signaler l'état d'urgence.</p>
            <a href="../assets/img/cloudpix-back.jpg" target="_blank"><img src="../assets/img/cloudpix-back.jpg" alt="CloudPix Back" width="960"></a>
            <p>En cliquant sur l'un d'entre eux, le comptable peut accéder au CloudPix du client concerné, où il pourra voir les documents que le client a décidé de partager avec lui.</p>
            <a href="../assets/img/cloudpix-back2.jpg" target="_blank"><img src="../assets/img/cloudpix-back2.jpg" alt="CloudPix Back client" width="960"></a>
            <p>Le comptable a la possibilité de saisir le document reçu et de lui attribuer un numéro de saisie. Maintenant que le contexte est posé, nous aborderons dans le prochain chapitre l'entreprise dans laquelle j'évolue, afin que vous puissiez mieux comprendre le projet.</p>

            <!-- BEGIN: Système d'alert
            <pre><code class="language-html"> &lt;p&gt;Ceci est du code&lt;/p&gt; </code></pre>
            <div class="alert alert-info" role="alert"><span class="bold"><i class='bx bx-info-circle'></i>Note:</span> <span>Ceci est une note.</span></div>
            <div class="alert alert-light" role="alert"><span class="bold"><i class='bx bx-question-mark' ></i>Question:</span> <span>Ceci est une question ?</span></div>
            <div class="alert alert-warning" role="alert"><span class="bold"><i class='bx bx-error-circle' ></i>Attention:</span> <span>Ceci est une remarque importante !</span></div>
            END: Système d'alert -->
        </section>
        <!-- END: Step0 -->
        <!-- BEGIN: Step1 -->
        <section id="step1" class="stepSections d-none">
            <h1>Présentation de l'entreprise</h1>
            <p>L'entreprise dans laquelle j'effectue mon alternance s'appelle Angels Digital. Elle est basée à Toulouse et nous travaillons dans les locaux de l'entreprise <a href="https://auditaction.eu/" target="_blank">d'Audit Action Plus <i class='bx bx-link-external'></i></a>, qui appartient au même employeur mais n'a pas du tout la même activité. En effet, Audit Action Plus est un cabinet comptable, alors qu'Angels Digital est une entreprise qui conçoit des logiciels et propose des conseils pour la transformation digitale des entreprises. La société est dirigée par M. Moufekkir qui est mon maître de stage. Il y a actuellement deux alternants, dont moi, mais je n'ai pas connaissance d'employés sous contrat. L'entreprise a été créée le 1er décembre 2014.</p>
            <h2>Organigramme de l'entreprise</h2>
            <a href="../assets/img/organigramme.png" target="_blank"><img src="../assets/img/organigramme.png" alt="Organigramme de l'entreprise" id="organigramme"></a>
        </section>
        <!-- END: Step1 -->
        <!-- BEGIN: Step2 -->
        <section id="step2" class="stepSections d-none">
            <h1>CEND, Qu’est-ce que c’est ?</h1>
            <p>CEND est le projet de stage de cette année, c’est une application mobile de scan de documents, un outil complémentaire à CloudPix dont nous avions parlé dans les chapitres précédents. Il va permettre de scanner des documents et ainsi les retrouver directement dans notre espace CloudPix rangé dans la bonne rubrique selon le choix de l’utilisateur. L’application de scan prend en charge uniquement les notes de frais et les factures d’achats car les factures de ventes et les avoirs ainsi que les autres documents se créent depuis l’espace CoqPix. Grâce à CEND, en quelques clics un client peut scanner un document et l’envoyer à son comptable.</p>
            <h2>Parcours utilisateur</h2>
            <p>Tout d'abord, il faut que l'utilisateur dispose d'un compte CoqPix sans quoi l'application ne sera pas utilisable. Une fois le compte CoqPix créé, automatiquement un comptable lui sera assigné. Il peut alors se rendre sur son application CEND et se connecter avec son identifiant et son mot de passe de son compte CoqPix.</p>
            <p>Une fois connecté, il a alors accès à plusieurs modules :</p>
            <ul class="rocket-list">
                <li>Capture</li>
                <li>Géolocalisation</li>
                <li>V-Card</li>
                <li>Articles</li>
            </ul>
            <p>Le seul module en place pour le moment est <span class="italic bold">Capture</span>. Le reste des modules est à venir. Une fois choisi, il a le choix entre <span class="italic bold">facture d'achats</span> ou <span class="italic bold">notes de frais</span>. Au clic sur l'un d'entre eux, la caméra se lance et il peut alors scanner son document. Il a la possibilité de faire un ou plusieurs scans. Une fois le scan terminé, il est ramené à la page de choix des modules. S'il annule le scan, il sera également ramené à la page des modules. D'ailleurs, s'il essaie de revenir en arrière depuis la page des modules, une alerte se déclenchera pour savoir s'il souhaite vraiment fermer l'application afin d'éviter d'être à la fois connecté et sur la page de connexion. S'il fait plusieurs scans, les fichiers seront fusionnés en un seul PDF sur son espace CloudPix.</p>
        </section>
        <!-- END: Step2 -->
        <!-- BEGIN: Step3 -->
        <section id="step3" class="stepSections d-none">
            <h1>Mise en place de l'environnement de développement</h1>
            <p>Avant de commencer à coder, j’ai dû mettre en place un environnement de développement. J’ai commencé par effectuer une veille des technologies afin de déterminer laquelle serait la plus adaptée aux besoins de l’application. Il était nécessaire que l’application soit compatible avec IOS pour les futures mises à jour. J'ai choisi React Native pour plusieurs raisons : il offre de bonnes performances et permet de créer des applications multiplateformes. J'ai détaillé davantage le processus de veille dans le <a href="rapport-lancement.php" target="_blank">rapport de lancement</a>.</p>
            <div class="alert alert-light" role="alert"><span class="bold"><i class='bx bx-question-mark' ></i>Question:</span> <span>Quels sont les prérequis ?</span></div>
            <p>Pour développer une application React-Native, les prérequis nécessaires sont :</p>
            <ul class="rocket-list">
                <li>Un ordinateur sous Windows, MacOS ou Linux</li>
                <li>Une tablette ou un smartphone sous Android</li>
                <li>Un éditeur de code (par exemple, VSCode)</li>
                <li>Node.js (en version 14.x.x recommandée pour la compatibilité avec React-Native)</li>
                <li>Un gestionnaire de paquets, comme npm ou yarn</li>
                <li>Le framework React (s'il n'est pas déjà installé)</li>
                <li>Le framework React-Native</li>
                <li>D'autres packages et dépendances, comme react-native-svg, react-native-svg-uri, react-native-gesture-handler, react-native-safe-area-context, @react-navigation/native, @react-navigation/stack, @react-navigation/native-stack, react-native-screens, react-hook-form, react-native-image-base64 et react-native-document-scanner-plugin</li>
            </ul>
            <div class="alert alert-warning" role="alert"><span class="bold"><i class='bx bx-error-circle' ></i>Attention:</span> <span>Il est important de noter que les problèmes de dépendance peuvent être une difficulté majeure lors du développement d'une application React-Native.</span></div>
            <p>En effet, les différentes versions des dépendances peuvent ne pas être compatibles entre elles, ce qui peut causer des erreurs et des bugs. Il est donc recommandé de bien gérer les versions des dépendances et de s'assurer de leur compatibilité.</p>
        </section>
        <!-- END: Step3 -->
        <!-- BEGIN: Step4 -->
        <section id="step4" class="stepSections d-none">
            <h1>Installation de Node.js</h1>
            <p>J’ai eu besoin de Node.js pour créer le projet React-Native, mais il m’a également fallu npm, qui est un gestionnaire de paquets qui va me permettre de gérer les dépendances. Il est livré avec Node.js. Comme je l’ai dit au chapitre précédent, il me faut la version 14 de Node.js et surtout pas la dernière version car j’ai eu quelques soucis de compatibilité avec React-Native. À l’heure où j’écris ces lignes, nous sommes à la version 18.15.0 LTS de Node.js. J’ai donc pris la version 14.17.3 LTS pour le projet.</p>
            <a href="../assets/img/node-install.jpg" target="_blank"><img src="../assets/img/node-install.jpg" alt="Instalaltion de Node.js" width="960"></a>
            <p>Une fois installé, je peux ouvrir un PowerShell et saisir la commande :</p>
            <pre><code class="language-sh">node -v</code></pre>
            <p>Si la version de Node.js s’affiche, c’est que l’installation s’est bien déroulée et que je suis prêt à initialiser le projet. Dans le chapitre suivant, nous verrons comment j'ai fait cela.</p>
        </section>
        <!-- END: Step4 -->
        <!-- BEGIN: Step5 -->
        <section id="step5" class="stepSections d-none">
            <h1>Initialisé un projet React-Native</h1>
            <p>Pour commencer, je crée un dossier dans lequel je vais créer l’application. Une fois cela fait, il faut se rendre dans ce dossier depuis un terminal (celui de mon éditeur de code, par exemple) et saisir la commande suivante :</p>
            <pre><code class="language-sh">npx react-native init MaSuperApplication</code></pre>
            <p>Ensuite, je me rends dans le dossier généré en tapant :</p>
            <pre><code class="language-sh">cd MaSuperApplication</code></pre>
            <p>Node.js m’a créé toute une architecture de dossiers pour mon application.</p>
            <a href="../assets/img/react-native-architecture.jpg" target="_blank"><img src="../assets/img/react-native-architecture.jpg" alt="Architecture React-Native" width="300" class="img-litte-size"></a>
            <p>J’ai alors la possibilité de lancer l’application avec la commande :</p>
            <pre><code class="language-sh">npx react-native run-android</code></pre>
            <a href="../assets/img/application-react-native.jpg" target="_blank"><img src="../assets/img/application-react-native.jpg" alt="Application React-Native" width="300" class="img-litte-size"></a>
            <p>Dans cet exemple, j’ai exécuté l’application sur un émulateur, mais pour mon projet, je ne pourrai pas faire cela car j’ai besoin d’accéder à la caméra de l’appareil et les émulateurs sont limités quand il s’agit d’accéder à des périphériques physiques tels que la caméra ou le micro. Heureusement, je dispose d’une tablette sous Android qui va me permettre de poursuivre le développement.</p>
        </section>
        <!-- END: Step5 -->
        <!-- BEGIN: Step6 -->
        <section id="step6" class="stepSections d-none">
            <h1>Création d'une navigation dans l'application</h1>
            <p>La première chose à faire va être d'éditer le fichier App.tsx à la racine du projet afin de créer le système de navigation. Je vais avoir besoin de 4 pages. Dans le développement mobile, on appelle cela des screens. Donc je vais commencer par créer un dossier <span class="italic bold">screens</span> qui va contenir mes différents scripts :</p>
            <ul class="rocket-list">
                <li>Home.js</li>
                <li>Nav.js</li>
                <li>Capture.js</li>
                <li>Scan.js</li>
            </ul>
            <p>Pour créer une navigation entre ces différents screens, je vais avoir besoin des bibliothèques suivantes :</p>
            <ul class="rocket-list">
                <li>react-native-gesture-handler</li>
                <li>react-native-safe-area-context</li>
                <li>@react-navigation/native</li>
                <li>@react-navigation/stack</li>
                <li>@react-navigation/native-stack</li>
                <li>react-native-screens</li>
            </ul>
            <p><span class="italic bold">react-native-gesture-handler</span> permet de gérer les interactions gestuelles sur l'application. (pincements, rotations, tapotements, etc.)</p>
            <p><span class="italic bold">react-native-safe-area-context</span> permet de gérer l'alignement du contenu et l'affichage de la barre de navigation dans l'application.</p>
            <p><span class="italic bold">@react-navigation/native, @react-navigation/stack, @react-navigation/native-stack</span> sont les bibliothèques principales permettant la navigation entre les différents screens.</p>
            <p><span class="italic bold">react-native-screens</span> permet d'améliorer les performances en optimisant la gestion des screens. Grâce à elle, la navigation est beaucoup plus fluide.</p>
            <p>Pour installer les bibliothèques, j'ai dû saisir les commandes suivantes à la racine du projet :</p>
            <pre><code class="language-sh">npm install react-native-gesture-handler</code></pre>
            <pre><code class="language-sh">npm install react-native-safe-area-context</code></pre>
            <pre><code class="language-sh">npm install @react-navigation/stack</code></pre>
            <pre><code class="language-sh">npm install @react-navigation/native-stack</code></pre>
            <pre><code class="language-sh">npm install react-native-screens</code></pre>
            <p>Pour les importer, j'ai rajouté les lignes suivantes dans mon fichier App.tsx :</p>
            <label>App.tsx</label>
            <pre><code class="language-js">import * as React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';</code></pre>
            <p>Je vais également importer mes différents screens. Dans le dossier screens, je vais créer 4 fichiers :</p>
            <ul class="rocket-list">
                <li>Home.js</li>
                <li>Nav.js</li>
                <li>Capture.js</li>
                <li>Scan.js</li>
            </ul>
            <p>Dans chaque fichier, je vais mettre du code temporaire. Par exemple, pour Home :</p>
            <label>Home.js</label>
            <pre><code class="language-js">import * as React from 'react'
import {View } from 'react-native'

const Home = () => {
  return (
    &lt;View&gt;
    &lt;/View&gt;
  );
};

export default Home;</code></pre>
        <p>Maintenant que les différentes bibliothèques sont installées et importées, je vais coder le système de navigation.</p>
        <label>App.tsx</label>
        <pre><code class="language-js">import * as React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import Home from './screens/Home';
import Nav from './screens/Nav';
import Capture from './screens/Capture';
import Scan from './screens/Scan';

const Stack = createNativeStackNavigator();
const App = () =&gt; {
  return (
    &lt;NavigationContainer&gt;
      &lt;Stack.Navigator screenOptions={{headerShown: false}}&gt;
        &lt;Stack.Screen name="Home" component={Home} /&gt;
        &lt;Stack.Screen name="Nav" component={Nav} /&gt;
        &lt;Stack.Screen name="Capture" component={Capture} /&gt;
        &lt;Stack.Screen name="Scan" component={Scan} /&gt;
      &lt;/Stack.Navigator&gt;
    &lt;/NavigationContainer&gt;
  );
};

export default App;</code></pre>
        <div class="alert alert-info" role="alert"><span class="bold"><i class='bx bx-info-circle'></i>Note:</span> <span>J'ajoute l'option headerShown à false afin de masquer la barre de navigation dans l'application.</span></div>
        <div class="alert alert-warning" role="alert"><span class="bold"><i class='bx bx-error-circle' ></i>Attention:</span> <span>Le premier élément sera le screen par défaut.</span></div>
        <p>La navigation est désormais en place, dans le prochain chapitre je construirai la page Home.js afin de mettre en place un système de connexion.</p>
        </section>
        <!-- END: Step6 -->
        <!-- BEGIN: Step7 -->
        <section id="step7" class="stepSections d-none">
            <h1>Création d'un système de connexion</h1>
            <p>La partie complexe de cette partie n'est pas tant le traitement back-end que nous verrons après, mais la réalisation front-end. En effet, je dispose des 3 fichiers SVG suivants :</p>
            <div class="d-flex flex-column">
                <a href="../assets/img/top-left-element.jpg" target="_blank"><img src="../assets/img/top-left-element.jpg" alt="Element top application" width="50" class="asset-element-little-size"></a>
                <a href="../assets/img/bottom-element-App.jpg" target="_blank"><img src="../assets/img/bottom-element-App.jpg" alt="Element bottom application" width="100" class="asset-element-medium-size"></a>
                <a href="../assets/img/logo.jpg" target="_blank"><img src="../assets/img/logo.jpg" alt="Logo CEND" width="100" class="asset-element-medium-size"></a>
            </div>
            <p>Le problème est que React Native ne gère pas les SVG nativement. J'ai dû utiliser les bibliothèques <span class="italic bold">react-native-svg</span> et <span class="italic bold">react-native-svg-uri</span> pour que cela fonctionne. <span class="italic bold">react-native-svg-uri</span> permet la gestion du chemin relatif du fichier SVG que l'on souhaite afficher.</p>
            <p>Il a ensuite fallu importer tous les fichiers et les bibliothèques :</p>
            <label>Home.js</label>
            <pre><code class="language-js">import SvgUri from 'react-native-svg-uri';
import Logo from '../sources/logo.svg';
import BottomElement from '../sources/bottom-element.svg';
import TopLeftElement from '../sources/top-left-element.svg';</code></pre>
            <p>Puis créer les différents composants :</p>
            <pre><code class="language-js">&lt;SvgUri width="250" height="200" source={TopLeftElement} style={styles.topElement} /&gt;</code></pre>
            <pre><code class="language-js">&lt;SvgUri width="300" height="300" source={Logo} style={styles.logo} /&gt;</code></pre>
            <pre><code class="language-js">&lt;SvgUri width="100%" height="200" source={BottomElement} style={styles.bottomElement} /&gt;</code></pre>
            <p>Et enfin les styliser :</p>
            <label>Home.js</label>
            <pre><code class="language-css">topElement: {
    position: 'absolute',
    right: -100,
    top: 0,
}</code></pre>
<pre><code class="language-css">logo:{
    position: 'absolute',
    top: 0,
    left: 40,
    resizeMode : "cover",
}</code></pre>
<pre><code class="language-css">bottomElement: {
    position: 'absolute',
    left: 0,
    bottom: 0,
    width: "100%"
}</code></pre>
            <p>Une fois les différents éléments SVG mis en place, il faut créer le formulaire de connexion. Pour cela, j'ai utilisé la bibliothèque <span class="italic bold">react-hook-form</span> qui me permet de créer des composants <span class="italic bold">Controller</span> et de capturer les valeurs saisies.</p>
            <label>Home.js</label>
            <pre><code class="language-js">&lt;Controller
    control={control}
    render={({field: { onChange, onBlur, value }}) =&gt; (
        &lt;TextInput
            style={styles.input}
            onBlur={onBlur}
            onChangeText={value =&gt; onChange(value)}
            value={value}
            placeholder="Adresse email..."
            placeholderTextColor="#7608b6"
        /&gt;
    )}
    name="email"
    rules={{ required: true }}
/&gt;</code></pre>
            <label>Home.js</label>
            <pre><code class="language-js">&lt;Pressable style={styles.button} onPress={handleSubmit(onSubmit)}&gt;
    &lt;Text style={styles.buttonTitle}&gt;Se connecter&lt;/Text&gt;
&lt;/Pressable&gt;</code></pre>
            <div class="alert alert-light" role="alert"><span class="bold"><i class='bx bx-question-mark' ></i>Question:</span> <span>Côté back-end ça donne quoi ?</span></div>
            <p>Pour ce projet, nous avons déjà une base de données SQL existante pour le site CoqPix à laquelle je vais devoir me connecter avec l’application. La connexion ne se fera pas depuis l’application directement mais via un fichier de connexion en PHP stocké sur le serveur où est hébergé CoqPix. Je vais lui passer les informations entrées par l’utilisateur et le serveur nous renverra l’autorisation ou non d’effectuer la connexion ainsi que l’ID de la session de l’utilisateur.</p>
            <div class="alert alert-info" role="alert"><span class="bold"><i class='bx bx-info-circle'></i>Note:</span> <span>L’ID de la session est stocké dans la base de données mais est différent de l’ID de l’utilisateur. Un groupe d’utilisateurs dispose du même identifiant de session s’ils appartiennent à la même société. Cet identifiant est utilisé partout sur le site à chaque action effectuée ou donnée à afficher depuis la base de donnée.</span></div>
            <p>La première chose à faire est de récupérer le contenu des champs email et mot de passe entrés par l’utilisateur et de les passer au script PHP distant en utilisant de l’ajax :</p>
            <label>Home.js</label>
            <pre><code class="language-js">const onSubmit = data => {
  
  const options = {
    method: 'POST',
    headers: {
      'Accept': 'application/JSON',
      'Content-Type': 'application/JSON',
    },
    body: JSON.stringify(data)
  }

  fetch( 'http://192.168.1.12:9000/connect_scan_app.php' , options)
  .then(response => response.JSON())
  .then(JSON => {
    if(JSON.status != "not connected"){
        console.log("Utilisateur connecté !");
        navigation.navigate('Nav', {id: JSON.id_session});
    }else{
      console.log("Echec de la connexion !")
    }
  }) 
};</code></pre>
            <p>J'utilise une promesse pour récupérer la réponse du serveur.</p>
            <div class="alert alert-light" role="alert"><span class="bold"><i class='bx bx-question-mark' ></i>Question:</span> <span>Que se passe-t-il du côté serveur ?</span></div>
            <label>connect_scan_app.php (sur le serveur)</label>
            <pre><code class="language-php">&lt;?php
header('Content-Type: application/JSON');

// Récupération des données passées via l'application
$data = JSON_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$password = $data['password'];

// Connexion à la base de données
$host = "mariadb_bdd";
$user = "root";
$pass = "root";
$dbname = "u243663731_";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

// Requête SQL pour récupérer le hash du mot de passe correspondant à l'e-mail fourni
$sql = "SELECT password_membre FROM membres WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
$hash = $stmt->fetchColumn();

if (password_verify($password, $hash)) {
    // Requête SQL pour récupérer l'id_session correspondant à l'utilisateur qui vient de se connecter
    $sql = "SELECT id_session FROM membres WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $id_session = $stmt->fetchColumn();

    // Transmettre la variable $id_session en JSON
    echo JSON_encode(array("status" => "connected", "id_session" => $id_session));
} else {
    // L'utilisateur n'existe pas ou le mot de passe est incorrect
    echo JSON_encode(array("status" => "not connected"));
}

?&gt;</code></pre>
            <p>Je commence simplement par définir le type de réponse que je vais renvoyer, ici du <span class="italic bold">JSON</span>, et mettre dans des variables l’email et le mot de passe reçus.</p>
            <p>Je me connecte ensuite à la base de données et je vérifie l'authentification comme je le ferai sur un site web classique.</p>
            <p>Si l’authentification est correcte, je retourne un tableau associatif avec comme clé <span class="italic bold">status</span> et sa valeur sera <span class="italic bold">connected</span>, ainsi que la clé <span class="italic bold">id_session</span> qui aura pour valeur <span class="italic bold">l’ID de la session de l’utilisateur</span>.</p>
            <p>Sinon, j'ai juste une clé <span class="italic bold">status</span> qui aura pour valeur <span class="italic bold">not connected</span>.</p>
            <div class="alert alert-warning" role="alert"><span class="bold"><i class='bx bx-error-circle' ></i>Attention:</span> <span>Cette valeur doit absolument être <span class="italic bold">not connected</span> si l’authentification échoue et pas autre chose. Cela aura son importance et nous verrons pourquoi dans le prochain chapitre.</span></div>
        </section>
        <!-- END: Step7 -->
        <!-- BEGIN: Step8 -->
        <section id="step8" class="stepSections d-none">
            <h1>Récupération de l'ID de l'utilisateur et transmission grâce aux 'props'</h1>
            <p>Comme nous l’avons vu dans le chapitre précédent l’ID de la session de l’utilisateur est passé en JSON à l’application par le serveur si l’authentification est réussie. Dans le fichier Home.js à la réception de la reponse du serveur, je fais une navigation au screen qui se nomme <span class="italic bold">Nav</span> en lui passant comme props <span class="italic bold">l’ID de la session récupéré</span>.</p>
            <label>Home.js</label>
            <pre><code class="language-js">fetch( 'http://192.168.1.12:9000/connect_scan_app.php' , options)
    .then(response => response.JSON())
    .then(JSON => {
        if(JSON.status != "not connected"){
            console.log("Utilisateur connecté !");
            navigation.navigate('Nav', {id: JSON.id_session});
        }else{
        console.log("Echec de la connexion !")
        }
    }) 
};</code></pre>
            <div class="alert alert-light" role="alert"><span class="bold"><i class='bx bx-question-mark' ></i>Question:</span> <span>C’est quoi un props ?</span></div>    
            <p>Un props c'est une donnée passée entre des composants React. Ici, je vais la passer au screen <span class="italic bold">Nav</span> car on en aura besoin dans les prochains screens. Le screen Nav va nous permettre d'accéder aux différents modules de l'application.</p>
            <label>Nav.js</label>
            <a href="../assets/img/screen-nav.jpg" target="_blank"><img src="../assets/img/screen-nav.jpg" alt="Screen Nav" width="960"></a>
            <div class="alert alert-info" role="alert"><span class="bold"><i class='bx bx-info-circle'></i>Note:</span> <span>Seul le module <span class="italic bold">Capture</span> est fonctionnel car les autres arriveront plus tard.</span></div>
            <p>Lorsque l'on choisit <span class="italic bold">Capture</span>, nous sommes redirigés vers le screen <span class="italic bold">Capture</span> qui nous propose 2 choix :</p>
            <ul class="rocket-list">
                <li>Factures d'achat</li>
                <li>Notes de frais</li>
            </ul>
            <label>Capture.js</label>
            <a href="../assets/img/screen-capture.jpg" target="_blank"><img src="../assets/img/screen-capture.jpg" alt="Screen Capture" width="960"></a>
            <p>En fonction de notre choix, le scan que l'on effectuera sera stocké de manière différente. Encore une fois, grâce aux props, je vais stocker et transmettre le choix au screen <span class="italic bold">Scan</span>. Ce props se nommera <span class="italic bold">destination</span>.</p>
            <label>Capture.js</label>
            <pre><code class="language-js">const facAchatButton = data => {
    navigation.navigate('Scan', {id: id, destination: "factures_achats"});
};

const noteFraisButton = data => {
    navigation.navigate('Scan', {id: id, destination: "notes_frais"});
};</code></pre>
            <div class="alert alert-light" role="alert"><span class="bold"><i class='bx bx-question-mark' ></i>Question:</span> <span>Pourquoi utiliser un props pour cela ?</span></div>
            <p>L'utilisation d'un props pour transmettre l'information évite d'avoir à coder 2 pages de scan pour effectuer différents traitements. Cela évite un doublon de code inutile. Je passe un autre props nommé <span class="italic bold">id</span> qui contient l'ID de la session de l'utilisateur précédemment passé en props.</p>
        </section>
        <!-- END: Step8 -->
        <!-- BEGIN: Step9 -->
        <section id="step9" class="stepSections d-none">
            <h1>Création de la page de scan</h1>
            <p>On arrive enfin au cœur du projet. Le screen <span class="italic bold">Scan</span> lance l'appareil photo de l'utilisateur, permet de prendre une ou plusieurs photos ainsi que de les envoyer en base64 via une requête ajax au serveur PHP et enfin traite la réponse JSON reçue. J'ai eu besoin de deux bibliothèques :</p>
            <ul class="rocket-list">
                <li>react-native-document-scanner-plugin</li>
                <li>react-native-image-base64</li>
            </ul>
            <p>J'ai commencé par demander l'autorisation à l'utilisateur d'accéder à sa caméra :</p>
            <label>Scan.js</label>
            <pre><code class="language-js">const requestCameraPermission = async () => {
    try {
        const granted = await PermissionsAndroid.request(
            PermissionsAndroid.PERMISSIONS.CAMERA,
            {
            title: 'Camera Permission',
            message: 'App needs access to your camera',
            buttonNeutral: 'Ask Me Later',
            buttonNegative: 'Cancel',
            buttonPositive: 'OK',
            },
        );
        if (granted === PermissionsAndroid.RESULTS.GRANTED) {
            console.log('Camera permission granted');
            scanDocument();
        } else {
            console.log('Camera permission denied');
            navigation.navigate('Nav', {id: id});
        }
    } catch (err) {
        console.warn(err);
    }
}</code></pre>
            <p>Si la permission est accordé, je lance la fonction de scan <span class="italic bold">scanDocument()</span>. Sinon je redirige l'utilisateur sur le screen <span class="italic bold">Nav</span>. Ensuite, je crée la fonction qui lance le scan de document et récupère les différentes captures pour les transmettre à la fonction qui va les uploader.</p>
            <label>Scan.js</label>
            <pre><code class="language-js">const scanDocument = async () => {
    // Demande d'accès à la caméra si ce n'est pas déjà le cas
    if (Platform.OS === 'android' && await PermissionsAndroid.check(
      PermissionsAndroid.PERMISSIONS.CAMERA
    )) {
      Alert.alert('Error', 'User must grant camera permissions to use document scanner.')
      return
    }
  
    // Lancement du scan
    const { scannedImages } = await DocumentScanner.scanDocument({
      Base64: "base64"
    })

    if(scannedImages){
      if (scannedImages.length > 0) {
        setScannedImage(scannedImages[0])
        for (let i = 0; i < scannedImages.length; i++){
           await uploadImage(scannedImages[i],i,scannedImages.length)
        }
      }
    }else{
      console.log("Scan annulé");
      navigation.navigate('Nav', {id: id});
    }
}</code></pre>
            <p>Je spécifie dans la fonction <span class="italic bold">scanDocument()</span> que je souhaite que les images soient en base64. Nous verrons pourquoi dans le prochain chapitre.</p>
            <div class="alert alert-info" role="alert"><span class="bold"><i class='bx bx-info-circle'></i>Note:</span> <span>Si le scan est annulé, je fais une redirection de l’utilisateur vers le screen <span class="italic bold">Nav</span>.</span></div>
        </section>
        <!-- END: Step9 -->
        <!-- BEGIN: Step10 -->
        <section id="step10" class="stepSections d-none">
            <h1>Récupération du code en base64 du scan</h1>
            <p>Comme il peut y avoir plusieurs scans, il faut que l’application détermine quand l’utilisateur a terminé de scanner des documents pour envoyer toutes les images au serveur d’un seul coup. Je stocke alors toutes les images en base64 dans un tableau tant que l’utilisateur ne clique pas sur le bouton qui soumettra le tableau contenant l’ensemble des images en base64.</p>
            <label>Scan.js</label>
            <pre><code class="language-js">ImgToBase64.getBase64String(imagedata.replace(/\n/gi, "")).then(base64String =>{

const tab_associatif = base64String.replace(/\n/gi, "")   
datas.push(tab_associatif)
...</code></pre>
            <p>L’image en base64 est récupérée grâce à la fonction getBase64String de la librairie <span class="italic bold">react-native-image-base64</span>. Le résultat de cette fonction est ensuite stocké dans un tableau.</p>
        </section>
        <!-- END: Step10 -->
        <!-- BEGIN: Step11 -->
        <section id="step11" class="stepSections d-none">
            <h1>Envoi d'une requête au serveur avec Ajax</h1>
            <p>Une fois le scan validé, le tableau est envoyé sous forme de chaîne de caractères au serveur PHP via le <span class="italic bold">body->image</span> de la fonction <span class="italic bold">fetch</span>. Je lui passe également <span class="italic bold">l’ID de la session de l’utilisateur</span> et la <span class="italic bold">destination</span> (factures d’achats ou notes de frais) qui seront nécessaire au script PHP pour le traitement de la requête.</p>
            <div class="alert alert-warning" role="alert"><span class="bold"><i class='bx bx-error-circle' ></i>Attention:</span> <span>La chaîne de caractères qui est passée au serveur est de base un tableau donc la chaîne de caractères va ressembler à ceci : <span class="italic bold">["base64", "base64", "base64"]</span>. Il faudra en tenir compte dans le prochain chapitre.</span></div>
            <label>Scan.js</label>
            <pre><code class="language-js">// Si c'est le dernier scan de la série en cours
if(increment + 1 == max_id){
    fetch( 'http://192.168.1.12:9000/scan_app.php' , {
        method: "POST",
        body: JSON.stringify({
        image: JSON.stringify(datas),
            id: id,
            destination: destination
        }),
        headers: {
            'Accept': 'application/JSON',
            'Content-Type': 'application/JSON',
        }
    })
    .then(response => response.JSON())
    .then(JSON => {
        console.log(JSON)
        datas = [];
        navigation.navigate('Nav', {id: id});
    })
}</code></pre>
            <div class="alert alert-warning" role="alert"><span class="bold"><i class='bx bx-error-circle' ></i>Attention:</span> <span>À la fin de la requête, je vide le tableau datas qui contient les images en base64 sinon il renverra les précédents scans lors du prochain et fusionnera alors les différents scans en un seul PDF. Je fais également une redirection vers le screen <span class="italic bold">Nav</span> pour laisser à l’utilisateur le choix de sa prochaine action.</span></div>
        </section>
        <!-- END: Step11 -->
        <!-- BEGIN: Step12 -->
        <section id="step12" class="stepSections d-none">
            <h1>Traitement de la requête côté serveur en PHP</h1>
            <p>La première chose que je fais, c'est de récupérer la chaîne de caractères envoyée et de la modifier avec la fonction <span class="italic bold">str_replace()</span> pour obtenir une chaîne sous cette forme : <span class="italic bold">base64,base64,base64</span>.</p>
            <div class="alert alert-light" role="alert"><span class="bold"><i class='bx bx-question-mark' ></i>Question:</span> <span>Pourquoi faire ça ?</span></div>
            <p>Il sera nécessaire de l'avoir sous cette forme pour pouvoir recréer un tableau PHP avec la fonction <span class="italic bold">explode()</span>. Ce tableau va me permettre de connaître le nombre d'images reçues et faire les traitements pour chaque image.</p>
            <p>Je mets la destination dans une variable nommée <span class="italic bold">type_scan</span> et l'ID de la session de l'utilisateur dans une variable <span class="italic bold">id_session</span> pour les réutiliser plus tard. On verra ça plus en détail dans le prochain chapitre.</p>
            <label>Scan_app.php</label>
            <pre><code class="language-php">&lt;?php
header('Content-Type: application/JSON');

include 'html/ltr/coqpix/librairies/fpdf185/fpdf.php';

$data = JSON_decode(file_get_contents('php://input'), true);

// On récupère les images qui sont en un long string sous cette forme ["base64,base64,base64"]
$image = $data['image'];
// On supprimer les crochets et les '"' pour que le string soit sous cette forme: base64,base64,base64
$image = str_replace(['[', ']', '"'], '', $image);
// On explode le tout dans un array
$imageArray = explode(",", $image);

// On récupère le type de document
$type_scan = $data["destination"];

// On récupère l'id de session de l'utilisateur
$id_session = $data['id'];

// On initalisé le tableau des scans en cours
$filenames = [];

for($i = 0; $i < count($imageArray); $i++){

    // ON décode le base64
    $image_data = base64_decode($imageArray[$i]);

    // On génère un id unique pour le fichier temporaire
    $unique_id = uniqid();

    // En fonction du type de docuement on stock le fichier temporaire un dossier différent
    if($type_scan == "factures_achats"){
        $file_name = "src/files/fac_achat/files/temp_" .$id_session ."_" . $unique_id . ".jpg";
    }else{
        $file_name = "src/files/note/files/temp_" .$id_session ."_" . $unique_id . ".jpg";
    }

    // On enregistre le fichier temporaire
    file_put_contents($file_name, $image_data);

    // On stock l'information dans l'array des fichier temporaire en cours
    $filenames[] = $file_name;
}
...</code></pre>
            <p>Le premier traitement que j'effectue c'est de décoder l'image en base64 dans la boucle for pour le faire pour chaque image. Je crée ensuite un ID unique pour cette image qui me servira pour la nommer. Enfin, je crée un fichier temporaire en <span class="italic bold">.jpg</span> dans le bon répertoire selon ce que contient la variable <span class="italic bold">type_scan</span>. Je stocke enfin le nom du fichier temporaire dans un tableau car il me sera utile pour la fusion des <span class="italic bold">JPG</span> en un seul fichier <span class="italic bold">PDF</span> nous verrons cela dans le prochain chapitre.</p>
        </section>
        <!-- END: Step12 -->
        <!-- BEGIN: Step13 -->
        <section id="step13" class="stepSections d-none">
            <h1>Fusion des scans en un seul PDF</h1>
            <p>Pour la fusion des fichiers temporaires JPG en PDF, j'ai utilisé la bibliothèque <span class="italic bold">FPDF</span>.</p>
            <label>Scan_app.php</label>
            <pre><code class="language-php">include 'html/ltr/coqpix/librairies/fpdf185/fpdf.php';</code></pre>
            <p>J'ai ensuite créé une classe <span class="italic bold">PDFImages</span> qui hérite de la classe <span class="italic bold">FPDF</span>.</p>
            <label>Scan_app.php</label>
            <pre><code class="language-php">class PDFImages extends FPDF
{
    // Fonction pour ajouter l\'image sur une page(1 image / page)
    /**
     * Function Images to PDF
     * @param String $img_links: String de notre listes des liens images
     * @param String $extension_img: C\'est l\'extension des images
     * @param String $separator: c\'est le séparateur pour le string $img_link pour le transformer en array
     */
    function ImagesToPDF(String $img_links, String $extension_img='jpg',String $separator=','){
        // Mettre en majuscule le paramètre entre
        $extension_img = strtoupper($extension_img);
        // Transformer notre string en array
        $img_array = explode($separator,$img_links);
        // Pour chaque valeur de l'array donc chq image
        foreach ($img_array as $image_link){
            // Ajouter une nouvelle page au PDF
            $this->AddPage();
            // Ajouter les fichiers JPG au PDF
            $this->Image($image_link,0, 0, $this->w, $this->h, $extension_img);
        }
    }
}</code></pre>
            <p>Ce qui me permet de créer un fichier PDF en lui passant le tableau des fichiers temporaires.</p>
            <div class="alert alert-info" role="alert"><span class="bold"><i class='bx bx-info-circle'></i>Note:</span> <span>Pour ce faire, je dois d'abord transformer mon tableau en chaîne de caractères grâce à la fonction <span class="italic bold">implode()</span>.</span></div>
            <p>Je crée à nouveau un nom unique grâce à la fonction <span class="italic bold">uniqid()</span> comme je l'ai fait pour les fichiers temporaires. J'ajoute également l'ID de la session de l'utilisateur.</p>
            <label>Scan_app.php</label>
            <pre><code class="language-php">// En fonction du type de document on stock le pdf fusionné dans un dossier différent
if($type_scan == "factures_achats"){
    $file_path_pdf = 'src/files/fac_achat/files';
}else{
    $file_path_pdf = 'src/files/note/files';
}

// On récupère tout les chemins des scan ddans un chaine dans un string
$jpgToPDF = implode(',', $filenames);

                            
// On créer un id unique pour le pdf
$unique_id_PDF = uniqid(rand(), true);
// Créer une nouvelle instance de la classe FPDF
$pdf = new PDFImages('P', 'mm', 'A4');
// Ajouter une image
$pdf->ImagesToPDF($jpgToPDF,'jpg',',');
// Enregistrer le PDF
$pdf->Output($file_path_pdf . '/' . $id_session . '_' . $unique_id_PDF . '.pdf', 'F');</code></pre>
            <p>Pour finir, je supprime tous les fichiers temporaires que j'ai créés car ils ne me sont plus utiles.</p>
            <label>Scan_app.php</label>
            <pre><code class="language-php">// On supprime tout les jpg temporaires
for($i = 0; $i < count($filenames); $i++){
    unlink($filenames[$i]);
}</code></pre>
        </section>
        <!-- END: Step13 -->
        <!-- BEGIN: Step14 -->
        <section id="step14" class="stepSections d-none">
            <h1>Enregistrement des scans dans la base de données</h1>
            <p>Pour enregistrer le scan dans la base de données, je me connecte à la base de données de manière classique via PHP.</p>
            <label>Scan_app.php</label>
            <pre><code class="language-php">// Connexion à la base de données
$host = "mariadb_bdd";
$user = "root";
$pass = "root";
$dbname = "u243663731_";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo JSON_encode("Erreur de connexion à la base de données : " . $e->getMessage());
}</code></pre>
            <p>Je crée les variables dont je vais avoir besoin pour l’insertion.</p>
            <label>Scan_app.php</label>
            <pre><code class="language-php">$name_file = $id_session . '_' . $unique_id_PDF . '.pdf';
$file_size = filesize($file_path_pdf . '/' . $id_session . '_' . $unique_id_PDF . '.pdf');
$dte_file = date("Y-m-d");
$dte_j = date('d');
$dte_m = date('m');                                                      
$dte_a = date('Y');</code></pre>
            <p>Maintenant, en fonction du type de scan je ne vais pas faire la même chose. Si le scan est une facture d’achat, je vais modifier la requête pour que le champ <span class="italic bold">type_files_fac_achat</span> vaut <span class="italic bold">fac_achat</span>. Si le scan est une note de frais, le champ <span class="italic bold">type_file_note</span> vaut <span class="italic bold">note</span>. La base de données a été conçue ainsi. On aurait pu avoir un seul champ <span class="italic bold">type</span> qui contient le type, mais il a été choisi de faire un champ par type qui contient soit null soit le type. J’ai donc dû m’adapter à ce qui existe déjà.</p>
            <a href="../assets/img/screen-bdd.jpg" target="_blank"><img src="../assets/img/screen-bdd.jpg" alt="Screen de la base de donnée" width="960"></a>
            <label>Scan_app.php</label>
            <pre><code class="language-php">// En fonction du type de document on change la requête
if($type_scan == "factures_achats"){
    $insert = $pdo->prepare('INSERT INTO stockage (name_files, size_files, dte_files, dte_j, dte_m, dte_a, img_files, type_files_fac_achat, send_files, id_session) VALUES (?,?,?,?,?,?,?,?,?,?)');
    $result = $insert->execute(array(
        $name_file,
        $file_size,
        $dte_file,
        $dte_j,
        $dte_m,
        $dte_a,
        "pdf",
        "fac_achat",
        "#FF0000",
        $id_session
    ));
}else{
    $insert = $pdo->prepare('INSERT INTO stockage (name_files, size_files, dte_files, dte_j, dte_m, dte_a, img_files, type_files_note, send_files, id_session) VALUES (?,?,?,?,?,?,?,?,?,?)');
    $result = $insert->execute(array(
        $name_file,
        $file_size,
        $dte_file,
        $dte_j,
        $dte_m,
        $dte_a,
        "pdf",
        "note",
        "#FF0000",
        $id_session
    ));
}</code></pre>
            <div class="alert alert-warning" role="alert"><span class="bold"><i class='bx bx-error-circle' ></i>Attention:</span> <span>L’ID de la session de l’utilisateur est super important, faute de quoi l’utilisateur ne trouvera pas son scan dans son espace CloudPix.</span></div>
            <p>Enfin, si tout se passe bien, je retourne un message de succès en JSON et sinon une erreur. Le résultat sera affiché dans la console Node.js.</p>
            <label>Scan_app.php</label>
            <pre><code class="language-php">// On affiche une erreur ou un succes en fonction du resultat de la requête
if ($result === false) {
    $error = $pdo->errorInfo();
    echo JSON_encode("Error: " . $error[2]);
} else {
    echo JSON_encode("Le scan a bien été enregistrer dans la base de donnée !");
}</code></pre>
            <p>Le projet est maintenant prêt. On se retrouve dans le prochain chapitre pour une conclusion et une démonstration vidéo de l’application.</p>
        </section>
        <!-- END: Step14 -->
        <!-- BEGIN: Step15 -->
        <section id="step15" class="stepSections d-none">
            <h1>Conclusion</h1>
            <p>En conclusion, ce projet a été un véritable défi pour moi en tant que développeur, notamment en raison de la gestion des SVG, de la communication avec une base de données SQL existante et du traitement des images en back-end. Malgré ces difficultés, j'ai réussi à créer une application mobile qui répondait parfaitement aux attentes de mon client. L'application est fluide, cross-plateforme IOS et Android, et permet le scan de 1 à X documents pour les membres inscrits sur CloudPix. J'ai également pu apporter des améliorations, comme la possibilité d'empêcher l'accès à la page de connexion si l'utilisateur est déjà connecté. En somme, ce projet m'a permis de me familiariser davantage avec les promesses en JavaScript et le système de dépendance avec NPM, et je suis très satisfait du résultat final. Une amélioration possible serait d'imposer une taille maximale pour le scan, ce qui pourrait être ajouté au script <span class="italic bold">scan_app.php</span>.</p>
            <h2>Démonstration vidéo de l'application</h2>
            <video  controls width="960">
                <source src="../assets/videos/demo.mp4" type="video/mp4">
                <p>Votre navigateur ne prend pas en charge les vidéos HTML5. Voici <a href="../assets/videos/demo.mp4">un lien pour télécharger la vidéo</a>.</p>
            </video>
            <div class="alert alert-info" role="alert"><span class="bold"><i class='bx bx-info-circle'></i>Note:</span> <span>La tablette utilisée n'est pas récente, l'appareil photo n'est pas de très bonne qualité par conséquent le scan en sera automatiquement impacté. Avec une tablette ou un smartphone de meilleure qualité, le scan sera beaucoup plus qualitatif.</span></div>
        </section>
        <!-- END: Step15 -->
        <!-- BEGIN: Step16 -->
        <section id="step16" class="stepSections d-none">
            <h1>Merci beaucoup pour votre attention</h1>
            <p>Ayant des problèmes avec mon employeur, la fiche est vierge. Mr. Leproux connait la situation avec l'entreprise. Je souhaitais quand même aller au bout du projet de fin d'année. C'est pourquoi la fiche est téléchargeable malgré tout.</p>
            <a href="../files/evaluation_stage_2022.doc" id="evaluation-download-button" download>télécharger la fiche d'évaluation du maître de stage</a>
            <p>Je tiens à remercier <span class="italic bold">Monsieur Leproux</span> et <span class="italic bold">Madame Delpeyroux</span> pour leurs précieux conseils tout au long de l'année. <span class="italic bold">Madame Benich</span> et <span class="italic bold">Madame Barthelemy</span> pour avoir répondu à mes questions au sujet de l'alternance. <span class="italic bold">Monsieur Guivernau</span> et <span class="italic bold">Monsieur Trichet</span> pour leurs réponses rapides sur le forum. <span class="italic bold">Monsieur Saint-Pierre</span> et <span class="italic bold">Monsieur Andrieu</span> pour leurs cours très inspirants. <span class="italic bold">Monsieur Menard</span> et <span class="italic bold">Monsieur Teyssier</span> qui m'ont beaucoup appris sur la sécurité du web. <span class="italic bold">Monsieur Vignoles</span> qui nous a permis d'approfondir nos connaissances dans l'administration de serveurs. <span class="italic bold">Madame Locquet</span> qui était aussi très réactive sur le forum et ses cours vraiment intéressants. J'ai particulièrement aimé cette UE. <span class="italic bold">Madame Andrieux</span> et <span class="italic bold">Madame Mauroux</span> pour leurs CV très ludique. Merci également à <span class="italic bold">Monsieur Fredon</span> et <span class="italic bold">Monsieur Bailly</span>, même si je ne les ai pas beaucoup croisés cette année, ils participent activement au bon déroulement de ce cursus.</p> <!-- merci également à Dylan qui me suis toujours dans mes projets -->
            <script>
                // On créer les confetti au clic sur le bouton de téléchargement
                const jsConfetti = new JSConfetti()

                function confettiFY(){
                    jsConfetti.addConfetti();
                }

                document.querySelector("#evaluation-download-button").addEventListener("click", confettiFY);
            </script>
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
    <script src="../lib/prism.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- END: Librairies -->

    <!-- BEGIN: Scripts -->
    <script type="module" src="../assets/js/index.js"></script>
    <!-- END: Scripts -->
    </body>
</html>