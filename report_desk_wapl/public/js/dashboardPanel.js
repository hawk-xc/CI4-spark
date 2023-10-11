const hamburgerMenu = document.getElementById("hamburgerMenu");
const navPanel = document.getElementById("right_panel");

hamburgerMenu.addEventListener("click", function () {
  navPanel.classList.toggle("max-sm:-translate-x-52");
});
