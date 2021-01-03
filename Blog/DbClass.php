<?php 
   class  DbClass{
    public $connexion;
    public function __construct()
    {
    $this->connexion = new PDO("mysql:host=localhost;dbname=BlogTest", "Mersad","rcACWvGyWVICvYja");
    }

   } 