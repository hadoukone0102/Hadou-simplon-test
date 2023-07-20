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
    <link rel="stylesheet" href="../style/inscrit.css">
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
                <h3>Ma Page d'inscription</h3>
                <pre>
                <?php 
                    // var_dump( $_SESSION['user']['nom']);
                    if(isset($res)){echo "<h3 style='color:red;'>".$res."</h3>";}
                    if(isset($resss)){echo $resss;}
                    if(isset($err)){echo $err;}
                ?>
                </pre>
               
                <div class="form_content_first">
                    <div class="input_form_first">
                        <label for="inputEmail">Votre Nom :</label>
                        <input type="text" name="nom" autocomplete="off">
                    </div>
                    <div class="input_form_first">
                        <label for="inputEmail">Votre Prenom :</label>
                        <input type="Text" name="prenom" autocomplete="off">
                    </div>
                </div>
                <div class="form_content_first">
                    <div class="input_form_first">
                        <label for="inputEmail">Votre Profession :</label>
                        <input type="text" name="work" autocomplete="off">
                    </div>
                    <div class="input_form_first">
                        <label for="inputEmail">Votre Contact :</label>
                        <input type="number" name="domaine" autocomplete="off">
                    </div>
                </div>
                <div class="form_content_first">
                    <div class="input_form_first">
                        <label for="inputEmail">Votre E-mail :</label>
                        <input type="email" name="email" autocomplete="off">
                    </div>
                    <div class="input_form_first">
                        <label for="inputEmail">Votre Mote de passe :</label>
                        <input type="password" name="mdp" autocomplete="off">
                    </div>
                </div>

                <div class="form_content_first">
                    <input type="submit" value="Enregistrer" class="btn" name="inscription">
                    <a href="Connexion.php" class="btn"> Mon Compte</a>
                </div>
                <style>
                    
@media(max-width:500px){
    .autre .pricipal .contenti_form .connex .form_content_first{
        display: block;
    }
    .btn{
        text-align: center;
        display: block;
        width: 100%;
        margin-top: .5rem;
        font-size: 1.5rem;
    }
    
}
@media(max-width:450px){
    html{
        font-size: 50%;
    }
}
                </style>

            </form>
        
        </div>

    </div>
</section>
</body>
</html>