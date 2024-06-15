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
        // web
        'rb-blue': '#11263f',
        'rb-blue-light': '#005c99',
        'rb-blue-light-hover': '#002e4d',
        'rb-blue-line': '#19375a',
        'rb-sky-light': '#459ac9',
        'rb-sky-light-hover': '#2c7096',
        'rb-green-light': '#bef908',

        // dashboard
        'rb-green': '#003f22',
        'rb-green-dark': '#06361f',
        'rb-green-light-extra': '#daead8',
        'rb-yellow-dark': '#d2dc78',
        'rb-yellow-light': '#f7f6ed',
        'rb-yellow-light-border': '#e9e8dd',
        'rb-yellow-light-back': '#fffef7',
        'rb-peach': '#ffc9a1',
      },
      screens: {
        'xs': '425px',
        '3xl': '1600px',
      },
    }
  },
  plugins: [],
}

