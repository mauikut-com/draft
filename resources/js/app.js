import './bootstrap';

import { registerSW } from 'virtual:pwa-register';

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

// --- Hash-based router ---
const routes = {
    '#/login': () => import('./pages/login.js'),
    '#/home': () => import('./pages/home.js'),
};

async function navigate() {
    const hash = location.hash || '#/login';
    const loader = routes[hash];

    if (!loader) {
        location.hash = '#/login';
        return;
    }

    const container = document.getElementById('app');
    container.classList.add('page-exit');

    // Wait for exit animation
    await new Promise((r) => setTimeout(r, 150));

    const page = await loader();
    container.classList.remove('page-exit');
    container.classList.add('page-enter');
    page.render(container);

    // Clean up enter class after animation
    setTimeout(() => container.classList.remove('page-enter'), 300);
}

window.addEventListener('hashchange', navigate);

// Initial route on page load
if (!location.hash) {
    location.hash = '#/login';
} else {
    navigate();
}
