<?php

require_once '../recaptcha/autoload.php';
require './commentClass.php';
//Connetion for Comments 
$commentSimple= new Comment();

if(isset($_POST['submit_comment'])){
        
if(!empty($_POST['nickName'])AND isset($_POST['comment'])){

    if(isset($_POST['g-recaptcha-response'])){

    $recaptcha = new \ReCaptcha\ReCaptcha('6Lc8TAoaAAAAAG-cY2J6RPdrIetH_o6eeLFARihx');
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'] );
    if ($resp->isSuccess()) {
    //The values to enter in the comment dbb like nickName and comment 
    $nickName=htmlspecialchars($_POST['nickName']);
    $comment=htmlspecialchars($_POST['comment']);
    $idArticle=$_POST["idArticle"];
    if(strlen($nickName)<25 ){
        $commentSimple->addComment($nickName, $comment,$idArticle);
    }else{
        echo 'Your name should be less the 25 letters ';
    }
    }else {
        echo"Captcha not valid " ;
        header("location:blogSimple.php?idArticle=".$idArticle);
        exit();
        }};
    }else{
        $idArticle=$_POST["idArticle"];

    echo 'You should complete all';
    }
    header("location:blogSimple.php?idArticle=".$idArticle);
    exit;}


