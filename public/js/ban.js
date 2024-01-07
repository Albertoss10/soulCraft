function abrirModal(src) {
    var modal = document.getElementById("miModal");
    var modalImg = document.getElementById("img01");
    var container = document.querySelector(".container");

    modal.style.display = "block";
    modalImg.src = src;
    container.classList.add("container-hide");
}

function cerrarModal() {
    var modal = document.getElementById("miModal");
    var container = document.querySelector(".container");

    modal.style.display = "none";
    container.classList.remove("container-hide");
}
