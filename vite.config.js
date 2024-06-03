import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0',
        // hrm es para que se recargue la pagina automaticamente
        // protocol es para que sepa que es un protocolo de websockets
        hmr: {
            host: 'localhost',
            protocol: 'ws',
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/views/**/*.blade.php'],
            refresh: true,
        }),
    ],
});
