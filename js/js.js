function menu(){
    nav = document.getElementById("navigation");
    if(nav.style.left != "0px"){
        nav.style.left = "0px"
    }else{
        nav.style.left = "-300px"
    }
}
function clanek(num){
    for(i=0; i<3; i++){
        document.getElementById('clanek_'+i).style.display = "none";
    }
    document.getElementById('clanek_'+num).style.display = "block";
}
function kalendarTtile(td){
    document.getElementById('kalendarInner').innerHTML = td.title;
}