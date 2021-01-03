<?php
require_once '../recaptcha/autoload.php';
if(isset($_POST['submitComment'])){
if(isset($_POST['g-recaptcha-response'])){


    $recaptcha = new \ReCaptcha\ReCaptcha('6Lc8TAoaAAAAAG-cY2J6RPdrIetH_o6eeLFARihx');
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'] );
    if ($resp->isSuccess()) {
echo"Captcha valide "    ;
} else {
        $errors = $resp->getErrorCodes();
echo"Captcha non valide "    ;
    }
}else{
   echo 'captcha non valide';
}}
?>
<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form  method="POST">
      <div class="g-recaptcha" data-sitekey="6Lc8TAoaAAAAACEZWV82OsB9JsIHcayvg5WRHXZZ"></div>
      <br/>
      <input type="submit" value="Submit" name='submitComment'>
    </form>
  </body>
</html>
