let openDropdown = null;

document.addEventListener("DOMContentLoaded", function () {
  for (let i = 1; i <= 1000000; i++) {
    const menuButton = document.getElementById("menu-button" + i);
    const menu = document.getElementById("menu-button-menu" + i);

    if (menuButton && menu) {
      menuButton.addEventListener("click", function (event) {
        if (openDropdown !== menu) {
          if (openDropdown) {
            openDropdown.classList.add("hidden");
          }
          event.stopPropagation();
          menu.classList.remove("hidden");
          openDropdown = menu;
        } else {
          menu.classList.add("hidden");
          openDropdown = null;
        }
      });

      document.addEventListener("click", function () {
        if (openDropdown) {
          openDropdown.classList.add("hidden");
          openDropdown = null;
        }
      });

      menu.addEventListener("click", function (event) {
        event.stopPropagation();
      });
    }
  }
});
