import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        vue(),
        laravel({
            input: ['resources/sass/app.scss','resources/scss/shop/theme.scss','resources/scss/shop/libs.scss', 'resources/js/app.js', 'resources/js/shop.js', 'resources/js/theme.js' ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
          output: {
            entryFileNames: `assets/[name].js`,
            chunkFileNames: `assets/[name].js`,
            assetFileNames: `assets/[name].[ext]`
          }
        }
       },
    css: {
        preprocessorOptions: {
          scss: {
            additionalData: ` @import "resources/scss/config/config.scss";`
          }
        }
      }
});
