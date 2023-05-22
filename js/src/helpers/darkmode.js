const btn = document.getElementById("dark-mode-toggle-btn");
const body = document.body;
const header = document.getElementById("header");
const preferenceQuery = window.matchMedia("(prefers-color-scheme: dark)");
let lastScrollTop = 0;
let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

window.addEventListener("scroll", function () {
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
});

const addDarkMode = () => {
  console.log(scrollTop);
  if (scrollTop === 0) {
    header.classList.add("transparent-background");
    header.classList.remove("light-mode");
    header.classList.add("dark-mode");
    body.classList.remove("light-mode");
    body.classList.add("dark-mode");
  } else {
    header.classList.remove("transparent-background");
    body.classList.remove("light-mode");
    body.classList.add("dark-mode");
    header.classList.remove("light-mode");
    header.classList.add("dark-mode");
  }
};

const addLightMode = () => {
  console.log(scrollTop);
  if (scrollTop === 0) {
    header.classList.add("transparent-background");
    header.classList.remove("dark-mode");
    header.classList.add("light-mode");
    body.classList.remove("dark-mode");
    body.classList.add("light-mode");
  } else {
    header.classList.remove("transparent-background");
    body.classList.remove("dark-mode");
    body.classList.add("light-mode");
    header.classList.remove("dark-mode");
    header.classList.add("light-mode");
  }
};

const toggleTheme = () =>
  !body.classList.contains("dark-mode") ? addDarkMode() : addLightMode();

const checkPreference = () =>
  preferenceQuery.matches ? addDarkMode() : addLightMode();

btn.addEventListener("click", toggleTheme);
preferenceQuery.addEventListener("change", checkPreference);

document.addEventListener("DOMContentLoaded", function () {
  checkPreference();
});
