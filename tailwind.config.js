/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./front/**/*.php"
  ],
  theme: {
    extend: { 
      fontFamily: {
        principale : ["Lexend", "sans-serif"]
      }
    },
  },
  plugins: [],
}

