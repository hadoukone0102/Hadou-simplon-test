<?php

$servername = "localhost";
$username = "root";
$dbname = "hkservice";
$password = "";

try{
    $db = new PDO("mysql:host:localhost;dbname=hkservice",$username,$password);
   $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "erreur de connexion". $e->getMessage();
}






?>