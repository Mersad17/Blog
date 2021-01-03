<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='../tinymce/tinymce.min.js'></script>  <script>tinymce.init({ selector:'#tinymceDescriptionLong' ,
height:350,
    plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
    imagetools_cors_hosts: ['picsum.photos'],
    menubar: 'file edit view insert format tools table help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    toolbar_sticky: true,
    autosave_ask_before_unload: true,
    autosave_interval: "30s",
    autosave_prefix: "{path}{query}-{id}-",
    autosave_restore_when_empty: false,
    autosave_retention: "2m",
    image_advtab: true,
   
});</script>
<link rel="stylesheet" type="text/css" href="../Css/topNav.css">
<link rel="stylesheet" type="text/css" href="../Css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <title>Article Admin</title>
    </head>
    <body>
    <div class="topnav" id="myTopnav">
      <a href="http://localhost/Blog/articleAdmin/indexArticleAdmin.php" >Articles</a>
      <a href="http://localhost/Blog/categorie/indexCategorie.php" >Categories</a>
      <a href="http://localhost/Blog/photo/indexImage.php">Images</a>
      <a href="http://localhost/Blog/Login/logOut.php">Log Out</a>
      <a  class="icon">
        <i class="fa fa-bars"></i>
      </a>
    </div>