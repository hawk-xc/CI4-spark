let openDropdown = null;

document.addEventListener("DOMContentLoaded", function () {
  // Ini buat perulangan nggawe menu Id yang berbeda ben gak podo

  for (let i = 1; i <= 10000; i++) {
    const menuButton = document.getElementById("menu-button" + i);
    const menu = document.getElementById("menu-button-menu" + i);

    menuButton.addEventListener("click", function (event) {
      if (openDropdown !== menu) {
        // hide dropdown
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
        openDropdown.classList.add("hidden"); // Menghilangkan list menu ketika di klik di luar button
        openDropdown = null;
      }
    });

    menu.addEventListener("click", function (event) {
      event.stopPropagation(); //  Mencegah hide ketika meng-klik didalam menu
    });
  }
});
