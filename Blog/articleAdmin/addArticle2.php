<?php
// If isn't Loged in the direct to Login Form
session_start();
if(!isset($_SESSION['loginName'])):
    header('location: ../Login/indexLogin.php');
endif;

require './articleClass.php';
require '../photo/imageClass.php';
$articleAdd= new Article();
$DB = new DbClass();
$imgClass= new image();

// To add A photo to the Article 
if(isset($_POST['imageId'])){
    $id=$_POST['AddNewPhoto'];
    $image=$_POST['imageId'];
    
//Else it will join a new image to the Article
        $articleAdd->addArticleImage($image,$id);
//Send you back to Article page
header("location:indexArticleAdmin.php");
exit();
    }else if(isset($_GET['nameImage'])){
    $id=$_GET['id'];
    
    $results =  $imgClass->getImage($_GET['nameImage']);
    while ($row =$results->fetch()) {
        
    $articleAdd->addArticleImage($row['id_image'],$id);
    }
    header("location:indexArticleAdmin.php");
    exit();
    
    }
if(!empty($_POST['Titre'])):
    //Get the values entered and add the article to DBB

    $articleNewName=$_POST['Titre'];

    $articleAuteur=$_POST['Auteur'];

    $articleDCourt=$_POST['descriptionShort'];

    $articleDLong=$_POST['descriptionLong'];
  
//ADD the article 
$last_id =$articleAdd->addArticle($articleNewName,$articleAuteur,$articleDCourt, $articleDLong);

//ADD a new categorie to the article
$categorieAd = ($_POST['categorieAdd']);
$articleAdd->addArticleCategorie($categorieAd,$last_id);


//To change the Image
$imgClass= new image(); 
if(isset($_GET['nameImage'])){
    

    if ($results =  $imgClass->getImage($_GET['nameImage'])) {
        while ($row =$results->fetch()) {
            ?>
        <div><?php echo "<img src='../photo/images/".$row['image']."' >";?></div>
        <?php }}   
}else{
    
    if(isset($_POST['submitThePhoto'])){
        $imageId=$_POST["imageId"];
        if ($results =  $imgClass->getSpecificImages($imageId)) {
            while ($row =$results->fetch()) {
                ?>
            <div><?php echo "<img src='../photo/images/".$row['image']."' >";?></div>
<?php        
}}
}}

?>
<!-- Form to Upload a new image from your Mediatheque  -->
<h2>Add An Image:</h2>
<form action="../photo/indexImage.php"method="post">

        <input type="hidden" name='id_article' value="<?php echo $last_id?>">

        <input type="hidden" name='imageArticle'>
        <input type="submit" name='selectImage' value='Select Image From Media'>
        
        </form>    
<!-- Form to Upload a new image from your computer  -->
    <form action="../photo/upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="hidden" name='imageArticle'>
    <input type="hidden" name='id_article' value="<?php echo $last_id?>">
    <button type="submit" name="submitUpload">UPLOAD</button>
    </form>
    <?php
endif;