<?php
//Connect with DBB and their Class 
require '../articleAdmin/articleClass.php';
require '../categorie/categorieClass.php';
$articleVisiteur= new Article();
$categorieVisiteur= new categorie(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Css/style.css">

    <title>Articles</title>
</head>
<body>
<?php
include '../menuVisiteur.php';
?>
      <!--Creates A Categorie Filter  -->
      <div class="vertical-menu">
        <h1 id='h1'>Category</h1>
        <a href="../blogArticleVisiteur.php/allBlogs.php" class="active">All</a>
        <?php
  $categorieVisiteur->getAllCategories();
  if ($results =  $categorieVisiteur->getAllCategories()) {
    while ($row =$results->fetch()) {
      $nameOfCategorie=$row['categorie']
      ?>
      <!-- Sends You to the page of the Categorie -->
     <a href="../blogArticleVisiteur.php/allBlogs.php?categorie=<?php echo $nameOfCategorie;?> "><?php echo $row['categorie'];?></a>

     <?php }}
    ?>
    </div>
<div class='main'>
<?php

$articleVisiteur->getAllArticles();
// Define how many results you want per page
$results_per_page = 4;

// Find out the number of results stored in database
$results =  $articleVisiteur->getAllArticles();

$number_of_results = $results->rowCount();

// Determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// Determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
// Determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

//Filter By categorie
if (isset($_GET['categorie'])){
  
  if ($results =  $articleVisiteur->getArticlesOfCategorie($_GET['categorie'])) {
    
    while ($row =$results->fetch()) {
      if ($image =  $articleVisiteur->getArticlesImage($row['id'])) {
        while ($rowImage = $image->fetch()) {
          ?>
    <div><?php echo "<img src='../photo/images/".$rowImage['image']."' >";?></div>
    <?php
    }
  }
  
  //Show the content of the  Article when filter By categorie
  ?>
      <h2><?php echo $row['Titre'];?></h2>
      <h3><?php echo $row['Auteur'];?></h3>
      <p><?php echo $row['Description_courte'];?></p>
      <p><?php echo $row['Description_longue'];?></p>
      
      
      <?php 
      //Show the categorie of an Article
      if ($cat =  $articleVisiteur->getArticlesCategorie($row['id'])) {
        while ($rowCat = $cat->fetch()) {
          ?>
              <h2><?php echo $rowCat['categorie'];?></h2>
              <?php
      }
    }
    ?>
<form action="./blogSimple.php" method="POST">
<input type="hidden" name='idOfArticle'  value='<?php echo $row['id']?>'>
<button  class='button' type='submit'><span> See more</span> </button>
</form>
<?php }}
  }else{
    // Display all The articles 
    // Retrieve selected results from database and display them on page
    $resultVisiteur =  $articleVisiteur->getArticlesLimit($this_page_first_result,$results_per_page);   
    // Display  all the articles 
    while ($row = $resultVisiteur->fetch()) {
      // Display  the image of the Article
      if ($image =  $articleVisiteur->getArticlesImage($row['id'])) {
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
      if ($cat =  $articleVisiteur->getArticlesCategorie($row['id'])) {
        while ($rowCat = $cat->fetch()) {
          ?>
              <h2><?php echo $rowCat['categorie'];?></h2>
              <?php
      }
    }
    ?>
<form action="./blogSimple.php" method="POST">
<input type="hidden" name='idOfArticle'  value='<?php echo $row['id']?>'>
<button class='button' type='submit'><span> See more</span></button>
</form>

<?php
}
// Display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="allBlogs.php?page=' . $page . '">' . $page . '</a> ';
} 
}

?>
</div>
</body>
</html>
