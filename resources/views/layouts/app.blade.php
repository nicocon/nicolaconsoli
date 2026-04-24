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

    <footer class="site-footer">
        <div class="container">
            <p>© {{ date('Y') }} Nicola Consoli. Tutti i diritti riservati.</p>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>