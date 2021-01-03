<?php 
session_start();
session_destroy();

header('location: ../blogArticleVisiteur.php/allBlogs.php');