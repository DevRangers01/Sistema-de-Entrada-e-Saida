import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/entradaesaida.css', 'resources/css/editar.css','resources/js/app.js', 'resources/js/entradaesaida.js', 'funcoes.css', 'vizualizar.css', 'editar.css', 'adicionar.css'],
            refresh: true,
        }),
    ],
});
