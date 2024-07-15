/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        colors: {
            primary: '#14b8a6'
        },
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
