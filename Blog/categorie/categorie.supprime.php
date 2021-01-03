<?php
require 'categorieClass.php';
$categorieSupprime= new categorie(); 

// To Delete an Categorie
if(!empty($_POST['id_categorie'])):
    $idCategorie = $_POST['id_categorie'];

    $categorieSupprime->deleteCategorie($idCategorie) ;  
    header("location:indexCategorie.php");
    exit();
    endif;
?>