const modalBox = $("#modalBox");
const cancelBoxButton = $("#modalBoxCancel");
const deleteboxButton = $("#modalBoxDelete");
const deleteButton = $("#deleteButton");

deleteButton.on("click", (e) => {
  e.stopPropagation();
  if (modalBox.hasClass("hidden")) {
    modalBox.removeClass("hidden");
  } else {
    modalBox.addClass("hidden");
  }
});

cancelBoxButton.on("click", (e) => {
  modalBox.addClass("hidden");
});

$(document).on("click", (e) => {
  modalBox.addClass("hidden");
});

// flash data function
// const messageBox = document.getElementById("messageBox");
// const closeButton = document.getElementById("closeButton");

// closeButton.addEventListener("click", function () {
//   messageBox.classList.add("hidden");
// });
// setTimeout(function () {
//   messageBox.classList.add("opacity-0");
//   setTimeout(function () {
//     messageBox.classList.add("hidden");
//   }, 500);
// }, 5000);
