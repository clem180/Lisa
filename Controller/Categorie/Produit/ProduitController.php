<?php

function ListCategorieProduit($bdd){
    $ces = $bdd->query("SELECT * FROM Produit WHERE Cat_Id = '".$_SESSION['Categorie']."'");
  ?>
<form method="POST">
  <?php
     while ($ce = $ces->fetch())
            {
                
               
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
        
    ?>
        </form> 
    <?php
}
