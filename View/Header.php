<?php

session_start();
$title = "Accueil";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="../lib/css/bootstrap.min.css" rel="stylesheet">
        <script href="../lib/jquery/jquery-3.3.1.min.js"></script>
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
            <a class="nav-link" href="#">Catalogues </a>
            </li>      
        </ul>   
    
  </div>
</nav>
    </body>
</html>
