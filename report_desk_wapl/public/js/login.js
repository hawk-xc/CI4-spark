const passwd_field = document.getElementById("password_field");
const passwd_toggle = document.getElementById("show_pass_toggle");

passwd_field.addEventListener("input", function () {
  if (passwd_field.value == "") {
    passwd_toggle.classList.add("hidden");
  } else {
    passwd_toggle.classList.remove("hidden");
  }
});

passwd_toggle.addEventListener("click", function () {
  if (passwd_toggle.classList.contains("ri-eye-off-line")) {
    passwd_toggle.classList.replace("ri-eye-off-line", "ri-eye-line");
    passwd_field.setAttribute("type", "text");
  } else {
    passwd_toggle.classList.replace("ri-eye-line", "ri-eye-off-line");
    passwd_field.setAttribute("type", "password");
  }
});
