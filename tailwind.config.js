import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
      extend: {
        fontFamily: {
          'Raleway': ['Raleway', 'sans-serif'], // nombre personalizado
          'Roboto': ['Roboto', 'sans-serif'],
          'Playfair': ['Playfair Display', 'sans-serif'],
        },
        keyframes: {
          'slide-in-left': {
            '0%': {
              opacity: '0',
              transform: 'translateX(-100%)',
            },
            '100%': {
              opacity: '1',
              transform: 'translateX(0)',
            },
          },
           expandHeight1: {
          '0%': { height: '0px' },
          '100%': { height: '150px' },
        },
         expandHeight2: {
          '0%': { width: '0px' },
          '100%': { width: '610px' },
        },
         expandHeight3: {
          '0%': { height: '0px' },
          '100%': { height: '595px' },
        },
         expandHeight4: {
          '0%': { width: '0px' },
          '100%': { width: '542px' },
        },
         expandHeight5: {
          '0%': { height: '0px' },
          '100%': { height: '156px' },
        },
         expandHeight6: {
          '0%': { height: '0px' },
          '100%': { height: '961px' },
        },
         
        },
        animation: {
          'slide-in-left': 'slide-in-left 0.8s ease-out forwards',
          'expand-h1': 'expandHeight1 0.8s ease-in-out forwards',
          'expand-h2': 'expandHeight2 0.8s ease-in-out forwards',
          'expand-h3': 'expandHeight3 0.8s ease-in-out forwards',
          'expand-h4': 'expandHeight4 0.8s ease-in-out forwards',
          'expand-h5': 'expandHeight5 0.8s ease-in-out forwards',
          'expand-h6': 'expandHeight6 1.6s ease-in-out forwards',
        },
         
      },
    },

    

    plugins: [forms],
};
