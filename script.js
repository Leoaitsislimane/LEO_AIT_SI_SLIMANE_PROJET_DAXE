function playSound() {
  let audio = document.getElementById("myAudio");
  audio.play();
}

const monTitre = document.getElementById("share");

monTitre.addEventListener("mouseover", function () {
  monTitre.style.color = "black";
});

monTitre.addEventListener("mouseout", function () {
  monTitre.style.color = "dimgray";
});

const modal = document.querySelector("#myModal");
const btn = document.querySelector("#card");
const span = document.querySelector(".close");

const openModal = () => (modal.style.display = "block");
const closeModal = () => (modal.style.display = "none");
const clickOutside = (event) => (event.target == modal ? closeModal() : null);

btn.addEventListener("click", openModal);
span.addEventListener("click", closeModal);
window.addEventListener("click", clickOutside);
