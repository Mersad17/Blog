<?php
    
//connect to show all categories
require '../categorie/categorieClass.php';
$CatSelection = new categorie();
$categorieSelection = $CatSelection->getAllCategories();

//select category
$rowCatSelect = $categorieSelection->fetchAll();
echo "<option value='Nothing'>Nothing</option>  ";
for($i = 0; $i < sizeof($rowCatSelect); $i++)
{
    echo "<option value='".$rowCatSelect[$i][0]."'>".$rowCatSelect[$i][1]."</option>";
}

?>