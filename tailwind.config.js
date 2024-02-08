/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        container: {
            center: true,
            padding: "9rem",
        },
        extend: {
            gridAutoColumns: {
                "1fr": "minmax(autofit, 1fr)",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
