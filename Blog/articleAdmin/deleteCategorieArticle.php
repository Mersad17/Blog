<?php
// To delete the Join Between categorie and article
require 'articleClass.php';
$categorieSupprimeArticle= new Article(); 
$id =$_POST['idOfArticle'];


if(!empty($_POST['delCategoriArticle'])):
    $idCategorie = $_POST['delCategoriArticle'];

    $categorieSupprimeArticle->deleteJointureCategorie($idCategorie) ;  
    header("location:updateArticle.php?id=".$id);
    exit();
    endif;
?>