
const learn = document.querySelector('#main')
const exit = document.querySelector('.off')

console.log(learn)


function ranking() {
    setTimeout(irranking,100)
    exit.classList.add('off-locate')
    function irranking(){
        window.location.href = "ranking.php"
    }
}


function perfil() {
    setTimeout(irperfil,100)
    exit.classList.add('off-locate')
    function irperfil(){
        window.location.href = "perfil.php"
    }
}

statistics.addEventListener("click", () => {
    setTimeout(irhome,100)
    exit.classList.add('off-locate')
    function irhome(){
        window.location.href = "statistics.php"
    }
})
function main(){
    setTimeout(ir,100)
    exit.classList.add('off-locate')
    function ir(){
        window.location.href = "main.php"
    }
}





