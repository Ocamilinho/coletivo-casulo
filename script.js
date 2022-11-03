window.onscroll = function() {myFunction()};

var header = document.getElementById("header");
var sticky = header.offsetTop;

var d1 = document.getElementById("d1");

function myFunction() {
    if (window.pageYOffset >= sticky) {
      header.classList.add("sticky")
    } else {
      header.classList.remove("sticky");
    }
  } 

  function handleMenu(){
    var menu = document.getElementById('menu');
    if(menu.style.display == 'flex'){
      menu.style.display = 'none';
    }else{
      menu.style.display = 'flex';
    }
    }