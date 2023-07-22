/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: '138px',
        },
        extend: {
            colors: {
                putih: '#FFFFFF',
                abu: '#747474',
                hijau: '#479E10',
                hijauTua: '#35770C',
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                roboto: ['Roboto', 'sans-serif'],
            },
        }
    },
    plugins: [],
}

