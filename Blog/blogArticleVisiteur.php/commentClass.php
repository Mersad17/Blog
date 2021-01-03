<?php
require_once '../DbClass.php';
class Comment extends DbClass{
    //Add Comment
    public function addComment($nickName,$comment,$id_Article) {
        $stmt = $this->connexion->prepare('INSERT INTO comments (`nickName`,`commentaire`,`id_Article`)
        VALUES (?,?,?)');
        $stmt->execute([$nickName,$comment,$id_Article]);
        

    }
    //See all comment for one Article
    public function getCommentsById($id) {
        $results = $this->connexion->query('SELECT * FROM `comments` WHERE id_Article=  ' . $id);
        return $results;
    }
}