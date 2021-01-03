<?php
require_once '../DbClass.php';
// The Categorie Class 
class categorie extends DbClass{

    // To Add A new Categorie
    public function addCategorie($categorieName) {
    $stmt = $this->connexion->prepare('INSERT INTO categorie (`categorie`)
    VALUES (?)');
    $stmt->execute([$categorieName]);
    }
    // To Get All Categories
    public function getAllCategories() {
        $results = $this->connexion->query('SELECT * FROM categorie');
        return $results;
    }
    // To Modify the categorie
    public function setCategorieById($id,$categorieNom) {
       $results = $this->connexion->query('UPDATE categorie set categorie="'.$categorieNom.'" WHERE id_categorie = ' . $id);
    }
    // To delete the categorie
    public function deleteCategorie($id) {
        $results = $this->connexion->query('DELETE FROM `categorie`
        WHERE id_categorie = ' . $id

        );
        $results2 = $this->connexion->query('DELETE FROM `jointure_article_categorie`
        WHERE id_categorie = ' . $id);
    }
 
}