<?php

//MAPPING L'ensemble de la table USER
include_once(__DIR__.'/../../vendor/simpleOrm.class.php');

class Annonces extends SimpleOrm{
    public $id_annonce;
    public $titre;
    public $message;
    public $image;
    

}
 
