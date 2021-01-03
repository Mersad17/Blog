// This is to open an close the menu icon
var topNavIcon = document.querySelector('.icon')
topNavIcon.addEventListener('click', event => {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += "responsive";
    } else {
      x.className = "topnav";
    }
  })
//This to change the color of selected item in menu
$(function() {
  var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
  $('div.topnav  a').each(function() {
   if (this.href === path) {
    $(this).addClass('active');
   }
  });
 });