const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        colors: {
            ...colors,
            black: '#0c0c0c',
            blue: {
                ...colors.blue,
                '500' : '#1268FB',
            },
            gray: {
                '50': '#f3f3f3',
                '100': '#e2e8f0',
                '500': '#3d3d3d',
                '600': '#303030',
                '700': '#242424',
                '800': '#181818',
                '900': '#0C0C0C'
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
