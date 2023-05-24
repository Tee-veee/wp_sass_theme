let hamburger = document.querySelector(".hamburger.hamburger__close");
let menu = document.querySelector(".menu.menu__close");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("open");
  menu.classList.toggle("open");
});
