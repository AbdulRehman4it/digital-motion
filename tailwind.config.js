/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ './build/**/*.{html,js,php}',],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}