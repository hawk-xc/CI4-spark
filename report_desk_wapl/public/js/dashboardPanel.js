const hamburgerMenu = document.getElementById("hamburgerMenu");
const navPanel = document.getElementById("right_panel");
const hamburderIcon = document.querySelector("i[name=hamburgerIcon]");

hamburgerMenu.addEventListener("click", function () {
  navPanel.classList.toggle("max-sm:-translate-x-52");
});
