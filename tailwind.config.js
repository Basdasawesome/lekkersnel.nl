/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './public/**/*.{html,js,php}',
    './resources/**/*.{html,js,php}',
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#7DCE5C',
        'secondary': '#292929',
        'dark': '#1D1D1B',
        'background': '#ECF1F4',
        'text': '#f8fafc'
      },
    },
  },
  plugins: [],
}