<?php

require 'imageClass.php';
$imageSupprime= new image(); 

if(!empty($_POST['id_image'])):
    $idImage = $_POST['id_image'];
    //delete image from dataBase using the id
    $linkImage= $imageSupprime->getSpecificImages($idImage);
    //Delete img from folder
    $result = $imageSupprime->getImage($idImage);
    while ($row= $result->fetch()){
        $img=$row['image'];
    }
    
    unlink("images/".$img);
    $imageSupprime->deleteImage($idImage) ; 
    header("location:indexImage.php");
    exit();
    endif;
?>