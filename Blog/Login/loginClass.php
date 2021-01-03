<?php
 require '../DbClass.php';
class login extends DbClass{
  
    //Insert to db the new register user;
    public function addUser($user,$userMdp) {
        $stmt = $this->connexion->prepare('INSERT INTO userBlog (user,user_mdp)
        VALUES (?,?)');
        $stmt->execute([$user,$userMdp]);
    }
    //Select the user from db to see if exists or not;
    public function getAllUsers($colone,$user) {
        $results = $this->connexion->query('SELECT '.$colone. ' FROM userBlog where user="' . $user.'"');
       return  $results;
    }
}