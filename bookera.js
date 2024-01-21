//wordAnime

window.onscroll=function(){
    let content = document.querySelector(".part1");
    let contentPosition = content.getBoundingClientRect().top;
    let screenposition = window.innerHeight;

    if(contentPosition < screenposition){
    content.classList.add('active');  
    }
    else{
        content.classList.remove('active');  
    }



    let conta = document.querySelector(".part2");
    let contePosition = conta.getBoundingClientRect().top;
    let scrposition = window.innerHeight;

    if(contePosition < scrposition){
    conta.classList.add('activee');  
    }
    else{
        conta.classList.remove('activee');  
    }
    

    let conta3 = document.querySelector(".part3");
    let contaposition3 = conta3.getBoundingClientRect().top;
    

    if(contaposition3 < scrposition){
        conta3.classList.add('activee');
    }else{
        conta3.classList.remove('activee');
    }
}


//imgSlider

let thumbnails = document.getElementsByClassName("thumbnail");
let slider = document.getElementById("slider");
let left= document.getElementById("slide-left");
let right = document.getElementById("slide-right");

left.addEventListener("click",() => {
  slider.scrollLeft-=120;
});

right.addEventListener("click",() => {
  slider.scrollLeft+=120;
});


const maxscrollleft= slider.scrollWidth - slider.clientWidth;

function autoplay0(){
if(slider.scrollLeft > (maxscrollleft-1)){
    slider.scrollLeft -=maxscrollleft;
}
else{
    slider.scrollLeft+=1;
}
}

let play= setInterval(autoplay0,50);

for(let x=0;x<thumbnails.length;x++){
thumbnails[x].addEventListener("mouseover",()=>{
    clearInterval(play)
})
thumbnails[x].addEventListener("mouseout",()=>{
    return play = setInterval(autoplay0,50);
})
}

//randomimgAppereance

var myimj = new Array("img/cold.jpg","img/over.jpg","img/dead.jpg","img/serial.jpg","img/swell.jpg","img/daisy.jpg","img/marra.jpg");


var chpic =document.getElementById("mypic");

function changeimg (myimj,chpic){
setInterval(function(){
    var randomimg = Math.floor(Math.random() * myimj.length);
chpic.src= myimj[randomimg];
}, 3000);
}
changeimg (myimj,chpic);


var myimgg = new Array(
"img/eat.jpg","img/hily.jpg",
"img/falcon.jpg" ,"img/libe.jpg",
"img/metro.jpg"
)

var chpicc = document.getElementById("mypic2")

function changeimgg(myimgg,chpicc){

setInterval(function(){
    var randomimgg = Math.floor(Math.random() * myimgg.length);
chpicc.src= myimgg[randomimgg];
},5000);
}

changeimgg (myimgg,chpicc);




//imgSlider

let thumbnails2 = document.getElementsByClassName("thumb");
let slider2 = document.getElementById("slider2");
let left2= document.getElementById("slide-left2");
let right2 = document.getElementById("slide-right2");

left2.addEventListener("click",() => {
  slider2.scrollLeft-=120;
});

right2.addEventListener("click",() => {
  slider2.scrollLeft+=120;
});


const maxscrollleft2= slider2.scrollWidth - slider2.clientWidth;

function autoplay(){
if(slider2.scrollLeft > (maxscrollleft2-1)){
    slider2.scrollLeft -=maxscrollleft2;
}
else{
    slider2.scrollLeft+=1;
}
}

let playtwo= setInterval(autoplay,50);

for(let i=0;i<thumbnails2.length;i++){
thumbnails2[i].addEventListener("mouseover",()=>{
    clearInterval(playtwo)
})
thumbnails2[i].addEventListener("mouseout",()=>{
    return playtwo = setInterval(autoplay,50);
})
}

let thumbnails3 = document.getElementsByClassName("thumbi");
let slider3 = document.getElementById("slider3");
let left3= document.getElementById("slide-left3");
let right3 = document.getElementById("slide-right3");

left3.addEventListener("click",() => {
  slider3.scrollLeft-=120;
});

right3.addEventListener("click",() => {
  slider3.scrollLeft+=120;
});


const maxscrollleft3= slider3.scrollWidth - slider3.clientWidth;

function autoplay3(){
if(slider3.scrollLeft > (maxscrollleft2-1)){
    slider3.scrollLeft -=maxscrollleft2;
}
else{
    slider3.scrollLeft+=1;
}
}

let playthree= setInterval(autoplay3,50);

for(let i=0;i<thumbnails3.length;i++){
thumbnails3[i].addEventListener("mouseover",()=>{
    clearInterval(playthree)
})
thumbnails3[i].addEventListener("mouseout",()=>{
    return playthree = setInterval(autoplay3,50);
})
}


