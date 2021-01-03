// This is to show password
var showPassword= document.querySelector('#showPassword')
showPassword.addEventListener('click',showPass);
function showPass() {
    var x = document.querySelector(".myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  } 