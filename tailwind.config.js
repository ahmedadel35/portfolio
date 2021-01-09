const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('@tailwindcss/ui/colors')
// const { after } = require('lodash')

module.exports = {
    purge: {
        enabled: process.env.NODE_ENV === 'production',
        mode: 'all',
        preserveHtmlElements: false,
        content: [
            'components/**/*.vue',
            'layouts/**/*.vue',
            'pages/**/*.vue',
            'plugins/**/*.js',
            'nuxt.config.js',
            // TypeScript
            'plugins/**/*.ts',
            'nuxt.config.ts',
        ],
        options: {
            safelist: {
                // standard: ['bg-blue-500', 'bg-red-500'],
                // deep: [/bg-green-500/],
            },
        },
    },

    theme: {
        themeVariants: ['dark', 'green', 'blue'],
        extend: {
            fontFamily: {
                sans: [
                    'Roboto',
                    'Cairo',
                    '-apple-system',
                    'BlinkMacSystemFont',
                    'Segoe UI',
                    ...defaultTheme.fontFamily.sans,
                ],
            },
            colors: {
                teal: colors.teal,
            },
        },
    },

    variants: {
        animation: ['responsive', 'hover'],
        backgroundColor: [
            'disabled',
            'hover',
            'focus',
            'active',
            'dark',
            'dark:hover',
            'dark:focus',
        ],
        backgroundImage: [
            'disabled',
            'dark',
            'dark:hover',
            'dark:focus',
            'responsive',
        ],
        borderColor: [
            'disabled',
            'hover',
            'focus',
            'active',
            'group-hover',
            'dark',
            'dark:hover',
            'dark:focus',
        ],
        boxShadow: [
            'disabled',
            'hover',
            'focus',
            'active',
            'dark',
            'dark:hover',
            'dark:focus',
        ],
        cursor: ['disabled', 'hover'],
        gradientColorStops: [
            'responsive',
            'dark',
            'dark:hover',
            'dark:focus',
            'hover',
            'focus',
        ],
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        outline: ['hover', 'focus', 'disabled'],
        textColor: [
            'hover',
            'disabled',
            'group-hover',
            'dark',
            'dark:hover',
            'dark:focus',
        ],
    },

    plugins: [require('@tailwindcss/ui'), require('tailwindcss-multi-theme')],
}
