import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/debug.css",
                "resources/css/admin-dashboard.css",
                "resources/css/footer.css",
                "resources/css/header.css",
                "resources/css/login.css",
                "resources/css/register.css",
                "resources/css/user-dashboard.css",
                "resources/js/app.js",
                "resources/js/user-dashboard.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
