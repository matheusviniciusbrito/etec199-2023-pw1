const image = document.querySelector(".image-alternate")
const button = document.querySelector(".sub")
const tela = document.querySelector(".urlImage")

image.addEventListener("click", () => {
    tela.classList.toggle("none")
})
