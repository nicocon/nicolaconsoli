<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nicola Consoli')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="site-header">
        <div class="container header-content">
            <a href="{{ route('home') }}" class="logo">
                Nicola Consoli
            </a>

            <button class="menu-toggle" id="menuToggle" type="button" aria-label="Apri menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="nav" id="mainNav">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Chi sono</a>
                <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Progetti</a>
                <a href="{{ route('playground') }}" class="{{ request()->routeIs('playground') ? 'active' : '' }}">Playground</a>
                <a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'active' : '' }}">Contatti</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer reveal">
        <div class="container">
            <p>© {{ date('Y') }} Nicola Consoli. Tutti i diritti riservati.</p>
        </div>
    </footer>

    <button class="scroll-top-btn" id="scrollTopBtn" type="button" aria-label="Torna su">
        ↑
    </button>

    <div class="dev-toast" id="devToast">
        <span class="dev-toast-icon">⌘</span>
        <div>
            <strong>Developer Mode sbloccata</strong>
            <p>Hai trovato il primo easter egg del sito.</p>
        </div>
    </div>

    <div class="dev-bar" id="devBar">
        <div class="container dev-bar-content">
            <span>Developer Mode</span>
            <strong>nicolaconsoli.it / building in progress</strong>
            <button type="button" id="closeDevMode">Disattiva</button>
        </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>