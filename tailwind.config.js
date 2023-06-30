/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'library': "url('./public/img/fundo.jpg')"
            },
            fontFamily:{
                condensed: ['Roboto Condensed', 'sans-sefif'],
                belanosima: ['Belanosima', 'serif']
            },
        },
        colors: {
            'zinc-750': '#393940'
        },

    },
    plugins: [],
}

