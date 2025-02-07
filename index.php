<?php
    require_once 'header.php';
    $article1 = sql_select('ARTICLE', '*', "numArt = '1'")[0];
    $libTitrArt1 = $article1['libTitrArt'];
    $libChapoArt1 = $article1['libChapoArt'];
    $article2 = sql_select('ARTICLE', '*', "numArt = '2'")[0];
    $libTitrArt2 = $article2['libTitrArt'];
    $libChapoArt2 = $article2['libChapoArt'];
    $article2 = sql_select('ARTICLE', '*', "numArt = '3'")[0];
    
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog'Art 2025</title>
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
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Acceuil</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">A propos</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('images/Blog\'Art\ image.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Blog'Art 2025</h1>
                            <span class="subheading">par TFC : Tombeau Funeste de la Crypte</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="cimetière.php">
                            <h2 class="post-title Cimetière">
                                <?php echo $libTitrArt1; ?>
                            </h2>
                            <h5 class="post-subtitle Cimetière">
                                <?php echo $libChapoArt1; ?>
                            </h5>
                        </a>
                        <p class="post-meta">
                            Ecrit par
                            <a>Alletru Léane, Dupuy Lola, Larue Maël, Nogueras Baptiste, Pasticier Lucas</a>
                            le 04 Janvier, 2025
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="métier.php">
                        <h2 class="post-title Cimetière">
                            <?php echo $libTitrArt2; ?>
                        </h2>
                            <h5 class="post-subtitle Cimetière">
                                <?php echo $libChapoArt2; ?>
                            </h5>
                        </a>
                        <p class="post-meta">
                            Ecrit par
                            <a>Dupuy Lola et Larue Mael</a>
                            le 04 Janvier, 2025
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />

                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->

                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Bouton vieux posts-->
                    <!-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>-->
                </div>
            </div>
        </div>
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
