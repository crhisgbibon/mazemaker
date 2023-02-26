/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ './views/**/*.{html,js,ts,pug}' ],
  theme: {
    extend: {
      fontFamily:{
        'courier_prime': ['Courier Prime'],
        'cutive_mono': ['Cutive Mono'],
        'space_mono': ['Space Mono'],
        'ubuntu_mono': ['Ubuntu Mono'],
      }
    },
  },
  plugins: [],
}