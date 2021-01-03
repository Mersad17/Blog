<?php
// If isn't Loged in the direct to Login Form
session_start();
if(!isset($_SESSION['loginName'])):
    header('location: ../Login/indexLogin.php');
endif;

// Connects to Classes 
require './articleClass.php';
$articleAdd= new Article();
$article= new Article();
include '../header.php'
?>
<!-- Sends you to the addArticle page to  create a Article -->
<div class="create">
<form method='POST' action='addArticle.php'>
                    <button type='submit' value='create' class="btnSubmit">Create</i></button>
                </form></div>
                <div class="main">
<?php

// Display  all the articles 
$article->getAllArticles(); 
if ($results =  $article->getAllArticles()) {
    while ($row = $results->fetch()) {
    // Display  the image of the Article
        if ($image =  $article->getArticlesImage($row['id'])) {
            while ($rowImage = $image->fetch()) {
                
                ?>
        <div><?php echo "<img src='../photo/images/".$rowImage['image']."' >";?></div>
                <?php
        }
    }
    //Show the content of the  Article
    ?>
        <h2><?php echo $row['Titre'];?></h2>
        <h3><?php echo $row['Auteur'];?></h3>
        <p><?php echo $row['Description_courte'];?></p>
        <p><?php echo $row['Description_longue'];?></p>
        
        
        <?php 
        //Show the categorie of an Article
        if ($cat =  $article->getArticlesCategorie($row['id'])) {
            while ($rowCat = $cat->fetch()) {
                ?>
                <h2><?php echo $rowCat['categorie'];?></h2>
                <?php
        }
    }
?>
        <div class="btnOptions">
            <div class="btnUpdate">
            <!-- To update Article  -->
                <form method='post' action='updateArticle.php' >
                <input type='hidden' value='<?php echo  $row['id'];?>' name='id' >
                    <button type=submit value=update class="btnSubmit">Modify</button>
                </form>
               
            </div>
            <div class="btnDelete">
                        <!-- To Delete Article  -->

                <form method='POST' action='suprimeArticle.php'>
                    <input type='hidden' value='<?php echo  $row['id']?>' name='idDelete'>
                    <button type=submit value=delete class="btnSubmit">Delete</i></button>
                </form>
            </div>
        </div> 
   
    
 <?php   }
}else echo 'Some Error';?>

</div>
<?php
 include '../footer.php';
