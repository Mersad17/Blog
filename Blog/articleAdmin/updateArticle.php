<?php
// If isn't Loged in the direct to Login Form
session_start();
if(!isset($_SESSION['loginName'])):
    header('location: ../Login/indexLogin.php');
endif;

//Connect with DBB and their Class 
    require 'articleClass.php';
    require '../photo/imageClass.php';
    $articleUpdate= new Article();
    $imgClass= new image();

//If pressed on Modify button
    if(isset($_POST['Modifier'])){
        //Get the value of values of Article to Update the article
        $id=$_POST['idUpdate'];
        $articleNewName=$_POST['TitreUpdate'];
        $articleAuteur=$_POST['AuteurUpdate'];
        $articleDCourt=$_POST['Description_courte_Update'];
        $Description_longue_Update=$_POST['Description_longue_Update'];
        
        //Update the Article on DBB
        $articleUpdate->setArticleById($id, $articleNewName, $articleAuteur, $articleDCourt,  $Description_longue_Update);
        //Update the join table with the categorie .
        $categorieAd = ($_POST['categorieAdd']);
        $articleUpdate->addArticleCategorie($categorieAd,$id);
        //Insert image to database
        if(isset($_POST['id_image'])){
            
            $image=$_POST['id_image'];
        //If article already has an Image, it will change it . 
            $hasImage = $articleUpdate->selectArticleImage($image,$id);
            if(!$hasImage->rowCount()==0){
                $articleUpdate->updateArticleImage($image,$id);
                
            }else{
        //Else it will join a new image to the Article
                $articleUpdate->addArticleImage($image,$id);
            }
        }
        //Send you back to Article page
        header("location:updateArticle.php?id=".$id);
    
    exit();
    }
//Post the id of Article from the Articles Page so we know what article are changing 
if(isset($_GET['id'])){
$idArticle=$_GET['id'];
}else{
$idArticle=$_POST['id'];
}
include ('../header.php')
    ?>
 <title>Update Article</title>
</head>
<body>
<h1>Modify an Article</h1>

<!-- Enter the value You want to Update .
Reload the page when form is send and does the function in the begining of the page -->
<form method="POST" action="./updateArticle.php" >

<?php
//This is so the user  can see what value is changing 
$articleUpdate->getAllArticles(); 
// To show all the articles 
if ($results =  $articleUpdate->getAllArticleById($idArticle)) {
    while ($row = $results->fetch()) {
       
        $id=$row['id'];
      ?>
<!-- Input to change the value -->
<div class="articlesInfo">
<label>Title:
    <input type="text" name="TitreUpdate" value="<?php echo $row['Titre'];?>" class='input'>
    </label> <label>Author:
    <input type="text" name="AuteurUpdate" value="<?php echo $row['Auteur'];?>" class='input'>
    </label>
        <label>Short Description :
    <input type="text" name="Description_courte_Update" value="<?php echo $row['Description_courte'] ?>" class='input'>
    </label>
    </div><textarea name="Description_longue_Update" id="tinymceDescriptionLong"><?php echo $row['Description_longue'] ?></textarea>    
   
    <input type="hidden" name="idUpdate" value="<?php echo $id?>"> 
    <a href="indexArticleAdmin.php" title="retour" class='btnSubmit'><i class="fas fa-undo-alt"></i></a> 

<?php
// Work on image

if(isset($_POST['imageId'])){
    $results =  $imgClass->getSpecificImages($_POST['imageId']);
}else if(isset($_GET['nameImage'])){
    $results =  $imgClass->getImage($_GET['nameImage']);

}else{
    $results =  $articleUpdate->getArticlesImage($idArticle);

}
while ($row =$results->fetch()) {
        ?>
    <div><?php echo "<img src='../photo/images/".$row['image']."' >";?></div>
    <input type="hidden" name='id_image' value="<?php echo $row['id_image']?>">
    <?php 
    }
?>
    
<?php        

?>
<!-- Submit To modify the changes made  -->
    <input type="hidden" name="Modifier"  />
   <button type="submit"  value="Save Changes" class='btnSubmit'>Save Changes</button>

</form>
<!-- Form to upload a new image from the Media of the blog  -->
<form action="../photo/indexImage.php"method="post">

        <input type="hidden" name='id_article' value="<?php echo $idArticle?>">
        <input type="hidden" name='imageArticle'>
        <input type="submit" name='updateImage' value='Select Image From Media'>
        
        </form>    
<!-- Form to Upload a new image from your computer  -->
    <form action="../photo/upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="hidden" name='imageArticle'>
    <input type="hidden" name='id_article2' value="<?php echo $idArticle?>">
    <button type="submit" name="submitUpload">UPLOAD</button>
    </form>
</div>

<?php }}?>

<!-- Categories ;Display the categories of an Article -->
<?php

if ($cat =  $articleUpdate->getArticlesCategorie($idArticle)) {
    while ($rowCat = $cat->fetch()) {
    ?>
    <!-- Show categories of an Article -->
    <h2><?php echo $rowCat['categorie'];?></h2>
    <!-- Delete the categorie of an Article -->
    <form action="deleteCategorieArticle.php" method="POST">
    <input type="hidden" name='idOfArticle' value='<?php echo $idArticle;?>'>
    <input type="hidden" name="delCategoriArticle" value="<?php echo $rowCat['id_categorie'];?>">
    <button type="submit" >Delete Categorie</button>
    </form>
    <?php
    }} ?>

    <?php
    include('../footer.php');
    ?>
