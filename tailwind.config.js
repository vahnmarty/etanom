const defaultTheme = require('tailwindcss/defaultTheme');
import preset from './vendor/filament/support/tailwind.config.preset'
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [preset],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                transparent: 'transparent',
                current: 'currentColor',
                black: colors.black,
                white: colors.white,
                gray: colors.gray,
                emerald: colors.emerald,
                indigo: colors.indigo,
                yellow: colors.yellow,
                'light-green': '#BCE13C',
                'normal-green': '#4CA444',
                'primary-orange': '#ED7D2B',
                'wave-green': '#84ce6b',
                brown: {
                    50: '#fdf8f6',
                    100: '#f2e8e5',
                    200: '#eaddd7',
                    300: '#e0cec7',
                    400: '#d2bab0',
                    500: '#bfa094',
                    600: '#a18072',
                    700: '#977669',
                    800: '#846358',
                    900: '#43302b',
                  },
            },
            backgroundImage: {
                'hero-pattern': "url('/img/hero-2.png')",
            }
        },
    },
};
