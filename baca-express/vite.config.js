import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/js/FormulaireRecherche.js','resources/js/Menuhamburger.js','resources/js/FormulaireReserveJquery.js'],
            refresh: true, 
        }),
    ],
});
