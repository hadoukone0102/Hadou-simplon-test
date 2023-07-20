<?php
require("Operation.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hkservice Connexion</title>
    <link rel="stylesheet" href="../style/conn.css">
</head>
<body>
    <section class="container_back1">
    <div class="">
        <div class="backg1">
           
            <div class="lines lines1">
                <div class="waves waves1" style="background-image:url(../img/backg/1.png)"></div>
            </div>
            <div class="lines lines2">
                <div class="waves waves2" style="background-image:url(../img/backg/2.png)"></div>
            </div>
            <div class="lines lines3">
                <div class="waves waves3" style="background-image:url(../img/backg/3.png)"></div>
            </div>

        </div>

    </div>
    
</section>
<section class="autre">
    <div class="pricipal">

        <div class="contenti_form">
           
            <form action="#" class="connex" method="POST">
                <h3>Ma Page de Connexion</h3>
                <pre>
                    <?php 
                    // var_dump($_SESSION['Connecter'] );
                    if(isset( $requetes )){echo  $requetes ;} 
                    if(isset($impossible)){ echo "<h3 style='color:red;font-size:1.5rem;'>". $impossible."</h3>";}
                    
                    ?>
                </pre>
                <div class="form_content_first">
                    <div class="input_form_first">
                        <label for="inputEmail">Votre E-mail</label>
                        <input type="email" name="email_conn" autocomplete="off">
                    </div>
                    <div class="input_form_first">
                        <label for="inputEmail">Votre Mote de passe</label>
                        <input type="password" name="mdp_conn" autocomplete="off">
                    </div>
                </div>

                <div class="form_content_first_btn">
                    <input type="submit" value="Envoyer" class="btn" name="Connexion">
                    <a href="Inscription.php" class="btn">s'inscrit </a>
                </div>

            </form>
        
        </div>

    </div>
</section>
</body>
</html>