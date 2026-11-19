@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <img class="hero-image" src="{{ asset('images/Colorful_bug_Banner.jpg') }}" alt="" fetchpriority="high">
    <div class="container hero-content">
        <div class="eyebrow">Alternative Pest Control</div>
        <h1>Pest problems? <br><span>We can help.</span></br></h1>
        <p>Call for a free phone quote and practical help from ALPECO.</p>
        <div class="hero-actions">
            <a class="button button-red" href="tel:+6479854198">Call 07 985 4198</a>
            <a class="button button-outline" href="{{ route('services') }}">See Pest Services</a>
        </div>
    </div>
</section>

<div class="stats">
    <div class="container">
        <div class="stat"><strong>Free</strong><span>Phone quote</span></div>
        <div class="stat"><strong>9</strong><span>Pest types covered</span></div>
        <div class="stat"><strong>One call</strong><span>Practical pest control</span></div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">What we cover</div>
            <h2>Common pests. Practical solutions.</h2>
            <p>Speak with ALPECO about the pest problem you are dealing with.</p>
        </div>
        <div class="pest-grid">
            @foreach ([
                ['Ants', 'ant.png'], ['Bed Bugs', 'bedbug.png'], ['Birds', 'bird.png'],
                ['Borer', 'borer.png'], ['Cockroaches', 'cockroach.png'], ['Fleas', 'flea.png'],
                ['Flies', 'fly.png'], ['Rats & Mice', 'rat.png'], ['Spiders', 'spider.png'],
            ] as [$name, $icon])
                <article class="pest-card">
                    @if ($icon)
                        <img src="{{ asset('images/icons/'.$icon) }}" alt="" loading="lazy">
                    @else
                        <span class="pest-letter">{{ substr($name, 0, 1) }}</span>
                    @endif
                    <h3>{{ $name }}</h3>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container split">
        <img class="feature-image" src="{{ asset('images/SitePicture.jpg') }}" alt="Close-up of an insect on a leaf" loading="lazy">
        <div class="split-copy">
            <div class="eyebrow">Why call ALPECO</div>
            <h2>Straightforward advice. Local pest control.</h2>
            <p>Tell us what you are seeing and get clear next-step help from Alternative Pest Control.</p>
            <div class="check-list">
                <span>Free phone quote</span>
                <span>Practical, focused service</span>
                <span>Help for homes and businesses</span>
            </div>
            <a class="button button-dark" href="tel:+6479854198">Call 07 985 4198</a>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Ready for a free phone quote?</h2>
        <a class="button" href="tel:+6479854198">Call 07 985 4198</a>
    </div>
</section>
@endsection
