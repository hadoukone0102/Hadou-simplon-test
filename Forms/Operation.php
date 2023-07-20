<?php
require_once("data_base.php");

if(isset($_POST['inscription'])){
    $nom  = $_POST['nom'];
    $prenom  = $_POST['prenom'];
    $work  = $_POST['work'];
    $contact  = $_POST['domaine'];
    $email  = $_POST['email'];
    $mdp  = $_POST['mdp'];

    if(!empty($nom) && !empty($prenom) && !empty($work) && !empty($contact) && !empty($email) && !empty($mdp)){
        // Vérifier si l'utilisateur existe déjà
        $req_verif = "SELECT COUNT(*) FROM inscription WHERE email = :email";
        $verif_stmt = $db->prepare($req_verif);
        $verif_stmt->bindParam(":email", $email);
        $verif_stmt->execute();
        $existing_user = $verif_stmt->fetchColumn();

        if($existing_user){
            $res = "Utilisateur déjà inscrit";
        }else{
            // Insérer l'utilisateur dans la base de données
            $req_insert = "INSERT INTO inscription (nom, prenom, work, contact, email, mdp) VALUES (:nom, :prenom, :work, :contact, :email, :mdp)";
            $insert_stmt = $db->prepare($req_insert);
            $insert_stmt->bindParam(":nom", $nom);
            $insert_stmt->bindParam(":prenom", $prenom);
            $insert_stmt->bindParam(":work", $work);
            $insert_stmt->bindParam(":contact", $contact);
            $insert_stmt->bindParam(":email", $email);
            $insert_stmt->bindParam(":mdp", $mdp);
            $final = $insert_stmt->execute();

            if($final){

              // Récupérer les utilisateurs inscrits depuis la base de données

                $req_users = "SELECT nom, prenom, work, contact, email, mdp FROM inscription WHERE email = :email";
                $users_stmt = $db->prepare($req_users);
                $users_stmt->bindParam(":email", $email);
                $users_stmt->execute();
                $users = $users_stmt->fetchAll(PDO::FETCH_ASSOC);

                // Enregistrer l'utilisateur connecté dans une variable de session
                if (count($users) > 0) {
                    $_SESSION['user'] = $users[0];
                    header("location:Connexion.php");
                }
            }else{
                $res = "Échec de l'inscription";
            }
        }
    }else{
        $res = "Champs vides";
    }
}


if(isset($_POST['Connexion'])){
    if(!empty($_POST['email_conn']) and !empty($_POST['mdp_conn'])){
        $email_user = $_POST['email_conn'];
        $mdp_user = $_POST['mdp_conn'];

        $first_req = "SELECT * FROM inscription WHERE email = :email";
        $exect_first_req = $db->prepare($first_req);
        $exect_first_req->bindParam('email',$email_user);
        $exect_first_req->execute();
        $user_connecter = $exect_first_req->fetchAll(PDO::FETCH_ASSOC);

        if(count($user_connecter) > 0){
            $impossible = "e-amil ou mot de passe correcte";
            $_SESSION['Connecter'] = $user_connecter[0];
            // $verfi_mdp = $_SESSION['Connecter']['mdp'];
            if($mdp_user ==  $_SESSION['Connecter']['mdp']){
                header("location:../index.php");
            }
            
        }else{
            $impossible = "e-amil ou mot de passe incorrecte";
        }

    }{
        $requetes = "Champs vide";
    }
}

?>
