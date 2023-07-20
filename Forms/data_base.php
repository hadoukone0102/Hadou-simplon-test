<?php

$servername = "localhost";
$username = "root";
$dbname = "hkservice";
$password = "";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connecté";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

?>