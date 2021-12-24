<?php

include(__DIR__ . '/../components/header.php');
?>

<h1>Formulaire annonces</h1>

<form action="/annonce/add", method="POST">
  <div class="mb-3">
    <label for="titre" class="form-label">Titre</label>
    <input type="text" name="titre" class="form-control" id="titre" >
  </div>
  <div class="mb-3">
    <label for="message" class="form-label w-100">Message</label>
    <textarea name="message" id="message" cols="50" rows="5"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php
include(__DIR__ . '/../components/footer.php');
?>