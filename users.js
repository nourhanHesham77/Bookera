const searchbar = document.querySelector(".users .search input"),
searchbtn = document.querySelector(".users .search button"),
userslist = document.querySelector(".users .users-list");

searchbtn.onclick= ()=>{
searchbar.classList.toggle("act");
searchbar.focus();
searchbtn.classList.toggle("act");
}


searchbar.onkeyup = ()=>{
    let searchterm = searchbar.value;
    
        let rm = new XMLHttpRequest();
if(searchterm != ""){
    searchbar.classList.add("act");
    searchbtn.classList.add("act");
}else{
    searchbar.classList.remove("act");
    searchbtn.classList.remove("act");
}
        rm.open("POST","functions/search.php",true);
        rm.onload = ()=>{
    if(rm.readyState === XMLHttpRequest.DONE){
        if(rm.status === 200){
    let data = rm.response;
    userslist.innerHTML=data;
        }
    }
        }
        rm.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        rm.send("searchterm="+searchterm);
    }


setInterval(() => {
    let rm = new XMLHttpRequest();

    rm.open("GET","functions/account.php",true);
    rm.onload = ()=>{
if(rm.readyState === XMLHttpRequest.DONE){
    if(rm.status === 200){
let data = rm.response;

if(!searchbar.classList.contains("act")){
    userslist.innerHTML=data;
}

    }
}
    }
    rm.send();
}, 500);