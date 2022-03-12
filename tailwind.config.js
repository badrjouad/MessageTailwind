const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
module.exports = {
  
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}