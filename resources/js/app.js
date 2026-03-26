import './bootstrap';
import { mount } from 'svelte';
import { registerSW } from 'virtual:pwa-register';
import App from './App.svelte';

// --- PWA registration ---
if ('serviceWorker' in navigator) {
    registerSW({
        onNeedRefresh() {
            if (confirm('New content available. Reload?')) {
                location.reload();
            }
        },
        onOfflineReady() {
            console.log('App ready to work offline');
        },
    });
}

// --- Mount Svelte app ---
const app = mount(App, {
    target: document.getElementById('app'),
});

// Set initial route
if (!location.hash) {
    location.hash = '#/login';
}

export default app;
