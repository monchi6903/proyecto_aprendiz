import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/css/estilos.css',
                'resources/css/estilosPlantilla.css',
                'resources/css/inicio_sesion.css',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});