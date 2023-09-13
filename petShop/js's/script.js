const nav = document.querySelector(".nav-list")
var onMenu = 0

function menuShow(){
    if(onMenu == 0){
        nav.classList.remove('responsivo')
        onMenu = 1
    }else{
        nav.classList.add('responsivo')
        onMenu = 0
    }
}