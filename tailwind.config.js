/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'rb-blue': '#11263f',
        'rb-blue-light': '#005c99',
        'rb-blue-light-hover': '#002e4d',
        'rb-green-light': '#bef908',
      }
    }
  },
  plugins: [],
}

