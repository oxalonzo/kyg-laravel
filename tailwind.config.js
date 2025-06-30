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

        burbujaUno: {
          '0%': { transform: 'translateX(0) translateY(0)' },
          '30%': { transform: 'translateX(-80%) translateY(-80%)' },
          '60%': { transform: 'translateX(60%) translateY(-60%)' },
          '100%': { transform: 'translateX(0) translateY(0)' },
        },
        burbujaDos: {
          '0%': { transform: 'translateX(0) translateY(0)' },
          '30%': { transform: 'translateX(80%) translateY(80%)' },
          '60%': { transform: 'translateX(-60%) translateY(60%)' },
          '100%': { transform: 'translateX(0) translateY(0)' },
        },
        burbujaTres: {
          '0%': { transform: 'translateX(0) translateY(0)' },
          '30%': { transform: 'translateX(50%) translateY(50%)' },
          '60%': { transform: 'translateX(-10%) translateY(10%)' },
          '100%': { transform: 'translateX(0) translateY(0)' },
        },

        burbujaCuatro: {
          '0%': { transform: 'translateX(0) translateY(0)' },
          '30%': { transform: 'translateX(-90%) translateY(-90%)' },
          '60%': { transform: 'translateX(90%) translateY(-90%)' },
          '100%': { transform: 'translateX(0) translateY(0)' },
        },

        burbujaCinco: {
          '0%': { transform: 'translateX(0) translateY(0)' },
          '30%': { transform: 'translateX(67%) translateY(67%)' },
          '60%': { transform: 'translateX(-67%) translateY(67%)' },
          '100%': { transform: 'translateX(0) translateY(0)' },
        },

        brandcircle: {
          '0%': { transform: 'translateY(500px) rotate(0deg)' },
          '100%': { transform: 'translateY(500px) rotate(360deg)' },
        },

        callicon: {
          '0%': { transform: 'translateX(0)' },
          '25%': { transform: 'translateX(-2px)' },
          ' 50%': { transform: 'translateX(2px)' },
          '75%': { transform: 'translateX(-2px)' },
          '100%': { transform: 'translateX(0)' },
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
        'burbuja-uno': 'burbujaUno 30s ease-out infinite',
        'burbuja-dos': 'burbujaDos 30s ease-out infinite',
        'burbuja-tres': 'burbujaTres 30s ease-out infinite',
        'burbuja-cuatro': 'burbujaCuatro 30s ease-out infinite',
        'burbuja-cinco': 'burbujaCinco 30s ease-out infinite',
        'brand-circle': 'brandcircle 40s linear infinite',
        'call-icon': 'callicon 0.3s ease-in-out',
      },

    },
  },



  plugins: [forms],
};
