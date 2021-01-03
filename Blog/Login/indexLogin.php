
<?php 
session_start();
   require 'loginClass.php';
   $register= new login();

   //If Users Registers;
   if(!empty($_POST['registerName'])):
      $registerName=$_POST['registerName'];
      $passwordRegister=$_POST['passwordRegister'];
      //See if User Name exists already in Data Base;
     $resultat = $register->getAllUsers('user',$registerName);
      //If  User Name doesn't exists, insert into Data Base and securise the Password;
      if(!$resultat->fetch()){
         $password_hash=password_hash($passwordRegister, PASSWORD_DEFAULT);
         $register->addUser( $registerName,$password_hash);
         echo "username  ";
      }else{
         //Else send this message;
         echo "username Already Taken";
      }
   endif;

   //If Users Login;
   if(!empty($_POST['loginName'])):
      $loginName=$_POST['loginName'];
      $passwordLogin=$_POST['passwordLogin'];
      //See if User exists already in Data Base;
      $loginId=$register->getAllUsers( 'user', $loginName);
      //If User doesn't exists then send this message;
      if(!$loginId->fetch()){
         echo "<div class='messageLogin'>User is incorrect</div> ";
      }else{
      //If User exists in Data BASE;
      //Get the secured password from the DB  and see if its the same.
      if($unHash = $register->getAllUsers('user_mdp',$loginName)) {;
         while ($row = $unHash->fetch()) {
            $password_hash=$row["user_mdp"];
            //Verify the password User put matches to the secured password in Data Base; 
            if (password_verify($passwordLogin, $password_hash)) {
               //If Password and User Name is Correct Open User Session; 

               $_SESSION['loginName']=$loginName;
               echo "Hello".$loginName;
               header('location: ../articleAdmin/indexArticleAdmin.php');
            } else {
               //If Password is incorrect send this message;
               echo " <div class='messageLogin'>The password is incorrect.</div>";
           }}
   }
       
}
   endif;
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Css/style.css">

    <title>Document</title>
</head>
<body>
<?php
include '../menuVisiteur.php';
?> 
   <div id='backgroundLogin'>

      <!-- Formulaire to Login in  -->
      <div id='loginContainer'>
         
         <form action="indexLogin.php" method="post">
            <h1>Login</h1>
            <div class='articlesInfo'>
               <label for="nom">Name :</label>
               <input type="text" name="loginName" id="loginName" required />
               <label for="mdp">Mot de passe :</label>
               <input type="password" name="passwordLogin"  class='myInput' required />
               <input type="checkbox" id='showPassword'>Show Password
               
               <input type="submit" value="Log In">
            </div>
         </div>
      </form>
      
      <!-- Formulaire to Regist in  -->
      
      <!-- Uncomment This form-->
      <!-- <form action="indexLogin.php" method="post">
         <h1>Register</h1>
         <label for="nom">Name :</label>
         <input type="text" name="registerName" id="registerName" required />
         <label for="mdp">Mot de passe :</label>
         <input type="password" name="passwordRegister" id="passwordRegister" required />
         <input type="submit" value="Connexion">
      </form> -->
      </div>
      <?php
include '../footer.php';