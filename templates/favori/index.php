<?php

include(__DIR__ . '/../components/header.php');
?>


<h1> page Favori</h1>

<?php
$favori=json_decode($_COOKIE['favori']);
if (isset($favori)) {


    foreach ($favori as $list) {

        for($i=0;$i<sizeof($list);$i++){

        
?>

        <div class="card" style="width: 18rem;">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($list[$i]->image); ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <span> <?= $list[$i]->id_annonce ?></span> <?= $list[$i]->titre; ?></h5>
                <p class="card-text"><?= $list[$i]->message; ?></p>
            </div>
        </div>

<?php
        }
    }
}
?>

<a href="/catalogue/favori/clear">Vider le panier</a>


<?php
include(__DIR__ . '/../components/footer.php');
?>