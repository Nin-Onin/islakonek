import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const { themeVariants, prefersLight, prefersDark } = require("tailwindcss-theme-variants");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./vendor/mkocansey/bladewind/resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js"

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // colors: {
            //     dark: colors.gray,
            // }
        },
    },

    plugins: [forms,
        // themeVariants({
        //     themes: {
        //         light: {
        //             mediaQuery: prefersLight /* "@media (prefers-color-scheme: light)" */,
        //         },
        //         dark: {
        //             mediaQuery: prefersDark /* "@media (prefers-color-scheme: dark)" */,
        //         },
        //     },
        // }),
        require('flowbite/plugin')

    ],
    darkMode: 'class',
};
