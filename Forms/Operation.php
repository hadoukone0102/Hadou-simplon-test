<?php
require_once("db.php");

$db = new PDO("mysql:host=localhost;dbname=programme_un","root","");
if($db){
    // echo "connecté";
}else{
    echo "non connecté";
}
// ...
if(isset($_POST['inscription'])){
    if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['work']) and !empty($_POST['domaine']) and !empty($_POST['email']) and !empty($_POST['mdp'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $work = $_POST['work'];
        $contact = $_POST['domaine'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        // requete d'insertion dans la base de donnée 
        $req = "INSERT INTO `utilisateur` (nom, prenom, work, contact, email, mdp) VALUES (:nom, :prenom, :work, :contact, :email, :mdp)";
        $execution_req = $db->prepare($req);
        $execution_req->bindParam(":nom", $nom);
        $execution_req->bindParam(":prenom", $prenom);
        $execution_req->bindParam(":work", $work);
        $execution_req->bindParam(":contact", $contact);
        $execution_req->bindParam(":email", $email);
        $execution_req->bindParam(":mdp", $mdp);
        $final = $execution_req->execute();

        if($final){
            $err = "Insertion réussie";
            echo "Insertion réussie";
        }else{
            $err = "Échec de l'insertion";
        }
    }
}

$req = $base->prepare("SELECT * FROM `utilisateur`");
$req->execute();
$all = $req->fetchAll();
if($req){
    echo "super";
    var_dump($all);
}else{
    echo "non super";
}