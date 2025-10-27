/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#179BA1',
        'secondary': '#8DCFD4',
      }
    },
  },
  plugins: [],
}
