<?php


function ListCatalogues($bdd){
    $entites = $bdd->query("SELECT Id FROM ENTITE WHERE Identifier = '".$_SESSION['user_username']."' AND Password = '".$_SESSION['user_password']."'");
  ?>
<form method="POST">
  <?php
    while ($donnees = $entites->fetch())    
        {
        
            $ces = $bdd->query('SELECT * FROM CATALOGUE_ENTITE WHERE ENT_Id='.$donnees['Id']);
             while ($ce = $ces->fetch())
            {
                
                $catalogues = $bdd->query('SELECT * FROM CATALOGUE WHERE Id='.$ce['CAT_Id']);
                while ($catalogue = $catalogues->fetch())
                {
                   
                
                    if (strtotime($ce['DisplayStartDate'])<=strtotime(date('Y-m-d')) && strtotime(date('Y-m-d'))<=strtotime($ce['DisplayEndDate'])) {
                        
                    
                 ?>
                        
                        <br/><br/>
                        <input type="submit" name="<?php echo $catalogue['Id'].$catalogue['Label']; ?>" value="<?php echo $catalogue['Label']; ?>" class="btn btn-dark" style="width: 100%;" />
                        <input type="hidden" name="<?php echo $catalogue['Id']; ?>" value="<?php echo $catalogue['Id']; ?>">
                       
                    
                 <?php
                    }     
                }  
            }
        }
    ?>
        </form> 
    <?php
}
function CataloguesAPages($bdd){
      $Cat = $bdd->query("SELECT * FROM CATALOGUE");
    while ($donnees = $Cat->fetch())    
        {
        $verif = $donnees['Id'].$donnees['Label'];
        if(isset($_POST[$verif])){
            header('Location:../Model/MainModel.php?page=3');
            $_SESSION['Cat']=$donnees['Id'];
        }
        }
}