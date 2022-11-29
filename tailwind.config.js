/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    purge: [
        './public/**/*.html',
        './src/**/*.{js,jsx,ts,tsx,vue}',
    ],
    content: ['./view/user/**/*.{html,js,php}'],
    theme: {
        extend: {
            height: {
                Custom: '620px',
            },
            spacing: {
                '40-c': '40rem',
            },
        },
    },
    plugins: [],
};
