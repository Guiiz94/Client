<?php
    session_start();
?>

<!Doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>PointLand</title>
    <?php
        //include 'includes/dbh.inc.php';
        //include 'panier.class.php';
        //$panier = new panier();
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<style>
 .bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
 }

 @media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
 }
</style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
      <div class="col-sm-8 col-md-7 py-4">
        <h4 class="text-white">Que souhaitez vous? :</h4>
          <ul class="list-unstyled">
              <li><a href="home.php" class="text-white">Aller à l'accueil</a></li>
              <li><a href="profile.php" class="text-white">Mon Compte</a></li>
          </ul>
        </div>

        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">À Propos de Nous</h4>
          <p class="text-muted">Description de PointLand</p>
          <a href="includes/deconnexion.inc.php" class="text-white">Se Déconnecter</a>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <strong>PointLand</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>