<?php
require_once '../DbClass.php';
class image extends DbClass{
   
    // To add a new Image
    public function addImage($imageName) {
     $stmt = $this->connexion->prepare('INSERT INTO image(image) VALUES (?)');
        $stmt->execute([$imageName]);
    }
    // To get all Images
    public function getAllImages() {
        $results = $this->connexion->query('SELECT * FROM `image`');
        return $results;
    }
    // To get a image by id
    public function getSpecificImages($id) {
        $results = $this->connexion->query('SELECT * FROM `image`WHERE id_image = ' . $id);
        return $results;
    }
    // To Get image by name
    public function getImage($name) {
        $results = $this->connexion->query("SELECT * FROM `image`WHERE image =   '$name'");
        return $results;
    }
// To delet an Image
    public function deleteImage($id) {
        $results = $this->connexion->query('DELETE FROM `image`
        WHERE id_image = ' . $id
        ); 
        $results2 = $this->connexion->query('DELETE FROM `jointure_image_article`
        WHERE id_image = ' . $id);
    } 
}