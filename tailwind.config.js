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
        },
        animation: {
          'slide-in-left': 'slide-in-left 0.8s ease-out forwards',
        },
      },
    },

    

    plugins: [forms],
};
