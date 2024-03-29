<?php
require_once("../Forms/Operation.php");
if(!isset($_SESSION['Connecter'])){
    header("location:../Forms/Connexion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>mobile HKservices</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../script/mobile.js" defer></script>
</head>

<body>

    <div class="header_mob">
        <header>
            <div class="img_mob">
                <img src="../img/kone.png" alt="HKservices">
                <a href="../index.php" class="logo_mob">HKservices</a>
            </div>
            <nav class="navbar_mob">
                <a href="../index.php">Accueil</a>
                <a id="les_links" href="#">Propositions</a>
                <a id="les_links" href="#">Categories</a>
                <a id="les_links" href="#">Apropos</a>
            </nav>
            <div id="menu_mob" class="fa fa-bars"></div>
            <div class="head_text">
                <div class="text_first">
                    <div class="btn_mob">
                        <a href="#" class="btn">contacter HKservices</a>
                        <a href="#" class="btn">passé une commande</a>
                        <a href="#" class="btn">s'inscris maitenant</a>
                    </div>
                    <div class="blog">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda?
                        </p>
                    </div>
                </div>
            </div>
        </header>
        <div class="header_3">
            <h3 class="grands_titre">Propositions</h3>
            <div class="extra_pages">
                <nav class="pro_mob">
                    <a id="ttle" href="">Application Mobile</a>
                    <ul id="first_for_autre">
                        <li><a id="survole" href="#">Commercial Mobile</a></li>
                        <li><a href="#">Personal Mobile</a></li>
                        <li><a id="survole" href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                    </ul>
                </nav>
                <nav class="pro_mob">
                    <a id="ttle" href="">Applications Ordinateurs</a>
                    <ul id="first_for_autre">
                        <li><a href="#">affichage 1</a></li>
                        <li><a id="survole" href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                        <li><a id="survole" href="#">affichage 1</a></li>
                    </ul>
                </nav>
                <nav class="pro_mob">
                    <a id="ttle" href="">Logiciel de Gestion</a>
                    <ul id="first_for_autre">
                        <li><a id="survole" href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                        <li><a id="survole" href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                    </ul>
                </nav>
                <nav class="pro_mob" id="non_non">
                    <a id="ttle" href="">Autres..</a>
                    <ul id="first_for_autre">
                        <li><a href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                    </ul>
                </nav>
            </div>
            <h3 class="grands_titre">Catégories</h3>
            <div class="extra_pages">
                <nav class="pro_mob">
                    <a id="ttle" href="">Proposition</a>
                    <ul id="first_for_autre">
                        <li><a id="survole" href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                        <li><a id="survole" href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                    </ul>
                </nav>
                <nav class="pro_mob">
                    <a id="ttle" href="">Proposition</a>
                    <ul id="first_for_autre">
                        <li><a href="#">affichage 1</a></li>
                        <li><a id="survole" href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                        <li><a id="survole" href="#">affichage 1</a></li>
                    </ul>
                </nav>
                <nav class="pro_mob">
                    <a id="ttle" href="">Proposition</a>
                    <ul id="first_for_autre">
                        <li><a id="survole" href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                        <li><a id="survole" href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                    </ul>
                </nav>
                <nav class="pro_mob" id="non_non">
                    <a id="ttle" href="">Proposition</a>
                    <ul id="first_for_autre">
                        <li><a href="#">affichage 1</a></li>
                        <li><a id="survole" href="#">affichage 1</a></li>
                        <li><a href="#">affichage 1</a></li>
                        <li><a id="survole" href="#">affichage 1</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <section class="head_mob">
        <div class="content_h_mob">
            <div class="box_mob">
                <span id="poucentage">-10%</span>
                <div class="img_mobs">
                    <img src="../img/mob2_sec.png" alt="">
                </div>
                <div class="statistique">
                    <div class="elements">
                        <i class="fas fa-heart"></i>
                        <span>205</span>
                    </div>
                    <div class="elements">
                        <i class="fas fa-star"></i>
                        <span>550</span>
                    </div>
                    <div class="elements">
                        <i class="fas fa-share"></i>
                        <span>300</span>
                    </div>
                </div>
                <h3>App Mobile</h3>
                <div class="effet">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-share"></i>
                </div>
            </div>

            <div class="box_mob">
                <span id="poucentage">-7%</span>
                <div class="img_mobs">
                    <img src="../img/tblet_mob.png" alt="">
                </div>
                <div class="statistique">
                    <div class="elements">
                        <i class="fas fa-heart"></i>
                        <span>800</span>
                    </div>
                    <div class="elements">
                        <i class="fas fa-star"></i>
                        <span>360</span>
                    </div>
                    <div class="elements">
                        <i class="fas fa-share"></i>
                        <span>100</span>
                    </div>
                </div>
                <h3>disponible sur tablete</h3>
                <div class="effet">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-share"></i>
                </div>
            </div>

            <div class="box_mob">
                <span id="poucentage">-5%</span>
                <div class="img_mobs">
                    <img src="../img/pc2_sec.png" alt="">
                </div>
                <div class="statistique">
                    <div class="elements">
                        <i class="fas fa-heart"></i>
                        <span>605</span>
                    </div>
                    <div class="elements">
                        <i class="fas fa-star"></i>
                        <span>1000</span>
                    </div>
                    <div class="elements">
                        <i class="fas fa-share"></i>
                        <span>700</span>
                    </div>
                </div>
                <h3>App sur mon Ordinateur</h3>
                <div class="effet">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-share"></i>
                </div>
            </div>

        </div>
    </section>
    <section class="actualite">
        <div class="title_actu">
            <h3>les actualitées de HKservices</h3>
        </div>
        <div class="branche">
            <div class="branche_1">
                <h3>publications</h3>
                <p>
                    Exceller dans un domaine signifie que nos collaborateurs sont prêts
                    à mettre leurs compétences au
                    service des profils de
                    nos clients. Lorsque je parle de nos clients, je fais référence à vous, qui mettez à notre
                    disposition toutes les
                    informations nécessaires pour garantir une satisfaction totale de votre travail.
                </p>
                <div class="links_reseaux">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-tiktok"></i>
                </div>
                <a href="#" class="btn">En savoir plus</a>
            </div>
            <div class="branche_2">
                <h3>projets réalisés</h3>
                <p>
                    L'expertise et la qualité font partie intégrante de nos principes. Nous faisons preuve de dévotion,
                    de concentration et
                    d'attention envers tous ceux qui frappent à notre porte. Jetez un coup d'œil à la liste des projets
                    réalisés par
                    HKServices pour en avoir un aperçu.
                </p>

                <div class="links_reseaux">
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <a href="#" class="btn">En savoir plus</a>
            </div>
            <div class="branche_3">
                <h3>reseaux sociaux</h3>
                <p>
                    HKServices possède des pages personnelles sur divers réseaux sociaux, couvrant pratiquement tous les
                    aspects. Cela vous
                    offre la possibilité de diversifier vos produits et de les promouvoir sur nos différentes
                    plateformes.
                </p>
                <div class="links_reseaux">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-tiktok"></i>
                </div>
                <a href="#" class="btn">En savoir plus</a>
            </div>
        </div>
    </section>
    <section class="collabor">
        <div class="ctnt_coll">
            <div class="coll_grid">
                <div class="coll_box">
                    <div class="img_coll">
                        <img src="../img/admin.jpeg" alt="fondateur">
                    </div>
                    <span>KONE HADOU</span>
                    <div class="text_coll">
                        <p>
                            En tant que fondateur de notre entreprise HKservices, je
                            souhaiterais vous partager ma
                            motivation et mon engagement à vous offrir des services exceptionnels. Notre équipe
                            talentueuse est dédiée à fournir des
                            solutions personnalisées et de haute qualité pour répondre à tous vos besoins.
                        </p>
                    </div>
                </div>

                <div class="coll_box">
                    <div class="img_coll">
                        <img src="../img/4.jpg" alt="fondateur">
                    </div>
                    <span>clients satisfait</span>
                    <div class="text_coll">
                        <p>
                            Je tenais à prendre un moment pour vous exprimer ma profonde gratitude pour avoir réalisé
                            mon application. Je suis
                            extrêmement satisfaite du travail que vous avez accompli et je voulais vous faire part de
                            mon expérience positive.
                        </p>
                    </div>
                </div>

                <div class="coll_box">
                    <div class="img_coll">
                        <img src="../img/kone.png" alt="fondateur">
                    </div>
                    <span>Infographiste</span>
                    <div class="text_coll">
                        <p>
                            Faites confiance à HKservices pour tous vos besoins en infographie. Nous sommes une équipe
                            d'infographistes passionnés,
                            dévoués à créer des designs percutants qui reflètent votre identité et captivent votre
                            public.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&copy; 2023 entreprise de Development web et mobile HKservices Tous droits réservés</p>
    </div>
</body>

</html>