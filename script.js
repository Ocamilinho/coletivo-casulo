window.onscroll = function() {myFunction()};
var navbar = document.getElementById("header");
var d1 = document.getElementById("d1");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    d1.classList.add("none")
  }
}