/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        './node_modules/tw-elements/dist/js/**/*.js',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                'color-primary': '#2129EA',
            },
        },
    },
    plugins: [],
}