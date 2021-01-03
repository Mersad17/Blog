<?php
// If isn't Loged in the direct to Login Form
session_start();
if(!isset($_SESSION['loginName'])):
    header('location: ../Login/indexLogin.php');
endif;

include '../header.php';
?>

<form action="addArticle2.php" method='POST'>
    <!-- Enter the values to Add an Article -->
    <div class="articlesInfo">
        <label>Title:
        <input type="text" name='Titre' id='Titre'  placeholder='Add Title' required>
        </label>
        <label>Author:

        <input type="text" name='Auteur' id='Auteur'  placeholder='Add Author' required>
        </label>
        <label>Short Description :
        <input type="text" name='descriptionShort'   placeholder='Add Short Description ' required>
        </label>
    </div>

        <textarea  name="descriptionLong" id="tinymceDescriptionLong" ></textarea>   
        <!-- New Categorie -->
        <h2>Category</h2> 
        <select name='categorieAdd'>
        <?php include('selectCategorie.php');?> 
        <input type='hidden' name='button' value='modified'>
        </select>
        <button type="submit" name='ajouter' value='Ajouter' >Next</button>
</form>

    <a id="linkInsideButton"href="./indexArticleAdmin.php" title="retour"> <button>Return </button></a>
 
 <?php
 include '../footer.php';
