

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



<?php
require_once('header.php')
?>
<body class="parallax-formulaire">
<div class="container form_custom mt-5">
    <div>
    
    </div>
<h2>Formulaire de Commande</h2>
    <form id="commandeForm">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" required>
            <div class="text-danger"></div>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="prenom" required>
            <div class="text-danger"></div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" required>
            <div class="text-danger"></div>
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone :</label>
            <input type="tel" class="form-control" id="telephone" required>
            <div class="text-danger"></div>
        </div>
        <div class="mb-3">
            <label for="demande" class="form-label">Demande :</label>
            <textarea class="form-control" id="demande" required></textarea>
            <div class="text-danger"></div>
        </div>
        <button type="submit" class="btn btn-primary">Valider la Commande</button>
    </form>
</div>
</body>
<?php
require_once('footer.php')
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
</html>