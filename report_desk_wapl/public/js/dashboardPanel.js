const navPanel = $("#right_panel");
const hamburgerIcon = $("#hamburgerIcon");

hamburgerIcon.on("click", (e) => {
  e.stopPropagation();
  if (navPanel.hasClass("max-sm:-translate-x-52")) {
    navPanel.removeClass("max-sm:-translate-x-52");
  } else {
    navPanel.addClass("max-sm:-translate-x-52");
  }
  // console.log("hello");
});

$(document).on("click", (e) => {
  navPanel.addClass("max-sm:-translate-x-52");
});
