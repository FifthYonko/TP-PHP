<?php
function afficheFavori(){
    include(__DIR__.'/../../templates/favori/index.php');
}


function favori(){

    include(__DIR__.'/../entity/Annonce.php');
    $id=$_POST['id'];
    $annoncefav = Annonces::retrieveByid_annonce($id, SimpleOrm::FETCH_ONE);

    include __DIR__.'/../entity/favori.php';
    
    if (isset($_COOKIE['favori'])) {
        $texte = $_COOKIE['favori'];
        $favori = json_decode($texte);
        
        foreach($favori->ligne_favori as $row){
            
           if($row->id_annonce != $annoncefav->id_annonce){

            array_push($favori->ligne_favori,$annoncefav);
            $texte = json_encode($favori);

            // Je créé le COOKIE grâce au texte
            setcookie('favori', $texte,-1,'/');

            //RENVOYER UNE VUE
            include __DIR__ . '/../../templates/favori/index.php';

            return;
        }
        }
       
    } 
    else {
        $favori = new Favoris();
        $favori->ligne_favori=[];
    }
    

    
    array_push($favori->ligne_favori,$annoncefav);
  
  
    // creer une sauvegarde de mon panier dans un cookie
    $texte = json_encode($favori);
    
    // je cree le coookie grace au texte
    setcookie('favori', $texte,-1,'/');
    

    var_dump($_COOKIE['favori']);
    die();
    include(__DIR__.'/../../templates/favori/index.php');

    

    // array_push($favori->ligne_favori,$annoncefav);
    
    // include(__DIR__.'/../../templates/favori/index.php');
    
}

// include __DIR__ . '/../../templates/favori/index.php';

function vider()
{
    setcookie('favori', null,-1,'/');
    // renvoyer une vue
    include(__DIR__ . '/../../templates/home/index.php');
}
