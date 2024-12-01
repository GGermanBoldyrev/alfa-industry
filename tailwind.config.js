import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                white: "var(--white)",
                whiteDarker: "var(--white-darker)",
                mainBlue: "var(--main-blue)",
                black: "var(--black)",
                blackLighter: "var(--black-lighter)",
                gray: "var(--gray)",
                grayLighter: "var(--gray-lighter)",
            },
            fontFamily: {
                base: "var(--font-family-base)",
            },
            fontSize: {
                decreased2: "var(--font-size-decreased-2)",
                base: "var(--font-size-base)",
                increased2: "var(--font-size-increased-2)",
                increased4: "var(--font-size-increased-4)",
                increased6: "var(--font-size-increased-6)",
                increased8: "var(--font-size-increased-8)",
            },
        },
    },
    plugins: [],
};
