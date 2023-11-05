const colors=require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors:{
        ...colors,
        custom1:'#06202a',
        custom :'#134e4a'
      },
    extend: {
        fontFamily: {
            sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            Roboto: ['Roboto' , ' sans-serif' ],
            Raleway: ['Raleway' , ' sans-serif'],
            popin:['Poppins', 'sans-serif']
        },
    },
},

  plugins: [
    require('flowbite/plugin')
  ],
}

