<?php
session_start();
include_once '../../Controller/database/DatabaseConnectionController.php';
include_once '../../Controller/database/ConnectionController.php';
include_once '../../View/ConnectionPage.php';

if (isset($_POST['Identifier'],$_POST['Password'])) {
   
    connection($_POST['Identifier'], $_POST['Password'], $connection);
    
}

?>

