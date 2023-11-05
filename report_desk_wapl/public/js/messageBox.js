// flash data function
const messageBox = document.getElementById("messageBox");
const closeButton = document.getElementById("closeButton");

closeButton.addEventListener("click", function () {
  messageBox.classList.add("hidden");
});
setTimeout(function () {
  messageBox.classList.add("opacity-0");
  setTimeout(function () {
    messageBox.classList.add("hidden");
  }, 500);
}, 5000);

// confirmBox function
const confirmBox = document.getElementById("confirmBox");
const dropConfirmBox = document.getElementById("dropConfirmBox");
const upConfirmBox = document.getElementById("upConfirmBox");

function confirmBoxAction() {
  confirmBox.classList.toggle("hidden");
}

dropConfirmBox.addEventListener("click", confirmBoxAction);
upConfirmBox.addEventListener("click", confirmBoxAction);
