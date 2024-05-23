/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  'node_modules/preline/dist/*.js',
],
  darkMode:'falsea',
  theme: {
    extend: {},
  },
  plugins: [
    require('preline/plugin'),
  ],
}

