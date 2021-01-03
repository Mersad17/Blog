
<?php
session_start();
//Connect with DBB and their Class 

require '../articleAdmin/articleClass.php';
require './commentClass.php';
$articleSimple= new Article();
$seeAllComments= new Comment();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Css/style.css">

    <title>Blog</title>
</head>
<body>
    <div class="BlogSimple">
<?php
include '../menuVisiteur.php';
?>
<?php
//Get the id of Article
if(isset($_GET['idArticle'])){
    $idArticle=$_GET['idArticle'];
}else{
    $idArticle=$_POST['idOfArticle'];
}

//Display content of the  Article !! 
    $simplePage = $articleSimple->getAllArticleById($idArticle);
    while($row = $simplePage->fetch()) {
        //Display The Image 
     if ($image =  $articleSimple->getArticlesImage($row['id'])) {
          while ($rowImage = $image->fetch()) {
         ?>
      <div><?php echo "<img src='../photo/images/".$rowImage['image']."' >";?></div>
      <?php  
      }
    }?>
    <!-- Get content of the Article-->

        <h2>Title: <?php echo $row['Titre'];?></h2>
        <h3> Author :<?php echo $row['Auteur'];?></h3>
        <p><?php echo $row['Description_longue'];?></p>
        <h1>Category</h1>
        <?php
        //Get the Categories of the Article !
        
        if ($cat =  $articleSimple->getArticlesCategorie($row['id'])) {
            while ($rowCat = $cat->fetch()) {
                ?>
                <h2><?php echo $rowCat['categorie'];?></h2>
                <h1>Comments</h1>
                <?php 
                }}
            };
            //Get the comments of the Article 
            $AllComments=$seeAllComments->getCommentsById($idArticle);
            if(!$AllComments->rowCount()==0){
                
                while($comments=$AllComments->fetch()){
                    ?> 
    <div>
        <!-- Display the Nickname   -->
        
        <label for=""><h3>Nickname : </h3> 
        <?php echo $comments["nickName"] ?> </label>
        <!-- Display the comment -->
    <label> <h4>Comment  : </h4> 
    <?php echo $comments["commentaire"] ?>
</label>
</div>

<?php
    }
}
?> 
    <!--Form to fill a New comment -->
    <div class="Comments">

        <form method="POST"  action='comment.php'>
            
            <div class="g-recaptcha" data-sitekey="6Lc8TAoaAAAAACEZWV82OsB9JsIHcayvg5WRHXZZ"></div>
            <label >New Pseudo 
                <input type="text" name="nickName" placeholder="Your NickName Master" require>
            </label>
            <label for="">New Comment
                <textarea type='text' name="comment" id="comment" require ></textarea>
            </label>
            <input type="hidden" name="idArticle" value="<?php echo  $idArticle  ?>"> 
        </textarea>
        <button type="submit" name="submit_comment">Send Comment</button>
    </form>
</div>
</div>

</body>
</html>