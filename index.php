<?php
require_once("Forms/Operation.php");
if(!isset($_SESSION['Connecter'])){
    header("location:Forms/Connexion.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKservices</title>
    <link rel="icon" type="image/png" href="img/kone.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="main">
        <header>
            <div class="Header">
                <img src="img/kone.png" alt="">
                <a href="#">HKservices</a>
            </div>

            <div class="header-2">
                <nav class="navBar">
                    <a id="accueil_h" href="#Accueil" target="_self">Accueil</a>
                    <a href="#services" id="service_h">Services</a>
                    <a href="#contact" id="contacts_h">Contacts</a>
                    <?php if(isset($_SESSION['Connecter'])) : ?>
                    <a style="display:none;" href="Forms/Connexion.php" id="">Connexion</a>
                    <?php endif ?>
                    
                <ul >
                    <?php if(isset($_SESSION['Connecter'])) : ?>
                        <?php $moi = $_SESSION['Connecter']['nom'];?>
                        <li href="Forms/Connexion.php"><?php echo $moi;?></li>
                    <?php endif ?>
                </ul>

<style> 
 header .header-2 .navBar ul li{

    display: block;
        padding: 2rem 9%;
        font-size: 2rem;
        color: var(--black);
        margin-left: 1rem;
        width: 100%;
        margin-bottom: .5rem;
        background-color: white;
        text-align: center;
        list-style-type: disclosure-closed;
        cursor: pointer;
}

#param li{
    padding: 2rem 9%;
    font-size: 2rem;
    color: var(--black);
    list-style-type: disclosure-closed;
    margin-left: 1rem;
    display: none;
}

@media(max-width:768px){
    header .header-2 .navBar ul li{
        display: none;
    }
    #param li{
        display: block;
    }
}
</style>
                    
                </nav>
            </div>
            <ul id="param">
                    <?php if(isset($_SESSION['Connecter'])) : ?>
                        <?php $moi = $_SESSION['Connecter']['nom'];?>
                        <li href="Forms/Connexion.php"><?php echo $moi;?></li>
                    <?php endif ?>
                </ul>

            <div id="menu" class="fa fa-bars"></div>    
        </header>
    </div>

    <!-- section d'essaie au backgroud animation -->

    <section class="container_back1">
        <div class="backg1">

            <div class="desing" id="acceuil">
                <div class="images-derou">
                    <div class="image">
                        <img id="img_change" src="img/simplon.jpg" alt="KONE">
                    </div>
                </div>

                <div class="critere">
                    <div class="titre-crit">
                        <h1 id="Hadou">Nous Sommes Des Développeurs Web</h1>
                    </div>
                    <div class="text-crit">
                        <p id="details">
                            Découvrez une expérience unique en vous inscrivant dès maintenant <br>
                            sur notre site ! Rejoignez une communauté dynamique et passionnée, <br>
                            élargissez vos horizons et profitez de nombreux avantages exclusifs.<br>
                            Ne manquez pas cette opportunité de vous connecter avec des personnes <br>
                            partageant les mêmes intérêts, d'accéder à un contenu premium et de participer <br>
                            à des événements passionnants. Laissez votre empreinte dans notre communauté <br>
                            grandissante en vous inscrivant aujourd'hui et préparez-vous à vivre une expérience <br>
                            inoubliable
                        </p>
                        <div class="button">
                            <a href="#" class="btn" id="retour">Retour</a>
                            <a href="#" class="btn" id="suivant">Suivant</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="lines lines1">
                <div class="waves waves1" style="background-image:url(img/backg/1.png)"></div>
            </div>
            <div class="lines lines2">
                <div class="waves waves2" style="background-image:url(img/backg/2.png)"></div>
            </div>
            <div class="lines lines3">
                <div class="waves waves3" style="background-image:url(img/backg/3.png)"></div>
            </div>

        </div>

    </section>
    <!-- section d'essaie au backgroud animation-->
    <!-- services section start-->
    <section class="Service" id="section-service">
        <h1 class="title">Les Services de chez <span>Hadou services</span></h1>
        <div class="content">
            <div id="ma-grille">
                <div class="cellule">
                    <div class="serv">
                        <h3>Dévéloppement Web</h3>
                    </div>
                    <div class="commentaire">
                        <p>
                            Nous comprenons l'importance d'un site web attrayant et fonctionnel pour représenter votre
                            entreprise en ligne. Nous
                            travaillons en étroite collaboration avec nos clients pour comprendre leurs objectifs et
                            créer des sites web sur mesure
                            qui correspondent à leur identité de marque et qui offrent une expérience utilisateur
                            optimale.
                        </p>
                    </div>
                    <a href="pageweb/site_web.php" class="btn">Nous Contacter</a>
                </div>
                <div class="cellule">
                    <div class="serv">
                        <h3>Dévéloppement Mobile</h3>
                    </div>
                    <div class="commentaire">
                        <p>
                            Notre expertise s'étend également au développement d'applications web et mobiles. Que ce
                            soit pour une application
                            destinée aux utilisateurs finaux ou pour un outil interne pour votre entreprise, nous sommes
                            en mesure de concevoir des
                            applications intuitives, performantes et sécurisées, adaptées à vos besoins spécifiques.
                        </p>
                    </div>
                    <a href="pageweb/app_mobile.php" class="btn">Nous Contacter</a>
                </div>
                <div class="cellule">
                    <div class="serv">
                        <h3>Confection d'Affiche</h3>
                    </div>
                    <div class="commentaire">
                        <p>
                            En plus de nos services de développement,
                            nous sommes également compétents dans la création d'affiches accrocheuses et
                            percutantes. Que ce soit pour des événements, des promotions ou des campagnes publicitaires,
                            nous savons comment
                            captiver l'attention de votre public cible avec un design visuellement attrayant.
                        </p>
                    </div>
                    <a href="pageweb/affiche.php" class="btn">Nous Contacter</a>
                </div>
            </div>

        </div>
    </section>
    <!-- services section end-->
    <!-- Section contact start-->
    <section class="contact" id="contact">

        <h1 class="title">Les Contacts de chez <span>Hadou services</span></h1>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>

            <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
            <a href="#" class="btn">send message</a>

        </form>

    </section>
    <!-- Section contact end-->
    <!--section footer start
    <footer>
        <div class="logo">
            <h3>Notre Emblème</h3>
            <div class="Header">
                <img src="img/kone.png" alt="">
                <a href="#">Hadou Services</a>
            </div>
        </div>
        <div class="lien">
            <h3>Lien vers le Haut</h3>
            <nav class="navBar">
                <a id="acceuil" href="#">Accuiel</a>
                <a href="#" id="service">Services</a>
                <a href="#" id="contacts_h">Contacts</a>
            </nav>
        </div>
        <div class="search">
            <h3>Que Chercher Vous ?</h3>
            <form action="#" class="search-inp">
                <input type="search" placeholder="Search..." autocomplete="off">
                <label for="search input" class="fa fa-search"></label>
            </form>
        </div>
        <div class="footer_comm">
            <h3>Formulaire de Commentaire</h3>
            <form action="#" class="form-footer">
                <label for="Email">Vortre Email</label>
                <input type="Eemail" placeholder="" autocomplete="off">
                <a href="#" class="btn">Envoyer</a>
            </form>
        </div>
    </footer>
    section footer end-->
    <div class="copyright">
        <p>&copy; 2023 entreprise de Development web et mobile HKservices Tous droits réservés</p>
    </div>
    <script src="script/code.js"></script>
</body>

</html>