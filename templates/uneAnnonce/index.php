<?php

include(__DIR__ . '/../components/header.php');
?>

<div class="card" style="width: 18rem;">
        <img src="data:image/jpeg;base64,<?php echo base64_encode($annonce->image); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> <span> <?= $annonce->id_annonce ?></span> <?=$annonce->titre; ?></h5>
            <p class="card-text"><?= $annonce->message; ?></p>
            <form action="/catalogue/favori/add" method="POST">
                <input type="hidden" name="id" value="<?= $annonce->id_annonce ?>">
                <button type="submit" class="btn btn-success"><i class="fas fa-star text-warning"></i></button>
            </form>
        </div>
    </div>

    <?php
include(__DIR__ . '/../components/footer.php');