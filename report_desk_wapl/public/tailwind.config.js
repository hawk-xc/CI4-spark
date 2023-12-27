/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../app/Views/**/*.php"],
  theme: {
    extend: {
      display: ["group-focus"],
      colors: {
        "custom-red": "#B80000",
      },
    },
  },
  plugins: [],
  darkMode: "class",
};
