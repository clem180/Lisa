<?php

function ListProduits($bdd){
     $_SESSION['Pag2'] = 1;
   ChangementDePages($bdd);
    $zones = $bdd->query("SELECT * FROM ZONE WHERE PAG_Id = '". $_SESSION['Pag']."'");
  ?>
    <div>
        <h1>Pages <?PHP echo $_SESSION['Pag2'] ?></h1>
        <form method="POST">
            <input type="submit" name="precedent" value="precedent" class="btn btn-secondary" />
            <input type="submit" name="suivant" value="suivant" class="btn btn-secondary"/>
        </form>
        <br>
        <br>
    </div>
    <div style="position: relative; width:100%; height: 100%; display: inline-block; background-color: lightslategray; padding-bottom: 100%;  ">
    
  <?php
    while ($donnees = $zones->fetch())    
        {
          
          $produits = $bdd->query("SELECT * FROM PRODUIT WHERE Id = '". $donnees['PRO_Id']."'");
              while ($produit = $produits->fetch())    
              {    
                ?>
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $donnees['Id']; ?>"
                            style="
                                    position: absolute;  
                                    left:<?php echo $donnees['CooX']; ?>px ; 
                                    top :<?php echo $donnees['CooY']; ?>px;
                                    height:<?php echo $donnees['Height']; ?>px;
                                    width:<?php echo $donnees['Width']; ?>px;
                                    background-image:url(<?php echo $produit['Image']; ?>)  ;
                                    background-size: 100% 100%;
                                    background-repeat: no-repeat;
                                   "
                    >
                    
                    </button>
                      
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $donnees['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $produit['Label']; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" >
                                     <img src="<?php echo $produit['Image']; ?>" width="100%"/>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  
              }                  
        }
    ?>
       
</div>



    <?php
}

