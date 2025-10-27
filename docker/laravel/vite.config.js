import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.jsx'],
            refresh: true,
        }),
        react(),
    ],
    base: process.env.VITE_APP_URL ? process.env.VITE_APP_URL + '/' : '/', 
    server: {
        host: true, 
        port: 5173,
        hmr: {
            host: process.env.VITE_APP_URL ? new URL(process.env.VITE_APP_URL).hostname : 'localhost',
        },
        watch: {
            usePolling: true,
        }
    },
    build: {
        outDir: 'public/build',
    },
});