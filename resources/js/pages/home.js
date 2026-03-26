export function render(container) {
    const notificationCount = 3;

    container.innerHTML = `
        <header class="app-header">
            <span class="app-header-title">App</span>
            <button id="btn-notifications" class="btn-notification" type="button" aria-label="Notifications">
                <svg class="bell-icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                </svg>
                ${notificationCount > 0 ? `<span class="notification-badge">${notificationCount}</span>` : ''}
            </button>
        </header>
    `;
}
