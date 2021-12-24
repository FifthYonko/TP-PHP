<?php

include(__DIR__ . '/../components/header.php');
?>


<h1>Catalogue d'annonce</h1>

<?php
foreach ($liste as $list) {
  
?>

    <div class="card" style="width: 18rem;">
        <img src="data:image/jpeg;base64,<?php echo base64_encode($list->image); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> <span> <?= $list->id_annonce ?></span> <?=$list->titre; ?></h5>
            <p class="card-text"><?= $list->message; ?></p>
            <form action="/catalogue/favori/add" method="POST">
                <input type="hidden" name="id" value="<?= $list->id_annonce ?>">
                <button type="submit" class="btn btn-success"><i class="fas fa-star text-warning"></i></button>
            </form>
        </div>
    </div>

<?php } ?>




<?php
include(__DIR__ . '/../components/footer.php');
?>