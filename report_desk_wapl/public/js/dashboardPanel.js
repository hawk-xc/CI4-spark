const hamburgerMenu = document.getElementById("hamburgerMenu");
const navPanel = document.getElementById("right_panel");
const hamburderIcon = document.querySelector("i[name=hamburgerIcon]");
const toolPanel = document.getElementById("toolPanel");
const searchBox = document.getElementById("searchBox");
const userBox = document.getElementById("userBox");

window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    toolPanel.classList.replace("md:py-4", "md:py-1");
    toolPanel.classList.add("bg-opacity-30", "backdrop-blur-sm");
    searchBox.classList.replace("md:scale-100", "md:scale-[70%]");
    userBox.classList.replace("md:scale-100", "md:scale-[70%]");
  } else {
    toolPanel.classList.replace("md:py-1", "md:py-4");
    toolPanel.classList.remove("bg-opacity-30", "backdrop-blur-sm");
    searchBox.classList.replace("md:scale-[70%]", "md:scale-100");
    userBox.classList.replace("md:scale-[70%]", "md:scale-100");
  }
});

hamburgerMenu.addEventListener("click", function () {
  navPanel.classList.toggle("max-sm:-translate-x-52");
});
