<?php
    require_once 'header.php';
    $article1 = sql_select('ARTICLE', '*', "numArt = '1'")[0];
    $libTitrArt1 = $article1['libTitrArt'];
    $libChapoArt1 = $article1['libChapoArt']; 
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
       
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary cookie" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Cookies
</button>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Cookies</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h2>Politique de Cookies</h2>
            <br>
            1. Qu'est-ce qu'un cookie ?
            <br>
            Un cookie est un petit fichier texte enregistré sur votre appareil (ordinateur, tablette, smartphone) lorsque vous visitez un site internet. Il permet au site de fonctionner correctement, d'améliorer votre expérience et de collecter certaines informations sur votre navigation.
            <br>
            <br>
            2. Quels cookies utilisons-nous ?
            <br>
            Nous utilisons différents types de cookies sur notre blog :
            <br>
            - Cookies essentiels (obligatoires) :
            <br>
            Ces cookies sont nécessaires au bon fonctionnement du blog. Sans eux, certaines fonctionnalités ne peuvent pas être utilisées.
            <br>
            Exemple : Cookies de session permettant la connexion et la navigation fluide sur le site.
            <br>
            - Cookies de mesure d’audience (statistiques) :
            <br>
            Ces cookies nous aident à comprendre comment les visiteurs utilisent notre blog et à améliorer son contenu.
            <br>
            Exemple : Google Analytics, Matomo (statistiques anonymisées sur les pages visitées, le temps passé sur le site, etc.).
            <br>
            - Cookies publicitaires et réseaux sociaux
            <br>
            Nous n’affichons pas de publicités sur ce blog, mais si nous intégrons des boutons de partage ou du contenu externe (YouTube, Twitter, etc.), ces services peuvent déposer leurs propres cookies.
            <br>
            Exemple : Boutons de partage Facebook, X (Twitter), Instagram, YouTube…
            <br>
            <br>
            3. Comment gérer les cookies ?
            <br>
            Lors de votre première visite sur notre blog, une bannière vous informe de l'utilisation des cookies et vous propose d’accepter ou de refuser ceux qui ne sont pas essentiels.
            Vous pouvez à tout moment :
            <br>
            Configurer votre navigateur pour bloquer ou supprimer les cookies :
            Google Chrome
            Mozilla Firefox
            Safari
            Microsoft Edge
            <br>
            <br>
            4. Durée de conservation des cookies
            <br>
            Les cookies déposés sur votre appareil sont conservés pour une durée maximale de 13 mois, conformément à la réglementation en vigueur.
            <br>
            <br>
            5. Contact
            <br>
            Pour toute question sur notre politique de cookies, vous pouvez nous contacter à leane.alletru@mmibordeaux.com OU lucas.pasticier@mmibordeaux.com.
           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
        </div>
    </div>
    </div>
