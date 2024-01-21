const form = document.querySelector(".typing-area"),
infield = form.querySelector(".inp"),
sendbtn = form.querySelector("button"),
chatbox = document.querySelector(".chat-box");

form.onsubmit=(e)=>{
    e.preventDefault();
}


sendbtn.onclick = ()=>{
    let rm = new XMLHttpRequest();

    rm.open("POST","functions/add_chat.php",true);
    rm.onload = ()=>{
if(rm.readyState === XMLHttpRequest.DONE){
    if(rm.status === 200){
        infield.value="";
let data = rm.response;



    }
}
    }
    let formdata = new FormData(form);
    rm.send(formdata);
}


setInterval(() => {
    let rm = new XMLHttpRequest();

    rm.open("POST","functions/get_chat.php",true);
    rm.onload = ()=>{
if(rm.readyState === XMLHttpRequest.DONE){
    if(rm.status === 200){
let data = rm.response;
chatbox.innerHTML=data;


    }
}
    }
    let formdata = new FormData(form);
    rm.send(formdata);
}, 500);