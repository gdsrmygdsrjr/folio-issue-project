import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    safelist: [
        'max-w-xl',
        'sm:max-w-xl',
        'md:max-w-xl',
        'lg:max-w-xl',
        'max-w-2xl',
        'sm:max-w-2xl',
        'md:max-w-2xl',
        'lg:max-w-2xl',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
};
