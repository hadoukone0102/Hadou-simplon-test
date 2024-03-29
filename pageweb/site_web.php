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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKservices web</title>
    <link rel="icon" type="image/png" href="../img/kone.png">
    <link rel="stylesheet" href="../style/web.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="header_main">
        <header style="background-color:#2c2c54;">
            <div class="Header">
                <img src="../img/kone.png" alt="" style="background-color: white;">
                <a href="#" style="color:white;">HKservices</a>
            </div>
            <div class="header-2">
                <nav class="navBar">
                    <a style="background-color: white;" id="accueil_h" href="../index.php" target="_self">Accueil</a>
                    <a style="background-color: white;" href="#services" id="service_h">Processus</a>
                    <a style="background-color: white;" href="#contact" id="contacts_h">Contacts</a>
                </nav>
            </div>
            <div id="menu" class="fa fa-bars menus"></div>
        </header>
        <div class="head">
            <div class="img_head">
                <img src="../img/phone.png" id="img2" alt="">
            </div>
            <div class="structure">
                <h1>NOTRE PROCESSUS DE DEVELOPPEMENT</h1>
                <div class="processus">
                    <nav class="elmnt_nav">
                        <a href="#exigence" class="links active">recueillir les exigences</a>
                        <a href="#conseil" class="links">conseils d'experts et </a>
                        <a href="#evolution" class="links">evaluation du projet</a>
                        <a href="#conception" class="links">conception ux</a>
                        <a href="#it_user" class="links">conception de l'interface utilisateur</a>
                        <a href="#developpement" class="links">developpement</a>
                    </nav>
                    <div class="element_content">
                        <div id="exigence" class=" contenue active">
                            Contactez notre entreprise de développement web en nous envoyant un message décrivant votre
                            idée ou en joignant un
                            cahier des charges si vous en avez un. Nous nous engageons à vous contacter dans un délai
                            d'un jour ouvrable et à
                            répondre à toutes vos questions. De plus, nous vous fournirons des idées préliminaires pour
                            votre projet. Pour
                            approfondir la discussion, nous prévoyons généralement une réunion en personne afin de mieux
                            comprendre votre idée
                            d'application. Si cela n'est pas possible, nous serons ravis de vous rencontrer via Skype,
                            Hangouts ou UberConference.
                        </div>
                        <div class="contenue" id="conseil">
                            Lors de la rencontre ou lors de l'échange de messages, le développeur web vous posera
                            quelques questions sur votre idée
                            afin de mieux la comprendre. Notez que vous parlerez à quelqu'un qui a beaucoup de
                            connaissances techniques. Cette
                            personne sera en mesure de répondre à des questions plus techniques qu'un consultant
                            classique.

                            Si vous avez des wireframes, une conception UX / UI, des spécifications de produit ou tout
                            autre matériel, assurez-vous
                            de les envoyer avant l'entretien ils seront très utiles !
                        </div>
                        <div class="contenue" id="evolution">
                            Dès que notre équipe aura rassemblé toutes les informations importantes sur votre idée, nous
                            préparerons une estimation
                            détaillée des coûts et des délais pour la mise en œuvre de votre vision. Dans notre devis,
                            chaque fonction est décrite
                            individuellement et le nombre estimé d'heures qu'il nous faudra pour la créer. Le total des
                            heures de travail requises
                            est ensuite multiplié par notre taux horaire.

                            La plupart du temps, notre équipe crée plusieurs versions du rapport. Des versions
                            supplémentaires décrivent
                            l'application avec quelques fonctionnalités supplémentaires que nous avons pensé que vous
                            pourriez souhaiter. Le devis
                            est gratuit.
                        </div>
                        <div class="contenue" id="conception">
                            Si vous décidez de travailler avec notre agence de développement informatique, le design UX
                            sera créé sous forme de
                            wireframes dans la première phase. Sur la base de ces wireframes, notre équipe peut
                            identifier les faiblesses
                            potentielles de l'idée de produit et les corriger avant le début de la phase de
                            développement. Au cours de ce processus,
                            nous travaillerons en étroite collaboration avec vous afin que vous puissiez vous
                            familiariser avec tous les cas
                            d'utilisation potentiels de l'application. Une fois que vous avez accepté la version finale
                            des wireframes, notre équipe
                            peut passer à l'étape suivante.
                        </div>
                        <div class="contenue" id="it_user">
                            À ce stade, nous savons déjà à quoi devrait ressembler l'application. Nous devons maintenant
                            refléter cela dans la
                            conception de l'interface utilisateur. A cet effet, un de nos talentueux designers se verra
                            confier votre projet. Le
                            concepteur fera des suggestions en fonction de son expérience, des exigences du projet
                            collectées et des informations
                            UX. Une fois que vous avez accepté le style, le concepteur créera le design de l'interface
                            utilisateur pour les premiers
                            écrans de l'application.
                        </div>
                        <div class="contenue" id="developpement">
                            Maintenant, le vrai travail commence ! Nous divisons chaque projet en phases qui durent 1,5
                            à 2 semaines. Après chaque
                            phase, nous vous fournirons une démo de l'application web. Vous pouvez cliquer dessus et
                            nous donner votre avis. Si vous
                            êtes satisfait du résultat, nous vous enverrons une facture et passerons à l'itération
                            suivante.

                            Notre équipe vous fournira à tout moment le dernier code, y compris les tests unitaires et
                            d'intégration, ainsi qu'un
                            rapport sur toutes les modifications apportées au projet. Si vous avez des doutes ou
                            souhaitez apporter d'autres
                            modifications, nous les mettrons en œuvre avant de vous envoyer une facture.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="super" id="super">
        <div class="contient_tous">
            <!--Site web personnel-->
            <form action="#" class="web_perso">
                <div class="detail_web">
                    <h3 id="affichage_of_elements">Enregistrement des données</h3>
                    <span id="croix_rouge">&plus;</span>
                </div>
                <div class="input_web">
                    <input type="text" placeholder="Votre nom..">
                    <input type="text" placeholder="Votre prenom..">
                </div>
                <div class="input_web">
                    <input type="text" placeholder="Votre email">
                    <input type="number" placeholder="Votre contact">
                </div>
                <div class="input_web">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Decrivez vous en quelques mots"></textarea>
                </div>
                <div class="input_web">
                    <a href="#" class="btn">Commander</a>
                </div>
            </form>
            <!--Site web personnel-->
        </div>
    </section>

    <section class="detail" id="detail">
        <h1 class="title">Plus de détails <span> Processus de developpement</span></h1>
        <div class="cellule_gril">
            <div class="box_cellule">
                <div class="ttle">
                    <h3 id="essaie">Un Site Web personnel</h3>
                </div>
                <div class="motivation">
                    <p>
                        Contactez Notre Entreprise De Développement Web
                        pour avoir votre page personnel sur le net en un click.
                    </p>
                </div>
                <a href="#" class="btn" id="bt_hover">Commander</a>
            </div>

            <div class="box_cellule">
                <div class="ttle">
                    <h3 id="essaie">Un Site E-commerce</h3>
                </div>
                <div class="motivation">
                    <p>
                        Il y a rien de plus mieux qu'un site e-commerce
                        pour lancer son propre busnesse en ligne et se faire
                        du pognom sans léver le pétit doit.
                    </p>
                </div>
                <a href="#" class="btn" id="bt_hover">Commander</a>
            </div>

            <div class="box_cellule">
                <div class="ttle">
                    <h3 id="essaie">Pour des Entreprises</h3>
                </div>
                <div class="motivation">
                    <p>
                        Vous être Une entreprise et vous voulez numeriser votre
                        vos affaires, HKservices est là pour vous aidez !
                    </p>
                </div>
                <a href="#" class="btn" id="bt_hover">Nous Contacté</a>
            </div>

            <div class="box_cellule">
                <div class="ttle">
                    <h3 id="essaie">Application Web interactive</h3>
                </div>
                <div class="motivation">
                    <p>
                        Des appications web prêt à etre deployer sur n'importe
                        appareil pour vous servir HKservices
                    </p>
                </div>
                <a href="#" class="btn" id="bt_hover">Nous Contacté</a>
            </div>

            <div class="box_cellule">
                <div class="ttle">
                    <h3 id="essaie">Un Site Vitrine</h3>
                </div>
                <div class="motivation">
                    <p>Le plus dynamique possibile avec tous vos contraintes</p>
                </div>
                <a href="#" class="btn" id="bt_hover">Commander</a>
            </div>

            <div class="box_cellule">
                <div class="ttle">
                    <h3 id="essaie">Autre</h3>
                </div>
                <div class="motivation">
                    <p>Expliquez nous votre idée</p>
                </div>
                <a class="btn" id="bt_hover">Soumettre</a>
            </div>
        </div>
        <!---------------------------------------------------------------->
    </section>
    <!-- formulaire de contact start-->
    <section class="formul" id="formul">
        <div class="deco">
            <h3>formulaire de contact</h3>
            <span id="fleche"> &xmap;</span>
        </div>
        <form action="#" id="formulaire">
            <div class="input_formul">
                <input type="number" placeholder="Votre Contact ..">
                <input type="email" placeholder="Votre email ...">
            </div>
            <div class="input_formul">
                <input type="number" placeholder="Votre Contact ..">
                <input type="email" placeholder="Votre email ...">
            </div>
            <div class="input_formul">
                <input type="number" placeholder="Votre Contact ..">
                <input type="email" placeholder="Votre email ...">
            </div>
            <div class="input_formul">
                <input type="number" placeholder="Votre Contact ..">
                <input type="email" placeholder="Votre email ...">
            </div>
            <div class="input_formul">
                <a href="#" class="btn">Enregistrer</a>
            </div>
        </form>
    </section>
    <!-- formulaire de contact end-->
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
                    <a id="chemin_href" href="site_web.php" class="btn">Nous Contacter</a>
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
                    <a id="chemin_href" href="app_mobile.php" class="btn">Nous Contacter</a>
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
                    <a id="chemin_href" href="pageweb/affiche.php" class="btn">Nous Contacter</a>
                </div>
            </div>

        </div>
    </section>
    <!-- services section end-->
    <!--section footer start
    <footer>
        <div class="logo">
            <h3>Notre Emblème</h3>
            <div class="Header">
                <img src="../img/kone.png" alt="">
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
section footer start-->
    <div class="copyright">
        <p>&copy; 2023 entreprise de Development web et mobile HKservices Tous droits réservés</p>
    </div>
    <!--section footer end-->
    <script src="../script/code.js"></script>
    <script src="../script/script_web.js"></script>
</body>

</html>