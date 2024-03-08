<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ASSETS/body.css">
    <link rel="stylesheet" href="ASSETS/bouton.css">
    <link rel="stylesheet" href="ASSETS/footer.css">
    <link rel="stylesheet" href="ASSETS/formulaire.css">
    <link rel="stylesheet" href="ASSETS/header.css">
    <link rel="stylesheet" href="ASSETS/logo.css">
    <link rel="stylesheet" href="ASSETS/background-parallax-video.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DISTRICT</title>
</head>

<?php require_once('header.php') ?>


<div class=" d-flex content-img-index ">
  <h1 class="title-index mx-auto glow">Libelle categorie</h1>
  <img src="img/background/Design_sans_titre_8_-removebg-preview.png" alt=""  class="img-banniere">
</div>




                               <!-- ... Affichage des plats  ... -->
<div class="parallax">

     <!-- ... Affichage des plats par categories destock ... -->
    <nav class="col-11 mx-auto  d-md-block d-lg-block Tab_custom">
      <div class="nav nav-tabs " id="nav-tab" role="tablist">
        <button class="nav-link active " id="nav-vedette-tab" data-bs-toggle="tab" data-bs-target="#nav-vedette"
          type="button" role="tab" aria-controls="nav-vedette " aria-selected="true">Articles vedette</button>

        <button class="nav-link" id="nav-entree-tab" data-bs-toggle="tab" data-bs-target="#nav-entree" type="button"
          role="tab" aria-controls="nav-profile" aria-selected="false">Entrée</button>

        <button class="nav-link" id="nav-plats-tab" data-bs-toggle="tab" data-bs-target="#nav-plats" type="button"
          role="tab" aria-controls="nav-plats" aria-selected="false">Plats</button>

        <button class="nav-link" id="nav-dessert-tab" data-bs-toggle="tab" data-bs-target="#nav-dessert" type="button"
          role="tab" aria-controls="nav-dessert" aria-selected="false">Dessert</button>

        <button class="nav-link" id="nav-boisson-tab" data-bs-toggle="tab" data-bs-target="#nav-boisson" type="button"
          role="tab" aria-controls="nav-boisson" aria-selected="false">Boisson</button>

      </div>

      <div class="tab-content " id="nav-tabContent">
        <div class="tab-pane fade show active mx-4" id="nav-vedette" role="tabpanel" aria-labelledby="nav-vedette-tab"
          tabindex="0">

          
        </div>

        <div class="tab-pane fade" id="nav-entree" role="tabpanel" aria-labelledby="nav-entree-tab" tabindex="0">
          
        </div>

        <div class="tab-pane fade" id="nav-plats" role="tabpanel" aria-labelledby="nav-plats-tab" tabindex="0">
          
        </div>

        <div class="tab-pane fade" id="nav-dessert" role="tabpanel" aria-labelledby="nav-dessert-tab" tabindex="0">
          
        </div>

        <div class="tab-pane fade" id="nav-boisson" role="tabpanel" aria-labelledby="nav-boisson-tab" tabindex="0">
          
        </div>
      </div>
    </nav>
  </div>
  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">






















<?php require_once('footer.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
</html>