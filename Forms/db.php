<?php

$base = new PDO("mysql:host=localhost;dbname=programme_un","root","");
if($base){
    // echo "connecté";
}else{
    echo "non connecté";
}

