const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                poppins: "Poppins",
            },
            colors: {
                primary: "#353533",
                second: "#cfa380",
                third: "#a25d34",
                blue: {
                    101: "#3b3c5a",
                    102: "rgba(53, 53, 51,0.8)",
                },
                orange: {
                    101: "#faa65e",
                },
            },
            height: {
                300: "300px",
            },
            width: {
                30: "30rem",
                300: "300px",
            },
            zIndex: {
                999: "999",
            },
            spacing: {
                "7%": "7%",
                15: "5%",
                130: "30rem",
            },
            backgroundImage: {
                gambar: "url('/img/bg2.jpg')",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
