<?php


$title = "Accueil";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="../lib/css/bootstrap.min.css" rel="stylesheet">
         <link href="../lib/css/mycss.css" rel="stylesheet">
         <script type="text/javascript" src="../lib/jquery/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../lib/js/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Lisa  Digital</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../Model/MainModel.php?page=0">Acceuil </a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="../Model/MainModel.php?page=2">Catalogues </a>
            </li>  
            <li class="nav-item active">
            <a class="nav-link" href="../Model/MainModel.php?page=5">Categorie </a>
            </li>      
            <li class="nav-item active">
                <form method="post">
                    <input class="btn" type="text" name="Recherche" class="form-control input-group-lg" placeholder="Rechercher un produits">
                    <input class="btn" type="submit" name="validerrecherche">
                </form>
            
            </li>   
        </ul>   
            <form method="POST" action="../Model/Connection/DatabaseConnectionModel.php">
                <input type="submit" class="btn" value="deconecter" name="deconecter" />
            </form>
  </div>
</nav>
   

