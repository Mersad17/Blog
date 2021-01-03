    <?php 
    // If isn't Loged in the direct to Login Form
session_start();
if(!isset($_SESSION['loginName'])):
    header('location: ../Login/indexLogin.php');
endif;
    
include '../header.php';
?>
<h1>Add a Categorie</h1>
<div class="create"><?php include('categorie.php'); ?></div>
<div id='categorieContainer'>
<?php
 $cat= new categorie();
 $cat->getAllCategories(); 
 // Show all the categories with a form to update and delete 
 if ($results =  $cat->getAllCategories()) {
    while ($row =$results->fetch()) {
        ?>
    <div class='oneCategorie'>
        <h2><?php echo $row['categorie'];?></h2>
        <div class="btnOptions">
            <div class="btnUpdate">
            <!-- Form to update -->
                <form method='POST' action='updateCategorie.php' >
                    <input type='hidden' value='<?php echo  $row['id_categorie'];?>' name='id_categorieUpdate' >
                    <input type='hidden' value='<?php echo  $row['categorie'];?>' name='categorieName' >

                    <button type=submit value=update class="btnSubmit">Modify</button>
                </form>
            </div>
            <div class="btnDelete">
            <!-- Form to delete -->
                <form method='POST' action='categorie.supprime.php'>
                    <input type='hidden' value='<?php echo  $row['id_categorie']?>' name='id_categorie'>
                    <button type=submit value=delete class="btnSubmit">Delete</i></button>
                </form>
            </div>
        </div> 
    </div>
 <?php   }
}else echo 'Some ERROR';?>


</div>
</div>
<?php
include '../footer.php';