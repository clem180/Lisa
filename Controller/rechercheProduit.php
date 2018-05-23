<?php

if (isset($_POST['validerrecherche'])) {
    $_SESSION['Recherche']=$_POST['Recherche'];
    header('Location:../Model/MainModel.php?page=8');
}
