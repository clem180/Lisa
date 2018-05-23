<?php
session_start();
require_once '../Controller/database/ConnectionController.php';
if (isConnected()) {
require_once '../View/Header.php';
require_once '../Controller/database/DatabaseConnectionController.php';
require_once '../Controller/rechercheProduit.php';
?>

<div class="row row-main">
    <div class="col-md-12">
        <div class="container">
            <?php require_once '../Model/pages.php';?>
        </div>
    </div>
</div>

<?php
require_once '../View/Footer.php';
    
}else{
    include_once '../View/Error.php';
}
