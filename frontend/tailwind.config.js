/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
    './node_modules/tw-elements/dist/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#418C8F',
      },
    },
    screens: {
      'maxmd': {'max': '800px'},
      'fhd': { 'max': '1080px' },
      'hd': { 'max': '720px' },
      'xs': { 'max': '480px' },
      'xxs': { 'max': '360px' },
      'xxxs': { 'max': '240px' },
      'sm': '576px',
      // => @media (min-width: 576px) { ... }

      'md': '800px',
      // => @media (min-width: 960px) { ... }

      'lg': '1440px',
      // => @media (min-width: 1440px) { ... }
    }
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
}