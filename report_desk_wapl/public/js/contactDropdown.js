let openDropdown = null;

document.addEventListener("DOMContentLoaded", function () {
  for (let i = 1; i <= 1000000; i++) {
    const menuButton = document.getElementById("menu-button" + i);
    const menu = document.getElementById("menu-button-menu" + i);
    const icon = document.getElementById("dropDownIcon" + i);

    if (menuButton && menu && icon) {
      menuButton.addEventListener("click", function (event) {
        if (openDropdown !== menu) {
          if (openDropdown) {
            openDropdown.classList.add("hidden");
          }
          event.stopPropagation();
          menu.classList.remove("hidden");
          icon.classList.add("rotate-180");
          openDropdown = menu;
        } else {
          menu.classList.add("hidden");
          icon.classList.remove("rotate-180");
          openDropdown = null;
        }
      });

      document.addEventListener("click", function () {
        if (openDropdown) {
          openDropdown.classList.add("hidden");
          icon.classList.remove("rotate-180");
          openDropdown = null;
        }
      });

      menu.addEventListener("click", function (event) {
        event.stopPropagation();
      });
    }
  }
});
