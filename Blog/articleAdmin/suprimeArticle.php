<?php

require './articleClass.php';
$articleSupprime= new Article(); 

if(!empty($_POST['idDelete'])):
      //Get the id of the Article to Delete
    $idArticle = $_POST['idDelete'];
//delete the Article 
$articleSupprime->deleteJointureArticle($idArticle);
$articleSupprime->deleteArticle($idArticle) ;  

    //Send you back to Article page
    header("Location:indexArticleAdmin.php");
    exit();
    endif;
?>