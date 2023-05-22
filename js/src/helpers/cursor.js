let cursor = document.getElementById("cursor-follow");
const links = document.querySelectorAll("a");

document.addEventListener("mousemove", function (e) {
  let x = e.clientX;
  let y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
});

links.forEach((link) => {
  link.addEventListener("mouseenter", () => {
    cursor.style.opacity = "0";
    link.style.cursor = "pointer";
  });

  link.addEventListener("mouseleave", () => {
    cursor.style.opacity = "1";
    link.style.cursor = "auto";
  });
});
