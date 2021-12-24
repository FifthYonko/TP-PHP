<?php
// afficher la page d'accueuil


function afficher(){

    include_once(__DIR__ . '/../Entity/Annonce.php');
    $liste = Annonces::all();
    include __DIR__.'/../../templates/catalogue/index.php';
  
}


?>