<?php

function ListCategorie($bdd){
    $entites = $bdd->query("SELECT Id FROM ENTITE WHERE Identifier = '".$_SESSION['user_username']."' AND Password = '".$_SESSION['user_password']."'");
  ?>
<form method="POST">
  <?php
    while ($donnees = $entites->fetch())    
        {
       
            $ces = $bdd->query('SELECT CATEGORIE.Id,CATEGORIE.Label FROM CATEGORIE INNER JOIN PRODUIT ON PRODUIT.CAT_Id = CATEGORIE.Id INNER JOIN ZONE ON ZONE.PRO_Id = PRODUIT.Id INNER JOIN PAGE ON PAGE.Id = ZONE.PAG_Id INNER JOIN CATALOGUE ON CATALOGUE.Id = PAGE.CAT_Id INNER JOIN CATALOGUE_ENTITE on CATALOGUE_ENTITE.CAT_Id = CATALOGUE.Id where CATALOGUE_ENTITE.ENT_Id ='.$donnees["Id"]);
             while ($ce = $ces->fetch())
            {
                
               
                 ?>
                        
                        <br/><br/>
                       
                        <input type="submit" name="<?php echo $ce['Id'].$ce['Label']; ?>" value="<?php echo $ce['Label']; ?>" class="btn btn-dark" style="width: 100%;" />
                        <input type="hidden" name="<?php echo $ce['Id']; ?>" value="<?php echo $ce['Id']; ?>">
                       
                    
                 <?php
                              
                 
            }
        }
    ?>
        </form> 
    <?php
}
function CategorieAProduit($bdd){
    
      $Cat = $bdd->query("SELECT * FROM CATEGORIE");
    while ($donnees = $Cat->fetch())    
        {
        $verif = $donnees['Id'].$donnees['Label'];
       
        if(isset($_POST[$verif])){
            header('Location:../Model/MainModel.php?page=7');
            $_SESSION['Categorie']=$donnees['Id'];
        }
        }
}

