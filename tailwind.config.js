import defaultModifiers from '@tailwindcss/typography/src/styles';
import colors from 'tailwindcss/colors';
import defaultTheme from 'tailwindcss/defaultTheme';
/** @type {import('tailwindcss').Config} */
export default {
  content: ['./src/**/*.{html,js,svelte,ts}'],
  theme: {
    extend: {
      container: {
        center: true,
      },
      fontFamily: {
				sans: ['Roboto', ...defaultTheme.fontFamily.sans],
        // sans: ['Klarheit Grotesk Medium', ...defaultTheme.fontFamily.sans],
        pf: ['pf-videotext', ...defaultTheme.fontFamily.sans],
			},
      colors: {
        project: {
          green: {
            900: 'rgba(25, 40, 40, 1)',
            800: 'rgba(25, 40, 40, 0.8)',
            700: 'rgba(25, 40, 40, 0.7)',
            600: 'rgba(25, 40, 40, 0.6)',
            500: 'rgba(25, 40, 40, 0.5)',
            400: 'rgba(25, 40, 40, 0.4)',
            300: 'rgba(25, 40, 40, 0.3)',
            200: 'rgba(25, 40, 40, 0.2)',
            100: 'rgba(25, 40, 40, 0.1)',
            50: 'rgba(25, 40, 40, 0.05)',
          },
          white: {
            900: 'rgba(232, 234, 234, 1)',
            800: 'rgba(232, 234, 234, 0.8)',
            700: 'rgba(232, 234, 234, 0.7)',
            600: 'rgba(232, 234, 234, 0.6)',
            500: 'rgba(232, 234, 234, 0.5)',
            400: 'rgba(232, 234, 234, 0.4)',
            300: 'rgba(232, 234, 234, 0.3)',
            200: 'rgba(232, 234, 234, 0.2)',
            100: 'rgba(232, 234, 234, 0.1)',
            50: 'rgba(232, 234, 234, 0.05)',
          }
        }
      }
    },
  },
  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
}

