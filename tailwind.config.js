import defaultTheme from 'tailwindcss/defaultTheme';
import { addDynamicIconSelectors } from '@iconify/tailwind';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        // Tambahkan direktori lain jika diperlukan
        './src/*.html',  // Pastikan path ini sesuai dengan struktur proyek Anda
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        // Plugin Iconify
        addDynamicIconSelectors(),
    ],
};
