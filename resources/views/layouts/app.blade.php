<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('mite.ico') }}">
    <title>@yield('title', 'Alternative Pest Control') — ALPECO</title>
    <meta name="description" content="Alpeco Alternative Pest Control — call 07 985 4198 for help with ants, bed bugs, birds, borer, cockroaches, fleas, flies, rats and mice, and spiders.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <nav class="container nav" aria-label="Main navigation">
            <a class="brand" href="{{ route('home') }}" aria-label="Alpeco Alternative Pest Control home">
                <span class="brand-mark">A</span>
                <span class="brand-name">ALPECO<small>Alternative Pest Control</small></span>
            </a>
            <button class="menu-button" type="button" aria-expanded="false" aria-controls="nav-links" aria-label="Toggle navigation">☰</button>
            <div class="nav-links" id="nav-links">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                <a class="nav-quote" href="tel:+6479854198">Call 07 985 4198</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-main">
            <div class="footer-brand">
                <a class="brand" href="{{ route('home') }}" aria-label="Alpeco Alternative Pest Control home">
                    <span class="brand-mark">A</span>
                    <span class="brand-name">ALPECO<small>Alternative Pest Control</small></span>
                </a>
                <p>Alternative pest control for homes and businesses. Call for a free phone quote.</p>
                <a class="footer-phone" href="tel:+6479854198">+64 7 985 4198</a>
                <a class="footer-email" href="mailto:info@alpeco.co.nz">info@alpeco.co.nz</a>
            </div>

            <nav class="footer-col" aria-label="Footer navigation">
                <h3>Explore</h3>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('about') }}">About ALPECO</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('quote') }}">Request a Quote</a>
            </nav>

            <nav class="footer-col" aria-label="Partner websites">
                <h3>Our Websites</h3>
                <a class="footer-partner-link" href="https://peststop.co.nz/" target="_blank" rel="noopener noreferrer">PestStop</a>
                <a class="footer-partner-link" href="https://www.brcnz.co.nz/" target="_blank" rel="noopener noreferrer">BRC Technology</a>
                <a class="footer-partner-link" href="https://www.heatme.co.nz/" target="_blank" rel="noopener noreferrer">HEATME™</a>
            </nav>

            <nav class="footer-col" aria-label="Social media">
                <h3>Follow ALPECO</h3>
                <a href="https://www.facebook.com/ALPECONZ#" target="_blank" rel="noopener noreferrer">Facebook</a>
                <a href="https://www.youtube.com/channel/UC9xDQyx63SBot-WkcvYbq2A" target="_blank" rel="noopener noreferrer">YouTube</a>
            </nav>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <span>© {{ now()->year }} ALPECO. All rights reserved.</span>
                <a href="https://www.alpeco.co.nz/downloads/Alpeco-TC-2021.pdf" target="_blank" rel="noopener noreferrer">Terms &amp; Conditions</a>
            </div>
        </div>
    </footer>

</body>
</html>
