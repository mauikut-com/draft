<script>
    function handleLogin() {
        location.hash = '#/home';
    }
</script>

<div class="login-page">
    <div class="login-card">
        <div class="login-logo">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="48" height="48" rx="12" fill="url(#logo-grad)"/>
                <path d="M14 24L22 32L34 16" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <defs>
                    <linearGradient id="logo-grad" x1="0" y1="0" x2="48" y2="48">
                        <stop stop-color="#6366f1"/>
                        <stop offset="1" stop-color="#8b5cf6"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <h1 class="login-title">Welcome to App</h1>
        <p class="login-subtitle">Sign in to continue</p>
        <button id="btn-login" class="btn-google" type="button" onclick={handleLogin}>
            <svg class="google-icon" viewBox="0 0 24 24" width="20" height="20">
                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/>
                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
            Sign in with Google
        </button>
    </div>
</div>

<style>
    .login-page {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100dvh;
        background:
            radial-gradient(ellipse at 50% 0%, rgba(99, 102, 241, 0.12) 0%, transparent 60%),
            #0f0f14;
        padding: 1.5rem;
    }

    .login-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
        padding: 2.5rem 2rem;
        border-radius: 1.25rem;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
        backdrop-filter: blur(24px);
        width: 100%;
        max-width: 380px;
        animation: cardEntrance 0.5s ease forwards;
    }

    @keyframes cardEntrance {
        from {
            opacity: 0;
            transform: translateY(20px) scale(0.97);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .login-logo {
        margin-bottom: 0.5rem;
    }

    .login-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #f4f4f5;
        letter-spacing: -0.02em;
    }

    .login-subtitle {
        font-size: 0.875rem;
        color: #71717a;
        margin-bottom: 0.75rem;
    }

    .btn-google {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 1.5rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 0.75rem;
        background: rgba(255, 255, 255, 0.06);
        color: #e4e4e7;
        font-family: inherit;
        font-size: 0.9375rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
        width: 100%;
        justify-content: center;
    }

    .btn-google:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.18);
        transform: translateY(-1px);
        box-shadow: 0 4px 16px rgba(99, 102, 241, 0.15);
    }

    .btn-google:active {
        transform: translateY(0);
    }

    .google-icon {
        flex-shrink: 0;
    }
</style>