</div>
       


        <nav class="navbar navbar-expand-lg navbar-light" id="">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">
                <img src="images/Logo_noir-removebg-preview.png" alt="" class="logo">    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">A propos</a></li>
                <!--    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>-->
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                        <li><button type="button" class="btn btn-secondary btn-sm btn-marge">Sign up</button></li>
                        <li><button type="button" class="btn btn-primary btn-sm btn-marge2">Login</button></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Page Header-->
        <header class="masthead" style="background-image: url('images/Cimetière.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h2>Cimetière de la Chartreuse : un lieu de mort...animé par la vie</h2>
                            <br>
                            <span class="meta">
                                Mardi 28 Janvier 2025, nous décidons de choisir un sujet qui nous intrigue et attise notre curiosité… Les cimetières. Et plus précisément, ce cimetière. 25,7 hectares, pour en faire le tour, il faut se coucher tard.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2 class="section-heading">Imposant, historique, quoi d'autre ?</h2>
                        <p>Les préjugés nous obligent à penser qu’ici, seul le silence et la mort gouvernent. Alors qu'en réalité, la vie y est bien plus présente que ce l’on pense et est même souvent bruyante.</p>
                        <p>Mercredi 29 janvier 2025, le bus et le tram en retard comme d’hab, nous portent jusqu’à cette arche. Toute aussi imposante, voir plus, que l’église Saint Bruno présente juste en face.
                            <a href="https://www.bordeaux.fr/p157798/un-cimetiere-deroutant-decouvrez-la-chartreuse-en-trois-curiosites">Ce cimetière des Chartreuses</a></a>, sacré et protégé, le devient encore plus grâce à cette porte. Elle est le symbole de la séparation entre nos deux mondes, celui de la vie et celui de la mort, que l’on croit parfois bien distincts mais qui pourtant sont très liés. Elle est aussi le dernier vestige de l’ancien monastère des Chartreux construit en 1791. Un peu d’histoire ne fait pas de mal ! </p>
                            <a><img class="img-fluid image-width" src="images/Porte Chartreuse copie.jpg" alt="..." /></a>
                        <span class="caption text-muted">Photo prise par Alletru Léane</span>
                        <p>Quelques jours avant notre visite de ce lieu emblématique, un article nous renseigne sur la présence de 5 espèces différentes de chauves-souris au sein du cimetière, à la nuit tombée. Alors nous sommes allés voir ce que le jour avait à nous offrir.</p>
                        <br>
                        <h2 class="section-heading">Des âmes, c’est tout c’qu’on a trouvé ?</h2>
                        <p>Dès notre arrivée, on se rend compte de l’importance de cette arche. Pour entrer dans ce lieu particulier, nous passons à travers cette porte. Elle est la seule à être tel quel. S’ouvre à nous, une étendue de tombes à perte de vue. </p>
                        <p>Durant notre visite, nous voulons vérifier la présence de ces animaux nocturnes qui installent une ambiance particulière et qui peut en troubler certains. Cependant nous observons une architecture magnifique et une histoire intrigante. Notre parcours consistait dans un premier temps à trouver la tombe du célèbre peintre
                            <a href="https://fr.wikipedia.org/wiki/Francisco_de_Goya">Francisco de Goya</a></a>.</p>
                        <p>Au vu de la grandeur de ce lieu, nous hésitons à emprunter la golfette située à l’entrée afin de nous y rendre plus vite. Mais après avoir essuyé un regard persistant avec le gardien et avoir aboli la feignantise, nous nous résignons à marcher. Cette marche nous époustoufle de par la beauté et la grandeur du lieu. Nous regardons chaque tombe, parfois en riant d’un nom surprenant qui se démarque des traces que laisse le temps. Cette légèreté du moment nous pousse à croire qu’ici, la vie a encore sa place.</p>
                        <p>Vous ne trouvez pas ça fou, de se dire qu’on a beau fuir la réalité toute sa vie, elle nous rattrape pour nous enfouir six pieds sous terre, au milieu d'inconnus qui n'ont pas non plus choisi d’être là d’ailleurs.</p>                      
                        <br>
                        <h2 class="section-heading">Combien de vies, combien de signes, mais combien de fois es-tu mort ?</h2>
                        <p>Nous nous arrêtons face à un autel, sur lequel est gravée une phrase qui nous interpelle : “Je suis la résurrection et la vie, celui qui vit et croit en moi ne mourra jamais”.
                            En baissant le regard, un vieux… Certes pas d’apparence humaine ; mais pourtant il nous regarde, un chat, qui paraît plus aigri qu’un lundi matin de janvier. On a tenté de comprendre son histoire, en vain.
                            </p>
                        <a><img class="img-fluid image-width" src="images/photo-chat.png" alt="..." /></a>
                        <span class="caption text-muted">Photo prise par Dupuy Lola</span>
                        <p>C’est ce mystère qui nous retient face à ce que l’on considère être la réincarnation de Mr Mollet supposé enterré juste derrière ce chat. On aurait bien voulu lui proposer un entretien, mais après qu’il nous ai miaulé dessus, on a compris que ce n’était pas la meilleure idée qu’on ait eu jusqu’ici. </p>
                        <p>Cette rencontre bouleversante nous amène à revoir nos croyances et nous tend à penser qu’il existe une multitude de chemins après la mort. Et sûrement certains auxquels on avait jamais pensé. Peut être qu’en y parcourant l’intégralité, on pourrait découvrir d’autres routes où l’on pourrait s’y perdre.
                            Fini de se perdre dans nos pensées !
                            Un corbeau perché sur la dernière branche du toit du cimetière nous réveille d’un cri aigü.
                            <a href="https://www.youtube.com/watch?v=-JLM0BXwSqE">Krɔakrɔa</a></a> !
                            Perdus dans l’allée, de long en large, les fleurs nous tiennent compagnie.</p>
                        <p>
                        <br>
                        <span class="caption text-muted">Texte écrit par
                            <a>Alletru Léane, Dupuy Lola, Larue Maël, Nogueras Baptiste, Pasticier Lucas </a>
                            <br>
                            Photo d'accueil prises par
                            <a href="https://www.flickr.com/photos/141505599@N08/page5">Catherine Marion</a>
                            <br>
                            Photos de l'article prise par
                            Alletru Léane et Dupuy Lola
                            <br>
                            <br>
                            <a>Logo TFC réalisé par Larue Maël </a>
                        </span>
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <!--
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        -->
                        <div class="small text-center text-muted fst-italic">Alletru Léane, Dupuy Lola, Larue Maël, Nogueras Baptiste, Pasticier Lucas
                            <br>
                            Scalingo.io
                            <br>
                            &copy; 1A MMI 2027
                            <br>
                            &copy; IUT Bordeaux Montaigne, 1 Rue Jacques Ellul, 33800 Bordeaux
                            <br>
                            leane.alletru@mmibordeaux.com  OU  lucas.pasticier@mmibordeaux.com
                            <br>
                            07.67.46.08.76
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>



