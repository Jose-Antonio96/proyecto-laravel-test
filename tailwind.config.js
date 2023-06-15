const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
          fontFamily: {
            sans: ['Nunito', 'sans-serif'],
            caveat: ['Caveat Brush', 'cursive'],
            mono: ['Roboto Mono', 'monospace'],
            yusei: ['Yusei Magic', 'sans-serif'],
        },
      },

        backgroundImage: {
            images: ["url('.images/beach.png')"],
        },
    },

    plugins: [
        require('@tailwindcss/typography'), 
        require("daisyui"),
        require('flowbite/plugin')
    ], 
    
    
};
