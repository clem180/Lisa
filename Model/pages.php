<?php

$numberPages = $_GET['page'];

switch ($numberPages) {
    case 0: include_once '../View/HomePage.php';

        break;
    case 1:


        break;
    case 2:include_once '../Model/Catalogues/CatalogueModel.php';


        break;
    case 3:include_once '../Model/Catalogues/Pages/PagesModel.php';

        break;
    case 4:include_once '../Model/Catalogues/Pages/Produits/ProduitsModel.php';


        break;
    case 5:include_once '../Model/Categorie/CategorieModel.php';


        break;
    
    case 6:include_once '../Model/Catalogues/Pages/Produits/ProduitsModel.php';


        break;
    case 7:include_once '../Model/Categorie/Produit/ProduitsModel.php';


        break;
    case 8:include_once '../Model/produitRecherche/produitRecherche.php';


        break;

    default:
        break;
}



