<?php
function index(){
    include(__DIR__.'/../../templates/annonces/index.php');
}

function addAnnonce(){
    include(__DIR__.'/../entity/Annonce.php');
    $annonce = new Annonces();

    $annonce->titre = $_POST['titre'];
    $annonce->message = $_POST['message'];

    $annonce->save();

    include(__DIR__.'/../controller/HomeController.php');
}