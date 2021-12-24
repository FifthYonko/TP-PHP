<?php

$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : (isset($_SERVER['ORIG_PATH_INFO']) ? $_SERVER['ORIG_PATH_INFO'] : '');

include_once(__DIR__.'/../vendor/simpleOrm.class.php');


if($path==''){
    include(__DIR__.'/../src/controller/HomeController.php');
    homeC();
}


else if($path=='/annonce'){
    include(__DIR__.'/../src/controller/AddAnnonceController.php');
    index();
}

else if($path=='/annonce/add'){
    include(__DIR__.'/../src/controller/AddAnnonceController.php');
    addAnnonce();
}

else if($path == '/catalogue'){
    include(__DIR__.'/../src/controller/CatalogueController.php');
    afficher();
}
else if($path == '/catalogue/favori'){
    include(__DIR__.'/../src/controller/FavoriController.php');
    afficheFavori();
}


elseif($path=='/catalogue/favori/add'){
    include(__DIR__.'/../src/controller/FavoriController.php');
    favori();
}

elseif($path=='/catalogue/favori/clear'){
    include(__DIR__.'/../src/controller/FavoriController.php');
    vider();
}

else{
    "url pas valide";
}

?>