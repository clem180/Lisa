<?php

function ListPages($bdd){
    $Pages = $bdd->query("SELECT * FROM PAGE WHERE CAT_Id = '". $_SESSION['Cat']."'");
  ?>
    <form method="POST">
  <?php
    while ($donnees = $Pages->fetch())    
        {
          ?>
                        
                    <br/><br/>
                    <input type="submit" name="<?php echo $donnees['Id'],$donnees['Number']; ?>" value="<?php echo $donnees['Number']; ?>" class="btn btn-dark" style="width: 100%;" />
                    <input type="hidden" name="<?php echo $donnees['Id']; ?>" value="<?php echo $donnees['Id']; ?>">
                 <?php
                                              
        }
    ?>
        </form> 
    <?php
}
function PagesAProduit($bdd){
      $Cat = $bdd->query("SELECT * FROM PAGE");
    while ($donnees = $Cat->fetch())    
        {
        $verif = $donnees['Id'].$donnees['Number'];
        if(isset($_POST[$verif])){
            header('Location:../Model/MainModel.php?page=4');
            $_SESSION['Pag']=$donnees['Id'];
        }
        }
}
