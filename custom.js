//searchappearance

let serbtn = document.querySelector('#search-btn');
let serform = document.querySelector('.search-form');

serbtn.onclick=function(){
    serform.classList.toggle('seractive');
}

//shoppingcart

var togglebtn = document.querySelector(".fa-shopping-cart");
var closebtn = document.querySelector(".close");
var sidebar = document.querySelector(".shopping-cart");
var opback = document.querySelectorAll("section");
var opaback= document.querySelector(".header");

togglebtn.onclick= function(){
    sidebar.classList.add('show-sidebar');
}

closebtn.onclick=function(){
    sidebar.classList.remove('show-sidebar');
    
}

//loginappearance

let logn = document.querySelector('.dropdown');
let lognbtn = document.querySelector('#login-btn');

lognbtn.onclick=function(){
   if (logn.style.display === "none") {
      logn.style.display = "block";
    } else {
      logn.style.display = "none";
    }
   
}





