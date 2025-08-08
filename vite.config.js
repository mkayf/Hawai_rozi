import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/authStyle.css', 'resources/js/app.js', 'resources/js/authValidation.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
