<?php
require '../DbClass.php';
class Article extends DbClass{
    //ADD an Article
    public function addArticle( $articleNewName,$articleAuteur,$articleDCourt, $articleDLong) {
        $stmt = $this->connexion->prepare('INSERT INTO article (`Titre`,`Auteur`,`Description_courte`,`Description_longue`)
        VALUES (?,?,?,?)');
        $stmt->execute([$articleNewName,$articleAuteur,$articleDCourt, $articleDLong]);
        return $this->connexion->lastInsertId();
    }
    //  ADD to table jointure_article_categorie the new categorie  
    public function addArticleCategorie( $categorie,$article) {
        $stmt = $this->connexion->prepare('INSERT INTO jointure_article_categorie (id_categorie, id_article) 
        VALUES (?,?)');
        $stmt->execute([ $categorie,$article]);
    }
    //  Select specific table jointure_image_article  to see if already exists 
    public function selectArticleImage( $image,$article) {
    $selectArticleImage = $this->connexion->query("SELECT * FROM  jointure_image_article WHERE id_article=$article");
    return $selectArticleImage;
    }
    //Update the table jointure_image_article
    public function updateArticleImage( $image,$article) {
        $updateArticleImage = $this->connexion->query("UPDATE jointure_image_article set id_image =$image WHERE id_article =  $article");
        return $updateArticleImage;
        }
    //ADD image to Article
    public function addArticleImage($image,$article) {
        $addArticleImage = $this->connexion->prepare('INSERT INTO jointure_image_article (id_image, id_article) 
        VALUES (?,?)');
        $addArticleImage->execute([$image,$article]);
    }
    //Get all articles
    public function getAllArticles() {
        $results = $this->connexion->query('SELECT * FROM `article` ORDER BY `article`.`id` DESC');
        return $results;
    }
    //Get article By id
    public function getAllArticleById($id) {
        $results = $this->connexion->query('SELECT * FROM `article` WHERE id = ' . $id);
        return $results;
    }
    //Get Categori By id
    public function getArticlesCategorie($id) {
        $results = $this->connexion->query('SELECT * FROM `categorie` INNER join jointure_article_categorie as jac on categorie.id_categorie=jac.id_categorie INNER join article on jac.id_article=article.id WHERE article.id= '.$id);
        return $results;
    }
    // Get an Image by Id
    public function getArticlesImage($id) {
        $results = $this->connexion->query('SELECT * FROM `image` INNER join jointure_image_article as jia on  image.id_image= jia.id_image INNER join article on jia.id_article=article.id WHERE article.id='.$id);
        return $results;
    }
    // Modify an Article in BDD
    public function setArticleById($id,$articleNewName,$articleAuteur,$articleDCourt, $articleDLong) {
       $results = $this->connexion->query('UPDATE article set Titre="'.$articleNewName.'" ,Auteur="'.$articleAuteur.'" ,Description_courte="'.$articleDCourt.'", Description_longue="'.$articleDLong.'" WHERE id = ' . $id);
    }
    //Delete An Article
    public function deleteArticle($id) {
        $results = $this->connexion->query('DELETE FROM `article`
        WHERE id = ' . $id
        );
    }
    // Delete categorie from table jointure_article_Categorie
    public function deleteJointureCategorie($id) {
        $results = $this->connexion->query('DELETE FROM `jointure_article_categorie`
        WHERE id_categorie = ' . $id);
    }
    // Delete article from table jointure_article_Categorie
    public function deleteJointureArticle($id) {
        $results = $this->connexion->query('DELETE FROM `jointure_article_categorie`
        WHERE id_article = ' . $id);
        $results2 = $this->connexion->query('DELETE FROM `jointure_image_article`
        WHERE id_article = ' . $id);
    }
    //Do a paganition and get a limit of articles for page 
    public function getArticlesLimit($this_page_first_result,$results_per_page) {
        $resultVisiteur = $this->connexion->query("SELECT * FROM `article`ORDER BY `article`.`id` DESC LIMIT 
         $this_page_first_result ,  $results_per_page ");
        return $resultVisiteur;
    }
    // Get all the Articles that has a the selected Categorie 
    public function getArticlesOfCategorie($categorieName) {
        $results = $this->connexion->query("SELECT * FROM `article` INNER join jointure_article_categorie as jac on article.id=jac.id_article  INNER join  categorie on jac.id_categorie=categorie.id_categorie  WHERE categorie.categorie= '$categorieName'");
        return $results;
    }
}