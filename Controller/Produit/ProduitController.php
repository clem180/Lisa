<?php

$bdd = $connection;
$ces = $bdd->query("SELECT PRODUIT.Label,PRODUIT.Id FROM Produit inner join ZONE on ZONE.PRO_Id = PRODUIT.Id inner join PAGE on PAGE.Id = ZONE.PAG_Id inner join CATALOGUE on CATALOGUE.Id = PAGE.CAT_Id inner join CATALOGUE_ENTITE on CATALOGUE_ENTITE.CAT_Id = CATALOGUE.Id inner join ENTITE on ENTITE.Id = CATALOGUE_ENTITE.ENT_Id WHERE PRODUIT.Label = '".$_SESSION['Recherche']."' and ENTITE.Identifier='".$_SESSION['user_username']."' and ENTITE.Password='".$_SESSION['user_password']."';");
  ?>
<form method="POST">
  <?php
  $verif = 1;
     while ($ce = $ces->fetch())
            {
                $verif = 0;
               
                 ?>
                        
                        <br/><br/>
                        <button type="button" class="btn btn-dark" data-toggle="modal" style="width: 100%;" data-target="#exampleModal<?php echo $ce['Id']; ?>">
                                          
                               <?php echo $ce['Label']; ?> 
                    
                    </button>
                      
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $ce['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $ce['Label']; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" >
                                     <img src="<?php echo $ce['Image']; ?>" width="100%"/>
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
           
            if ($verif==1) {
                    ?>
                    <h1>Aucun produit trouver</h1>
                    <?php
            }
        
    ?>
        </form> 
    <?php

