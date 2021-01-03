<?php


require 'categorieClass.php';
$categorie= new categorie();

// To add a New Categorie
if(!empty($_POST)):
    $categoriNewName=$_POST['name'];
    $categorie->addCategorie($categoriNewName);

    header("location:indexCategorie.php");
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create</title>
</head>
<body>
<!-- Form To fill to add the name of the categorie -->
<form action="categorie.php" method='POST'>
    <div class='champ'>
        <input type="text" name='name' id='name'  placeholder='Name of the Categorie' required>
        <input type="submit" name='ajouter' value='Ajouter' >
    </div>
</form>
</body>
</html>
