<?php
session_start();
require_once '../View/Header.php';
require_once '../Controller/database/DatabaseConnectionController.php';
?>

<div class="row row-main">
    <div class="col-md-12">
        <div class="container">
            <?php require_once '../Model/pages.php';?>
        </div>
    </div>
</div>

