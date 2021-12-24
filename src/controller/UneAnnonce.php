<?php
// afficher la page d'accueuil


function afficherAnnonce(){
    
    include_once(__DIR__ . '/../Entity/Annonce.php');
    $id = $_POST['id'];
    $annonce  = Annonces::retrieveByid_annonce($id, SimpleOrm::FETCH_ONE);
    include __DIR__.'/../../templates/uneAnnonce/index.php';
}


?>