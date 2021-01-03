
<?php
// If isn't Loged in the direct to Login Form
session_start();
if(!isset($_SESSION['loginName'])):
    header('location: ../Login/indexLogin.php');
endif;

include '../header.php';
//If the user commes from create an Article or modify an Article ,don't show the upload and delete form 
if(!isset($_POST['imageArticle'])){
 ?>
<!-- Enctype specified how the form data should be encoded  -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submitUpload">UPLOAD</button>
    </form>
<?php
}
require 'imageClass.php';
$imgClass= new image(); 
    // Show all images ;
if ($results =  $imgClass->getAllImages()) {
    while ($row =$results->fetch()) {
      ?>
    <div>
        <div><?php echo "<img src='images/".$row['image']."' >";?></div>
        <?php 
        //Get the id of the image to put it in the article 
        if(isset($_POST['imageArticle'])){
            if(isset($_POST['selectImage'])){
            ?>

            <form action="../articleAdmin/addArticle2.php" method="POST">

            <input type='hidden' value='<?php echo $_POST['id_article'];?>' name='AddNewPhoto' >
        
            <input type="hidden" name='imageId' value="<?php echo $row['id_image']?>">
            <input type="submit" name="submitThePhoto" value="Get This Photo"> 
            </form>
            <?php
        }
         if(isset($_POST['updateImage'])){
         ?>    
            <form action="../articleAdmin/updateArticle.php" method="post">
          <?php
          ?>
            <input type='hidden' value='<?php echo $_POST['id_article'];?>' name='id' >
            <input type="hidden" name='imageId' value="<?php echo $row['id_image']?>">
            <input type="submit" name="submitThePhoto" value="Get Tis Photo ">
            </form>

        <?php
        }
    }
    //If the user commes from create Article or modify Article ,don't show the upload and delete form 
    if(!isset($_POST['imageArticle'])){
?>
            <div >
                <form method='POST' action='imageSuprime.php'>
                    <input type='hidden' value='<?php echo  $row['id_image']?>' name='id_image'>
                    <button type=submit class='imagebutton' value=delete class="btnSubmit">Delete</i></button>
                </form>
            </div>
            <?php  }?>
        </div> 
    </div>
 <?php   }
}else echo 'Sorry No French';?>


</body>
</html>