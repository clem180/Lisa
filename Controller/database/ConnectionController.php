<?php

/**
 * Cette fonction permet de vérifier l'identifiant et le mot de passe de la 
 * connexion, s'ils sont corrects on se connecte
 */
function connection($username, $password, $database){
    $connection = $database;
    echo 'b';
    $verifyUsername = $connection->query("SELECT Id FROM ENTITE WHERE Identifier = '".$username."' AND Password = '".$password."'");
    $verifyUsername->execute();
    
    echo 'a';
    
    $data = $verifyUsername->rowCount();
    
    echo $data;
    if ($data != 0) {
        $_SESSION['user_password'] = $password;
        $_SESSION['user_username'] = $username;
        
        header('Location:../../Model/MainModel.php?page=0');
    }
}

//Cette fonction permet de savoir si l'utilisateur est connecté ou non
function isConnected(){
    //Cette fonction retourne True si S_SESSION['user_username'] et $_SESSION['user_password'] existent
    if (isset(S_SESSION['user_username'], $_SESSION['user_password'])) {
        return True;
    }
    else{
        return False;
    }
}

?>

