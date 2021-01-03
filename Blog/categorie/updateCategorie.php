<?php
// If isn't Loged in the direct to Login Form
session_start();
if(!isset($_SESSION['loginName'])):
    header('location: ../Login/indexLogin.php');
endif;
//Connect with DBB and Category Class 

    require 'categorieClass.php';
    $categorieUpdate= new categorie();

if(!empty($_POST['updateCategorieName'])AND !empty($_POST['idUpdate'])):
    // Get The Value to change 
    $idUpdate=$_POST['idUpdate'];
    $updateCategorieName=$_POST['updateCategorieName'];
    //  Change the Categorie in DBB
    $categorieUpdate->setCategorieById($idUpdate, $updateCategorieName);
    header("location:indexCategorie.php");
    exit();
    endif;
    include '../header.php'
    ?>

<h1>Modify a Category</h1>

<div id='container'>
<form method="POST" action="./updateCategorie.php" >
<?php

// Get The current value of the Category
$id_categorieUpdate=$_POST['id_categorieUpdate'];
$categorieName=$_POST['categorieName'];

?>
<!-- Forme to Change the name -->
<label class='create'><h3>New Category :</h3>
<input type="text" name="updateCategorieName" value="<?php echo $categorieName ?>" class='input'>
</label>
<input type="hidden" name="idUpdate" value="<?php echo $id_categorieUpdate?>"> 
<div class='btnOptions'> 
<a href="index.php" title="retour" class='btnSubmit'><i class="fas fa-undo-alt"></i></a> 
<button type="submit" value="Modifier" class='btnSubmit'>Modify</button>
</div>
</form>
</div>

<?php
include '../footer.php';


