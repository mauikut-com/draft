<script>
    let notificationCount = 3;

    function handleLogout() {
        location.hash = '#/login';
    }
</script>

<header class="app-header">
    <span class="app-header-title">App</span>
    <div class="app-header-actions">
        <button id="btn-notifications" class="btn-notification" type="button" aria-label="Notifications">
            <svg class="bell-icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
            </svg>
            {#if notificationCount > 0}
                <span class="notification-badge">{notificationCount}</span>
            {/if}
        </button>
        <button id="btn-logout" class="btn-logout" type="button" aria-label="Logout" onclick={handleLogout}>
            <svg class="logout-icon" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                <polyline points="16 17 21 12 16 7"/>
                <line x1="21" y1="12" x2="9" y2="12"/>
            </svg>
        </button>
    </div>
</header>

<style>
    .app-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.875rem 1.25rem;
        background: rgba(255, 255, 255, 0.03);
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        backdrop-filter: blur(16px);
        position: sticky;
        top: 0;
        z-index: 50;
    }

    .app-header-title {
        font-size: 1.125rem;
        font-weight: 600;
        letter-spacing: -0.01em;
        color: #f4f4f5;
    }

    .app-header-actions {
        display: flex;
        align-items: center;
        gap: 0.25rem;
    }

    .btn-notification {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border: none;
        border-radius: 0.625rem;
        background: transparent;
        color: #a1a1aa;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-notification:hover {
        background: rgba(255, 255, 255, 0.06);
        color: #e4e4e7;
    }

    .bell-icon {
        display: block;
    }

    .notification-badge {
        position: absolute;
        top: 4px;
        right: 4px;
        min-width: 18px;
        height: 18px;
        padding: 0 5px;
        border-radius: 9px;
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: #fff;
        font-size: 0.6875rem;
        font-weight: 700;
        line-height: 18px;
        text-align: center;
        box-shadow: 0 0 0 2px #0f0f14;
        animation: badgePop 0.3s ease 0.4s both;
    }

    @keyframes badgePop {
        from { transform: scale(0); }
        60% { transform: scale(1.2); }
        to { transform: scale(1); }
    }

    .btn-logout {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border: none;
        border-radius: 0.625rem;
        background: transparent;
        color: #a1a1aa;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-logout:hover {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
    }

    .logout-icon {
        display: block;
    }
</style>
