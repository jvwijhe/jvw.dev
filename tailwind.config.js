const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        colors: {
            ...colors,
            black: '#0c0c0c',
            gray: {
                '100': '#e2e8f0',
                '200': '#e2e8f0',
                '900': '#111111'
            }
        },
        extend: {
            fontFamily: {
                // sans: ['Roboto', ...defaultTheme.fontFamily.sans],
                'heading': ['Asap', ...defaultTheme.fontFamily.sans],
                // 'h1': ['Asap'],
                'body': ['Roboto']
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
