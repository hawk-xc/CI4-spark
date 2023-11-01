const msgBox = document.getElementById("messageBox");
const closeBtn = document.getElementById("closeButton");

closeBtn.addEventListener("click", function () {
  msgBox.classList.add("hidden");
});
