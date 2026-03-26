<script>
    import { mount, unmount } from 'svelte';
    import Login from './pages/Login.svelte';
    import Home from './pages/Home.svelte';

    const routes = {
        '#/login': Login,
        '#/home': Home,
    };

    let currentRoute = $state(location.hash || '#/login');
    let currentComponent = $state(null);
    let containerEl;

    function navigate() {
        const hash = location.hash || '#/login';
        const Component = routes[hash];

        if (!Component) {
            location.hash = '#/login';
            return;
        }

        currentRoute = hash;

        // Destroy previous component
        if (currentComponent) {
            unmount(currentComponent);
            currentComponent = null;
        }

        // Mount new component into the container
        if (containerEl) {
            containerEl.innerHTML = '';
            currentComponent = mount(Component, { target: containerEl });
        }
    }

    $effect(() => {
        window.addEventListener('hashchange', navigate);
        navigate();

        return () => {
            window.removeEventListener('hashchange', navigate);
        };
    });
</script>

<div id="svelte-app" bind:this={containerEl} class="app-container"></div>

<style>
    .app-container {
        min-height: 100dvh;
    }
</style>
