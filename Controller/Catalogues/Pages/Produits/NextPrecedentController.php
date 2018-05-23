<?php
function ChangementDePages($bdd){
  $Count_pages = $bdd->query("SELECT TOP 1 Id  FROM PAGE   WHERE CAT_Id = ".$_SESSION['Cat']." ORDER BY Id DESC"); 
  while ($donnes = $Count_pages->fetch()){
      $data = $donnes['Id'];
  }
  $Count_pages = $bdd->query("SELECT TOP 1 Id  FROM PAGE   WHERE CAT_Id = ".$_SESSION['Cat']." ORDER BY Id "); 
  while ($donnes = $Count_pages->fetch()){
      $data2 = $donnes['Id'];
  }
  $a =0;
  
   while ($data > $a )    
    {     
             $a++;

    if(isset($_POST['suivant'])){
     
       $_SESSION['Pag'] = $_SESSION['Pag'] +1;
        if ($data>=$_SESSION['Pag']) {
            
            
         $pages2 = $bdd->query("SELECT * FROM PAGE WHERE CAT_Id = '".$_SESSION['Cat']."'");
         while ($page2 = $pages2->fetch())    
         {    
             
             if ($page2['Id'] == $_SESSION['Pag']) {
                 
                  $_SESSION['Pag2'] = $page2['Number'];
                 
                 return true;
             }
         }
        } else {
           
           $_SESSION['Pag2'] = 1;
           $_SESSION['Pag'] = $data2;
            return true;
        }
       
        }
        else if(isset($_POST['precedent'])){
             
            $_SESSION['Pag'] = $_SESSION['Pag'] - 1;
            if ($_SESSION['Pag'] >= $data2) {
                
            $pages2 = $bdd->query("SELECT * FROM PAGE WHERE CAT_Id = ".$_SESSION['Cat']);
            while ($page2 = $pages2->fetch())    
            {    
             
             if ($page2['Id'] == $_SESSION['Pag']) {
                  $_SESSION['Pag2'] = $page2['Number'];
                
                 return true;
                 }
            }
            }
            else {
           
                $_SESSION['Pag2'] = 1;
                $_SESSION['Pag'] = $data2;
                return true;
             }
            
        }
    }
return true;
}