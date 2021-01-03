<?php
// If isn't Loged in the direct to Login Form
session_start();
if(!isset($_SESSION['loginName'])):
    header('location:indexLogin.php');
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yess</title>
</head>
<body>

   <h1>Hi there <?php echo $_SESSION['loginName'] ?></h1> 
   <form action="logOut.php" >
   <button type='submit'>Log Out</button>
   
   </form>
    
</body>
</html>