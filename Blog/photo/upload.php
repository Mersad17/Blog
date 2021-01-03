<?php
//Database connection
require 'imageClass.php';
$imageClass= new image(); 

// To upload an image
if(isset($_POST["submitUpload"])){
    //file is the name of the inpur 
    $file=$_FILES["file"];
    //the file properties 
    $fileName=$_FILES["file"]['name'];
    $fileTmpName=$_FILES["file"]['tmp_name'];
    $fileSize=$_FILES["file"]['size'];
    $fileError=$_FILES["file"]['error'];
    $fileType=$_FILES["file"]['type'];
//get the type of the file so we can only upload img type files 
    $fileExt=explode('.',$fileName);
    $fileActualExt =strtolower(end($fileExt));
    //the files we allow to upload 
    $allowed=array('jpg', 'jpeg','png');
    //if file is an img
    if(in_array($fileActualExt,$allowed)){
    //if we have no error     
    if($fileError===0){
    // check if file size is not to big     
    if($fileSize<1000000 ) {
    //To make a  uniqe id for all the files we upload     
    $fileNameNew =uniqid('',true).".".$fileActualExt; 
    //Where to upload the file in our pc 
    $fileDestination=  'images/'.$fileNameNew;
    //Upload the file to the site 
    move_uploaded_file($fileTmpName,$fileDestination);
    //Upload the file to dataBase
    $imageClass->addImage($fileNameNew);
  
    if(isset($_POST['id_article'])){
        $id =$_POST['id_article'];

    header("Location: ../articleAdmin/addArticle2.php?id=".$id."&nameImage=".$fileNameNew);
    exit();
    }else if(isset($_POST['id_article2'])){
        $id =$_POST['id_article2'];
        header("location:../articleAdmin/updateArticle.php?id=".$id."&nameImage=".$fileNameNew);
    exit();

    }else{
        header("Location: indexImage.php?uploadSucces");
    exit();
    }
    }else{
        echo "Votre fichier est trop grande";
    }

    }else{
        echo 'Il y a une error inconu';
    }
    }else{
        echo "Vous pouvez pas Upload te fichier de cet type ";

    }

}